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
            $data['konten']=$this->load->view('search-mood','',TRUE);
            $hasiltable['hasil1'] = $this->mSearchMood->searchDataMood($keyword, $KodeUser);
            $data['table']=$this->load->view('table-search-mood',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
        function lihat($KodeMood){
            $KodeUser=$this->session->userdata('KodeUser');
            $data['konten']=$this->load->view('search-mood','',TRUE);
            $hasiltable['hasil2'] =$this->mSearchMood->lihat($KodeMood,$KodeUser);
            $data['table']=$this->load->view('table-search-mood',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
        function ditail($KodeMakan){
            $KodeUser=$this->session->userdata('KodeUser');
            $data['konten']=$this->load->view('search-mood','',TRUE);
            $hasiltable['hasil2'] =$this->mSearchMood->ditail($KodeMakan,$KodeUser);
            $data['table']=$this->load->view('table-search-mood',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
        function lihatJum($NamaMakan,$Mood){
            $KodeUser=$this->session->userdata('KodeUser');
            $data['konten']=$this->load->view('search-mood','',TRUE);
            $hasiltable['hasil3'] =$this->mSearchMood->lihatJum($NamaMakan,$Mood,$KodeUser);
            $data['table']=$this->load->view('table-search-mood',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
    }
?>