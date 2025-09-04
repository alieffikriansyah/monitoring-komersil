<?php

class m_data extends CI_Model {
 private function checker($file,$tahun) {
        $demo_error=array();
        $data=array();
        $field_table = $this->m_saran_kritik->getData("PRK")->list_fields();
       
        $this->load->library('EXCEL');
        # $file = "./temp/loader_template.xlsx";
        $objPHPExcel = PHPExcel_IOFactory::load($file);

        
        unset($arr_data);
        unset($header);
        
        $sheet = $objPHPExcel->getSheet(1); //cari sheet
        $highestRow = $sheet->getHighestRow(); //cari baris maksimal
        $highestColumn = 'AZ';
       
        
        $objPHPExcel->setActiveSheetIndex(1);
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            if ($row == 1) {
                $header[] = $column;   
            } 
        }


        
        $fieldRow = $sheet->rangeToArray('A2:' . $highestColumn . '2', NULL, TRUE, TRUE);
        foreach ($fieldRow[0] as $value) {
            if ($value == "" || $value == null) {
                continue;
            }
         
            $field[] = $value;
        }
       
        // echo "<pre>", print_r($field), "</pre>";
       // echo "<pre>", print_r($header), "</pre>";
        // 
       $procost=array();
        for ($row = 3; $row <= $highestRow; $row++) {
            $dataRow = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, TRUE); //select 

            if ($dataRow[0][0] == NULL) {
                continue;
            };
            $key =array();
            if (!isset($field)) {
                echo "Error: fields are required.";
                die();
            }
            foreach ($field as $idx => $clm) {
               if ($clm =="PROJECT_NUMBER") {
                    if(strpos($dataRow[0][$idx], "\n") !== FALSE) {
                        $pm=explode("\n",$dataRow[0][$idx]); 
                            foreach ($pm as $key_p => $value_p) {

                                    $procost[]=$value_p;
                                    $key['procost'][]=[
                                        'pm'    =>  $value_p,
                                        'row'=> $row,
                                        'col'=>(array_search("PROJECT_NUMBER",$field) != '' ? $header[array_search("PROJECT_NUMBER",$field)]:'')
                                    ];
                                // $procost = $this->m_saran_kritik->getProcost($value_p);
                                // if($procost->num_rows() > 0) {
                                //     $budget = $this->m_saran_kritik->getBudget($procost->row_array()['PROJECT_ID'])->row_array();
                                 
                                //     $key['procost'][]=[
                                //         'PROCOST_ID'        => $procost->row_array()['PROJECT_ID'],
                                //         'PROJECT_NUMBER'    => $procost->row_array()['PROJECT_NUMBER'],
                                //         'PROJECT_NAME'      => $procost->row_array()['PROJECT_NAME'],
                                //         'DESCRIPTION'       => $procost->row_array()['DESCRIPTION'],
                                //         'BUDGET'            => $budget['BUDGET'],
                                //      ];
                                // }else{
                                //     $demo_error[]=[
                                //         'sheet'         => 1,
                                //         'row'           => $row,
                                //         'col'           => (array_search("PROJECT_NUMBER",$field) != '' ? $header[array_search("PROJECT_NUMBER",$field)]:''),
                                //         'message'       => 'procost '.$value_p.' not found'
                                //     ];
                                // } 
                            }
                    }else{
                        $procost[]=$dataRow[0][$idx];
                        $key['procost'][]=
                        [
                            'pm'    =>  $dataRow[0][$idx],
                            'row'=> $row,
                            'col'=>(array_search("PROJECT_NUMBER",$field) != '' ? $header[array_search("PROJECT_NUMBER",$field)]:'')
                        ];


                        // $procost = $this->m_saran_kritik->getProcost($dataRow[0][$idx])->row_array();
                        // $budget = $this->m_saran_kritik->getBudget($procost['PROJECT_ID'])->row_array();
                        // if(!empty($procost)) {
                        //     $budget = $this->m_saran_kritik->getBudget($procost['PROJECT_ID'])->row_array();
                         
                        //     $key['procost'][] =[
                        //         'PROCOST_ID'        => $procost['PROJECT_ID'],
                        //         'PROJECT_NUMBER'    => $procost['PROJECT_NUMBER'],
                        //         'PROJECT_NAME'      => $procost['PROJECT_NAME'],
                        //         'DESCRIPTION'       => $procost['DESCRIPTION'],
                        //         'BUDGET'            => $budget['BUDGET'],
                        //      ];
                        // }else{
                        //     $demo_error[]=[
                        //         'sheet'         => 1,
                        //         'row'           => $row,
                        //         'col'           => (array_search("PROJECT_NUMBER",$field) != '' ? $header[array_search("PROJECT_NUMBER",$field)]:''),
                        //         'message'       => 'procost '.$dataRow[0][$idx].' not found'
                        //     ];
                           
                        // } 
                      
                    }
              
               }else{
                $key['header'][$clm] = $dataRow[0][$idx];
               }
              
            }
           
            $data[$row]= $key;
        }
       
        // //
        // echo "<pre>", print_r($procost), "</pre>";
        $data_procost = $this->m_saran_kritik->getProcostIn($procost)->result_array();
        $semple = array();
        foreach ($data_procost as $key => $value) {
            $semple[$value['PROJECT_NUMBER']] = $value;
        }
        // echo "<pre>", print_r($semple), "</pre>";
        // echo "<pre>", print_r($data), "</pre>";
      
        foreach ($data as $key => $value) {
          
            $unit = $this->m_saran_kritik->getUnitBy($value['header']['UNIT_NAMA'])->row_array();
            if(!empty($unit)) {
                $data[$key]['header']['UNIT_ID'] = $unit['UNIT_ID'] ;
            }else{
                $demo_error[]=[
                    'sheet'         => 1,
                    'row'           => $key,
                    'col'           => (array_search("UNIT_NAMA",$field) == '' ? $header[array_search("UNIT_NAMA",$field)]:''),
                    'message'       => 'Unit '.$value['header']['UNIT_NAMA'].' not in data master'
                ];                      
            } 

            $bic = $this->m_saran_kritik->getWhere("PRK_BIC",array("BIC_NAME" => $value['header']['BIC'] ))->row_array();
            if(!empty($bic)) {
                    $data[$key]['header']['BIC_ID'] = $bic['BIC_ID'] ;
            }else{
                $demo_error[]=[
                        'sheet'         => 1,
                        'row'           => $key,
                        'col'           => (array_search("BIC",$field) != '' ? $header[array_search("BIC",$field)]:''),
                        'message'       => $value['header']['BIC'].' not in data BIC'
                ]; 
            } 

            $proses = $this->m_saran_kritik->getWhere("PRK_MST_PROSES",array("PROSES_NAME" =>$value['header']['PROSES']))->row_array();
            if(!empty($proses)) {
                $data[$key]['header']['PROSES_ID'] = $proses['PROSES_ID'] ;
            }else{
           
                $demo_error[]=[
                    'sheet'         => 1,
                    'row'           => $key,
                    'col'           => (array_search("PROSES",$field) != '' ? $header[array_search("PROSES",$field)]:''),
                    'message'       => (!empty($value['header']['PROSES']) ? ' not in data proses' :'data null'  )
                ];   
            }  
            $proses_detail = $this->m_saran_kritik->getWhere("PRK_MST_PROSES_DETAIL",array("PROSES_DETAIL" => $value['header']['PROSES_DETAIL'],'PROSES_ID' => $proses['PROSES_ID']))->row_array();
            if(!empty($proses_detail)) {
                $data[$key]['header']['PROSES_DETAIL_ID'] = $proses_detail['PROSES_DETAIL_ID'] ;
                
            }else{
                $demo_error[]=[
                    'sheet'         => 1,
                    'row'           => $key,
                    'col'           => (array_search("PROSES_DETAIL",$field) != '' ? $header[array_search("PROSES_DETAIL",$field)]:''),
                    'message'       => (!empty($value['header']['PROSES_DETAIL']) ? ' not in data proses detail' : 'data null'  )
                ];   
            }  

            foreach ($value['procost'] as $key2 => $val2) {
                if (array_key_exists($val2['pm'],$semple))
                {
                    $data[$key]['procost'][$key2]['PROJECT_ID']         = $semple[$val2['pm']]['PROJECT_ID'];
                    $data[$key]['procost'][$key2]['PROJECT_NUMBER']     = $semple[$val2['pm']]['PROJECT_NUMBER'];
                    $data[$key]['procost'][$key2]['PROJECT_NAME']       = $semple[$val2['pm']]['PROJECT_NAME'];
                    $data[$key]['procost'][$key2]['DESCRIPTION']        = $semple[$val2['pm']]['DESCRIPTION'];
                 
                }
                else
                {
                    $demo_error[]=[
                                'sheet'         => 1,
                                'row'           => $val2['row'],
                                'col'           => $val2['col'],
                                'message'       => 'procost '.$val2['pm'].' not found'
                            ];
                }
               
            }

        }

      
        if ($demo_error) {
            foreach ($demo_error as $error) {
                $sheet = $error["sheet"];
                $column = $error["col"];
                $row = $error["row"];
                $message = $error["message"];

                $objPHPExcel->setActiveSheetIndex($sheet);


                $objPHPExcel->getActiveSheet()->getStyle("$column$row")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
                $objPHPExcel->getActiveSheet()->getStyle("$column$row")->getFill()->getStartColor()->setARGB("ffffcece");
                $objPHPExcel->getActiveSheet()->getTabColor()->setARGB('FFFF0000');
                $objPHPExcel->getActiveSheet()->getComment("$column$row")->setAuthor('Timur Sahadewa');

                $objPHPExcel->getActiveSheet()->getComment("$column$row")->getText()->createTextRun($message);

                $objPHPExcel->getActiveSheet()->getComment("$column$row")->getText()->createTextRun("\r\n");

                $objPHPExcel->getActiveSheet()->getComment("$column$row")->getText()->createTextRun("\r\n");
            }
            #header('Content-Type: application/vnd.ms-excel');
            #header('Content-Disposition: attachment;filename="Error Loader Template - ' . date("Y-m-d H:i:s") . '.xlsx"');
            #header('Cache-Control: max-age=0');

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $namafile = "Error Loader Template " . date("Y-m-d H.i.s") . ".xlsx";
            $path = "./temp/$namafile";

            $upload_id = $this->m_saran_kritik->getNextID('PRK_UPLOAD_SEQ');
            $data = array(
                "STATUS" => 500,
                "UPLOAD_ID" => $upload_id,
                "PATH" => $path,
                "FILENAME" => $namafile,
                "TYPE" => "error_loader_template",
                "DIBUAT_OLEH" => session("user_id"),
            );
            $this->db->set('WAKTU_DIBUAT', 'CURRENT_TIMESTAMP', FALSE);
           
            // echo "<pre>", print_r($data), "</pre>";
            // $this->m_upload->insert($data);

            $objWriter->save($path);
            #$objWriter->save('php://output');
            echo json_encode($data);
            // $this->session->set_flashdata('pesan', warning("Data gagal diload, silahkan check error log"));
        }else {

            if (count($data) > 0) {
              
                foreach ($data as $key => $val) {
                    $prk_id = $this->m_saran_kritik->getNextID('PRK_NO_USULAN');
                    $insert = $val['header'];
                    // $procost =$insert['PROJECT_NUMBER'];
                    // unset($insert['PROJECT_NUMBER']);
                    $max = 6;
                    $insert['TAHUN'] = $tahun;
                    $insert['PRK_ID'] = $prk_id;
                    $insert['USULAN_NO'] = 'PRO-'.date("y").'-'.sprintf("%0".$max."s", $prk_id);
                    
                    $this->m_saran_kritik->Save('PRK',$insert);
                  
                    // echo "<pre>", print_r($val['procost']), "</pre>";
                    foreach ($val['procost'] as $key_p => $val_p) {
                        $val_p['PRK_ID'] =  $prk_id;
                        // echo "<pre>", print_r($val_p), "</pre>";
                        // $this->m_saran_kritik->Save('PRK_PROCOST',$val_p);
                     $insert_procost=[
                        'PRK_ID'            => $prk_id,
                        'PROCOST_ID'        => $val_p['PROJECT_ID'],
                        'PROJECT_NUMBER'    => $val_p['PROJECT_NUMBER'],
                        'PROJECT_NAME'      =>  $val_p['PROJECT_NAME'],
                        'DESCRIPTION'       =>  $val_p['DESCRIPTION']
                     ];  

                     $this->m_saran_kritik->Save('PRK_PROCOST',$insert_procost);
                    }

                  
                   
                }

                $data = array(
                    "STATUS" => 200,
                   
                );
                echo json_encode($data);
            } else {
                
            }
        }
    }
}