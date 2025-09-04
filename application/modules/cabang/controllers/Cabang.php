<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Cabang extends CI_Controller {

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
        $data["title"] = "cabang";
        $data["title_des"] = " Daftar cabang";
        $data["content"] = "v_index";

        $data["data"] = $data;
        $data['pulau'] = $this->Mod->getWhere('pulau', array('status != ' > 8))->result_array();

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
   public function LoadData()
{
    // Query dengan join ke tabel pulau
    $this->db->select('cabang.*, pulau.nama_pulau');
    $this->db->from('cabang');
    $this->db->join('pulau', 'pulau.id_pulau = cabang.id_pulau', 'left');
    $this->db->where('cabang.status !=', 8);
    $query = $this->db->get();
    
    $data['Cabang'] = $query->result_array();
    
    echo json_encode($data);
}
    function ListData(){
        $data = $this->m_data->getWhere('cabang',array('status !='=> 8))->result_array(); 

        echo json_encode($data);
    }



    function LoadDataParent(){   
        $data_res['ms'] =$this->m_data->getWhere('cabang',array('id_cabang' =>'-1' ))->result_array();
       echo json_encode($data_res);
   }
  
   
    // Fungsi menampilkan nama data di field saat akan melakukan edit
   function EditData($id=null){
       if (!empty($id)) {
           $data = $this->m_data->getWhere('cabang',array('id_cabang' =>$id ))->row_array();
           echo json_encode($data);
       }else{
           echo "kosong";
       }
   }



   // Fungsi update data ke database
   public function UpdateData($id=null)
   {
       $data=array_filter($_POST);
       if (!empty( $data)) {
           if (!array_key_exists('kode_cabang', $data)) {
               $data['kode_cabang'] ='-1';
            }
           
            $res_update = $this->Mod->update2('cabang',array('id_cabang'=>$id),$data);  
           if ($res_update) {
               $res=[
                   'code' => '200',
                   'msg'       => 'Data Berhasil di Update'
               ];
           }else{
               $res=[
                   'code'    => '400',
                   'msg'       => 'Data Gagal Disimpan, pastikan semua terisi'
               ];
           }
           echo json_encode($res);
       }else{
           $res=[
               'status'    => '400',
               'msg'       => 'Data Gagal Disimpan, pastikan semua terisi'
           ];
           echo json_encode($res);
       }  
   }



   // Fungsi sava data ke database
//    public function SaveData()
//    {
//        $data=array_filter($_POST);

//        if (!empty($data)) {
//            $this->db->insert('cabang',$data);
//            $res=[
//                'code' => '200',
//                'msg'       => 'Data Berhasil di Simpan'
//            ];

//            // echo "<pre>",print_r ( $data),"</pre>";
//            echo json_encode($res);
//        }else{
//            $res=[
//                'code'    => '400',
//                'msg'       => 'Data Gagal Disimpan, pastikan semua terisi'
//            ];
//            echo json_encode($res);
//        }  
//    }
public function SaveData()
{
    // Mengambil data dari form (menggunakan POST)
    $data = array_filter($_POST); // Menghilangkan elemen array yang kosong

    // Menyimpan data jika tidak kosong
    if (!empty($data)) {
        // Menambahkan id_pulau sesuai pilihan di form
        $data['id_pulau'] = $_POST['id_pulau']; 
        $data['kode_cabang'] = $_POST['kode_cabang'];
        $data['name_cabang'] = $_POST['name_cabang'];
        $data['provinsi_cabang'] = $_POST['provinsi_cabang'];

        // Menambahkan status dengan nilai 1
        $data['status'] = 1;

        // Menyimpan data ke tabel 'cabang'
        $this->db->insert('cabang', $data);

        // Mengirimkan response sukses jika data berhasil disimpan
        $res = [
            'code' => '200',
            'msg'  => 'Data Berhasil di Simpan'
        ];

        // Mengembalikan response dalam bentuk JSON
        echo json_encode($res);
    } else {
        // Mengirimkan response gagal jika data kosong
        $res = [
            'code' => '400',
            'msg'  => 'Data Gagal Disimpan, pastikan semua terisi'
        ];
        echo json_encode($res);
    }
}




    function Delete($id=null){
        $data=['status' => 8];
        $res_update = $this->Mod->update2('cabang',array('id_cabang'=>$id),$data);  
       
        $res=[
            'code'      => '200',
            'msg'       => 'Data Berhasil di Hapus'
        ];
        echo json_encode($res);
    }



    
    // function LoadData(){
       
    //     $data_res   = $this->Mod->GetCustome('SELECT a.*,b.kode_cabang,c.nama_cabang FROM cabang')->result_array();
    //     foreach ($data as $key => $value) {
    //     //    $data_res[$key ]['no_tiket']=  TKTNum( $value['id_tiket']);
    //        $data_res[$key ]['label_status']=  st($value['status']);
           
    //     } 
    //     echo json_encode($data);
    // }

    
    



    // function Loadmasterdetail($id){
    //     //$data= $this->position();
    //    // $acc  = access($data,"VIEW")['access'];     
    //     $data = $this->m_data->getWhere('cabang',array('id_cabang' =>$id,'status !=' => 8 ))->result_array();
    //     echo json_encode($data);
    // }
   


    // function LoadDataByid($id){
    //     //$data= $this->position();
    //    // $acc  = access($data,"VIEW")['access'];
    //     $data_res['negara'] = $this->m_data->getWhere('cabang',array('id_cabang' =>$id ))->row_array();
    //     // $data_res['detail'] = $this->m_data->getWhere('perangkat_detail',array('id_perangkat' =>$id ))->result_array();
    //     echo json_encode($data_res);
    // }



    // function LoadDataDetail($id=null){
    //     $data_res['detail'] = $this->Mod->GetCustome('SELECT a.*,b.nama as property FROM perangkat_detail a left JOIN master_perangkat_detail b on b.idmaster_detail_perangkat = a.idmaster_detail_perangkat Where  a.id_perangkat = \''.$id.'\'')->result_array();
    //     echo json_encode($data_res);
    // }
   


   

    

}