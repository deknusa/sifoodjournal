<?php
    class cSearchMood extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('mSearchMood');
        }

        public function searchBar(){
            $data['konten']=$this->load->view('search-mood','',TRUE);
			$this->load->view('halaman-user',$data);
        }

        public function search()
        {
            $keyword = $this->input->get('keyword');
            $KodeUser=$this->session->userdata('KodeUser');

            $hasiltable['hasil'] = $this->mSearchMood->searchDataMood($keyword, $KodeUser);
            $data['table']=$this->load->view('table-search-mood',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }

    }
?>