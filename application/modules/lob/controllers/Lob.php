<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Lob extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('EXCEL');
        $this->load->model("m_data");
    }

    // private function position() {
    //     $data["position"] = "perangkat";
    //     return $data;
    // }

    public function index()
    {
      
        //$data = $this->position();
        // $data = access($data,"VIEW");
       
        $data["plugin"][] = "plugin/datatable";
        $data["plugin"][] = "plugin/select2";
        $data["title"] = "Lob";
        $data["title_des"] = " Daftar Lob";
        $data["content"] = "v_index";

        $data["data"] = $data;

        $this->load->view('template_v2', $data);
        $menu = fetch_menu();
        // foreach ($menu as $key => $value) {
        //     if (count($value['sub']) > 0 ) {
        //        echo "ada turunan";
        //     }else{
        //         echo "tidak";
        //     }

        // }
        // echo "<pre>",print_r ($menu ),"</pre>";
    }



    // Fungsi menampilkan data dari database ke tabel view
    function LoadData(){
        $data['Lob']    = $this->Mod->getWhere('lob',array('status !=' =>8 ))->result_array(); 
       echo json_encode($data);
    }

    function ListData(){
        $data = $this->m_data->getWhere('lob',array('status !='=> 8))->result_array(); 

        echo json_encode($data);
    }



    function LoadDataParent(){   
        $data_res['ms'] =$this->m_data->getWhere('lob',array('id_lob' =>'-1' ))->result_array();
       echo json_encode($data_res);
   }
  
   
 // Fungsi menampilkan nama data di field saat akan melakukan edit
   function EditData($id=null){
       if (!empty($id)) {
           $data = $this->m_data->getWhere('lob',array('id_lob' =>$id ))->row_array();
           echo json_encode($data);
       }else{
           echo "kosong";
       }
   }


public function Update() {
    // Ambil ID dari formData
    $id = $this->input->post('id_lob');
    $nama_lob = $this->input->post('nama_lob');
    
    if (!empty($id) && !empty($nama_lob)) {
        // Hanya update nama_pulau saja
        $data = [
            'nama_lob' => $nama_lob
            // Status tidak diikutsertakan agar tidak terupdate
        ];
        
        $res_update = $this->Mod->update2('lob', ['id_lob' => $id], $data);
        
        if ($res_update) {
            $res = [
                'code' => 200,
                'msg' => 'Nama lob berhasil diupdate'
            ];
        } else {
            $res = [
                'code' => 400,
                'msg' => 'Gagal update atau nama sama dengan yang sudah ada'
            ];
        }
    } else {
        $res = [
            'code' => 400,
            'msg' => 'ID lob atau nama lob tidak valid'
        ];
    }
    
    echo json_encode($res);
}


   // Fungsi sava data ke database
   public function SaveData()
   {
       $data=array_filter($_POST);

       if (!empty($data)) {
            $data['status'] = 1;
           $this->db->insert('lob',$data);
           $res=[
               'code' => '200',
               'msg'       => 'Data Berhasil di Simpan'
           ];

           // echo "<pre>",print_r ( $data),"</pre>";
           echo json_encode($res);
       }else{
           $res=[
               'code'    => '400',
               'msg'       => 'Data Gagal Disimpan, pastikan semua terisi'
           ];
           echo json_encode($res);
       }  
   }



    function Delete($id=null){
        $data=['status' => 8];
        $res_update = $this->Mod->update2('lob',array('id_lob'=>$id),$data);  
       
        $res=[
            'code'      => '200',
            'msg'       => 'Data Berhasil di Hapus'
        ];
        echo json_encode($res);
    }



    
    


   

    

}