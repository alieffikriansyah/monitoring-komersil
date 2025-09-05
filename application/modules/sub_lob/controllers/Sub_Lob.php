<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Sub_Lob extends CI_Controller {

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
        $data["title"] = "Sub_Lob";
        $data["title_des"] = " Daftar Sub_Lob";
        $data["content"] = "v_index";

        $data["data"] = $data;
         $data['lob'] = $this->Mod->getWhere('lob', "status != 8")->result_array();
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
    $this->db->select('sub_lob.*, lob.nama_lob');
    $this->db->from('sub_lob');
    $this->db->join('lob', 'lob.id_lob = sub_lob.id_lob', 'left');
    $this->db->where('sub_lob.status !=', 8);
    $query = $this->db->get();
     $data['sub_lob'] = $query->result_array();
        // $data['Sub_Lob']    = $this->Mod->getWhere('sub_lob',array('status !=' =>8 ))->result_array(); 
       echo json_encode($data);
    }

    function ListData(){
        $data = $this->m_data->getWhere('sub_lob',array('status !='=> 8))->result_array(); 

        echo json_encode($data);
    }



    function LoadDataParent(){   
        $data_res['ms'] =$this->m_data->getWhere('sub_lob',array('id_sub_lob' =>'-1' ))->result_array();
       echo json_encode($data_res);
   }
  
   
 // Fungsi menampilkan nama data di field saat akan melakukan edit
   function EditData($id=null){
       if (!empty($id)) {
           $data = $this->m_data->getWhere('sub_lob',array('id_sub_lob' =>$id ))->row_array();
           echo json_encode($data);
       }else{
           echo "kosong";
       }
   }


public function Update() {
    // Ambil ID dari formData
    $id = $this->input->post('id_sub_lob');
    $nama_sub_lob = $this->input->post('nama_sub_lob');
    
    if (!empty($id) && !empty($nama_sub_lob)) {
        // Hanya update nama_pulau saja
        $data = [
            'nama_sub_lob' => $nama_sub_lob
            // Status tidak diikutsertakan agar tidak terupdate
        ];
        
        $res_update = $this->Mod->update2('sub_lob', ['id_sub_lob' => $id], $data);
        
        if ($res_update) {
            $res = [
                'code' => 200,
                'msg' => 'Nama sub_lob berhasil diupdate'
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
            'msg' => 'ID sub_lob atau nama sub_lob tidak valid'
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
           $this->db->insert('sub_lob',$data);
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
        $res_update = $this->Mod->update2('sub_lob',array('id_sub_lob'=>$id),$data);  
       
        $res=[
            'code'      => '200',
            'msg'       => 'Data Berhasil di Hapus'
        ];
        echo json_encode($res);
    }



    
    


   

    

}