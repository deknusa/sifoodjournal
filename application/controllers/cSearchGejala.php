<?php
    class cSearchGejala extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('mSearchGejala');
        }

        public function searchBar(){
            $data['konten']=$this->load->view('search-gejala','',TRUE);
			$this->load->view('halaman-user',$data);
        }

        public function search()
        {
            $keyword = $this->input->get('keyword');
            $KodeUser=$this->session->userdata('KodeUser');

            $hasiltable['hasil'] = $this->mSearchGejala->searchDataGejala($keyword, $KodeUser);
            $data['table']=$this->load->view('table-search-gejala',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }

    }
?>