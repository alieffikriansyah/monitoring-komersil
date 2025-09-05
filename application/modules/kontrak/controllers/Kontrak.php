<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Kontrak extends CI_Controller {

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
        $data["title"] = "Data Induk";
        $data["title_des"] = " Data Induk";
        $data["content"] = "v_index";

        $data["data"] = $data;
        $data['cabang'] = $this->Mod->getWhere('cabang', "status != 8")->result_array();
        $data['kategori'] = $this->Mod->getWhere('kategori', "status != 8")->result_array();
        $data['portofolio'] = $this->Mod->getWhere('portofolio', "status != 8")->result_array();
        $data['lob'] = $this->Mod->getWhere('lob', "status != 8")->result_array();
        $data['sub_lob'] = $this->Mod->getWhere('sub_lob', "status != 8")->result_array();
        $data['company'] = $this->Mod->getWhere('company', "status != 8")->result_array();
        $data['company_category'] = $this->Mod->getWhere('company_category', "status != 8")->result_array();
        $data['user'] = $this->Mod->getWhere('user', "status != 8")->result_array();
        $this->load->view('template_v2', $data);
        $menu = fetch_menu();
        
    }

    // Fungsi menampilkan data dari database ke tabel view
   public function LoadData()
{
    // Query dengan join ke tabel kategori, portofolio, lob, sub_lob, company, company_category
    $this->db->select('
        k.*, 
        kat.nama_kategori, 
        p.nama_portofolio, 
        l.nama_lob, 
        sl.nama_sub_lob, 
        c.nama_company, 
        cc.nama_company_category,
        cb.kode_cabang,
        cb.name_cabang
    ');
    $this->db->from('kontrak k');
    $this->db->join('kategori kat', 'k.id_kategori = kat.id_kategori', 'left');
    $this->db->join('portofolio p', 'k.id_portofolio = p.id_portofolio', 'left');
    $this->db->join('lob l', 'k.id_lob = l.id_lob', 'left');
    $this->db->join('sub_lob sl', 'k.id_sub_lob = sl.id_sub_lob', 'left');
    $this->db->join('company c', 'k.id_company = c.id_company', 'left');
    $this->db->join('company_category cc', 'k.id_company_category = cc.id_company_category', 'left');
    $this->db->join('cabang cb', 'k.id_cabang = cb.id_cabang', 'left');
    
    $this->db->where('k.status', 1);
    
    // Menambahkan group by sesuai dengan kolom-kolom yang dipilih dalam SELECT
    $this->db->group_by('
        k.id_kontrak, 
        kat.nama_kategori, 
        p.nama_portofolio, 
        l.nama_lob, 
        sl.nama_sub_lob, 
        c.nama_company, 
        cc.nama_company_category,
        cb.kode_cabang,
        cb.name_cabang
    ');

    $query = $this->db->get();
    
    $data['Kontrak'] = $query->result_array();
    
    // Mengembalikan data dalam format JSON
    echo json_encode($data);
}
    function ListData(){
        $data = $this->m_data->getWhere('kontrak',array('status !='=> 8))->result_array(); 

        echo json_encode($data);
    }



    function LoadDataParent(){   
        $data_res['ms'] =$this->m_data->getWhere('kontrak',array('id_kontrak' =>'-1' ))->result_array();
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


// Function di controller untuk menyimpan data ke DB.
public function SaveData()
{
    // Ambil data dari form (POST)
    $data = array(
        'no_kontrak'          => $this->input->post('no_kontrak'),
        'nama_kontrak'        => $this->input->post('nama_kontrak'),
        'id_cabang'           => $this->input->post('id_cabang'),
        'id_kategori'         => $this->input->post('id_kategori'),
        'id_lob'              => $this->input->post('id_lob'),
        'id_company'          => $this->input->post('id_company'),
        'nilai_kontrak'       => $this->input->post('nilai_kontrak'),
        'start_kontrak'       => $this->input->post('start_kontrak'),
        'end_kontrak'            => $this->input->post('end_kontrak'),
        'bukti_kontrak'          => $this->input->post('bukti_kontrak'),
        'user_create'            => $this->input->post('user_create'),
        
        // Tambahkan field lain sesuai kebutuhan tabel kontrak
        // Default status aktif
        'status'              => 1
    );

    // Hapus field kosong
    $data = array_filter($data);

    if (!empty($data)) {
        // Simpan ke tabel kontrak
        $this->db->insert('kontrak', $data);

        $res = [
            'code' => 200,
            'msg'  => 'Data kontrak berhasil disimpan'
        ];
    } else {
        $res = [
            'code' => 400,
            'msg'  => 'Data gagal disimpan, pastikan semua field terisi'
        ];
    }

    // Return response JSON
    echo json_encode($res);
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