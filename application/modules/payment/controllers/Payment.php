<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class Payment extends CI_Controller {

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
        $data["title"] = "payment";
        $data["title_des"] = " Daftar payment";
        $data["content"] = "v_index";

        $data["data"] = $data;
        $data['kontrak'] = $this->Mod->getWhere('kontrak', "status != 8")->result_array();
        $data['payment'] = $this->Mod->getWhere('payment', "status != 8")->result_array();
        $data['user'] = $this->Mod->getWhere('user', "status != 8")->result_array();
        $this->load->view('template_v2', $data);
        $menu = fetch_menu();
        
    }

     function ListData(){
        $data = $this->m_data->getWhere('payment',array('status !='=> 8))->result_array(); 

        echo json_encode($data);
    }



    function LoadDataParent(){   
        $data_res['ms'] =$this->m_data->getWhere('payment',array('id_payment' =>'-1' ))->result_array();
       echo json_encode($data_res);
   }
  

    // Fungsi menampilkan data dari database ke tabel view
  public function LoadData()
{
    // Query dengan join ke tabel kontrak dan cabang sesuai dengan SQL yang diberikan
    $this->db->select('
        p.id_payment,
        p.no_payment,
        p.tanggal_payment, 
        k.no_kontrak, 
        k.nilai_kontrak,
        k.start_kontrak,
        k.end_kontrak,
        c.kode_cabang,
        c.name_cabang,
        p.user_create,
        p.user_edit
    ');
    $this->db->from('payment p');
    $this->db->join('kontrak k', 'k.id_kontrak = p.id_kontrak', 'left');
    $this->db->join('cabang c', 'c.id_cabang = k.id_cabang', 'left');
    
    $this->db->where('p.status !=', 8);
    
    // Menambahkan group by sesuai dengan kolom-kolom yang dipilih dalam SELECT
    $this->db->group_by('
        p.id_payment,
        p.no_payment,
        p.tanggal_payment, 
        k.no_kontrak, 
        k.nilai_kontrak,
        k.start_kontrak,
        k.end_kontrak,
        c.kode_cabang,
        c.name_cabang,
        p.user_create,
        p.user_edit
    ');

    $query = $this->db->get();
    
    $data['Payment'] = $query->result_array();
    
    // Mengembalikan data dalam format JSON
    echo json_encode($data);
}
   // Fungsi menampilkan data dari database ke tabel view
public function LoadDataDetail($id)
{
    // cek dulu nilai $id
    // sementara tambahkan log untuk debug
    // var_dump($id); exit;

    $this->db->select('
        pd.*,
        p.no_payment
    ');
    $this->db->from('payment_detail pd');
    $this->db->join('payment p', 'p.id_payment = pd.id_payment', 'left');
    $this->db->where('pd.status !=', 8);
     $this->db->where('p.id_payment', $id);

    // if ($id !== null) {
    //     $this->db->where('p.id_payment', $id);
    // }

    $query = $this->db->get();
    $data['payment_detail'] = $query->result_array();

    echo json_encode($data);
}



    // Fungsi menampilkan nama data di field saat akan melakukan edit
   function EditData($id=null){
       if (!empty($id)) {
           $data = $this->m_data->getWhere('payment',array('id_payment' =>$id ))->row_array();
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
           
            $res_update = $this->Mod->update2('payment',array('id_payment'=>$id),$data);  
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
        'no_payment'             => $this->input->post('no_payment'),
        'id_kontrak'             => $this->input->post('id_kontrak'),
        'tanggal_payment'        => $this->input->post('tanggal_payment'),
        'user_create'            => $this->input->post('user_create'),
        
        // Tambahkan field lain sesuai kebutuhan tabel kontrak
        // Default status aktif
        'status'              => 1
    );

    // Hapus field kosong
    $data = array_filter($data);

    if (!empty($data)) {
        // Simpan ke tabel kontrak
        //echo "<pre>",print_r ($data),"</pre>";
        $this->db->insert('payment', $data);

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
        $res_update = $this->Mod->update2('payment',array('id_payment'=>$id),$data);  
       
        $res=[
            'code'      => '200',
            'msg'       => 'Data Berhasil di Hapus'
        ];
        echo json_encode($res);
    }



    
   public function SaveDetail()
{
    $pymhd  = (float) $this->input->post('pymhd');
    $ar     = (float) $this->input->post('account_receivable');
    $cash   = $pymhd + $ar;

    // Menyusun data yang akan disimpan
    $data = [
        'no_payment_detail'      => $this->input->post('no_payment_detail'),
        'id_payment'             => $this->input->post('id_payment'),
        'pymhd'                  => $pymhd,
        'account_receivable'     => $ar,
        'cash'                   => $cash,
        'tanggal_payment_detail' => $this->input->post('tanggal_payment_detail'),
        'user_create'            => $this->input->post('user_create'),
        'user_edit'              => $this->input->post('user_edit'),
        'status'                 => 1,
    ];

    // Menggunakan query builder CodeIgniter untuk melakukan insert
    return $this->db->insert('payment_detail', $data);
}

    function UpdateDetail($id=null){
        $data=[
            'nama'              => $this->input->post('job_name'),
            'id_jenisperangkat' => $this->input->post('id_jenisperangkat'),
            'id_unit'           => sess()['unit'],
            'status'            => 1,
        ];
        $this->m_data->updateData('job_pm',array('id_jobpm '=>$id ),$data);
    }

    public function DeleteDetail($id=null)
    {
        $data=['status' => 8];
        $res_update = $this->Mod->update2('payment_detail',array('id_payment_detail'=>$id),$data);  
       
        $res=[
            'code'      => '200',
            'msg'       => 'Data Berhasil di Hapus'
        ];
        echo json_encode($res);
        
    }


   

    

}