<?php
    class cSearch_User extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('mSearch_User');
        }
    
        public function search()
        {
            $keyword = $this->input->get('keyword');
    
            // Panggil model untuk mencari data berdasarkan keyword
            $KodeUser=$this->session->userdata('KodeUser');
            $hasiltable['hasil'] = $this->mSearch_User->searchData($keyword, $KodeUser);
    
            // Tampilkan hasil pencarian
            $data['table']=$this->load->view('tabel-table-user',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
    }
?>