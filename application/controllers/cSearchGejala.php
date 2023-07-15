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
            $data['konten']=$this->load->view('search-gejala','',TRUE);
            $hasiltable['hasil1'] = $this->mSearchGejala->searchDataGejala($keyword, $KodeUser);
            $data['table']=$this->load->view('table-search-gejala',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
        function lihat($KodeGejala){
            $KodeUser=$this->session->userdata('KodeUser');
            $data['konten']=$this->load->view('search-gejala','',TRUE);
            $hasiltable['hasil2'] =$this->mSearchGejala->lihat($KodeGejala,$KodeUser);
            $data['table']=$this->load->view('table-search-gejala',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
        function ditail($KodeMakan){
            $KodeUser=$this->session->userdata('KodeUser');
            $data['konten']=$this->load->view('search-gejala','',TRUE);
            $hasiltable['hasil2'] =$this->mSearchGejala->ditail($KodeMakan,$KodeUser);
            $data['table']=$this->load->view('table-search-gejala',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }
        function lihatJum($NamaMakan,$Gejala){
            $KodeUser=$this->session->userdata('KodeUser');
            $data['konten']=$this->load->view('search-gejala','',TRUE);
            $hasiltable['hasil3'] =$this->mSearchGejala->lihatJum($NamaMakan,$Gejala,$KodeUser);
            $data['table']=$this->load->view('table-search-gejala',$hasiltable,TRUE);
            $this->load->view('halaman-user', $data);
        }

    }
?>