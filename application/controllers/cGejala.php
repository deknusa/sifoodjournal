<?php
	class cGejala extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mGejala');
		}

		function formGejala()
		{
			$data['konten']=$this->load->view('gejala-form','',TRUE);
			$hasiltable['hasil']=$this->mGejala->tampildata();
			$data['table']=$this->load->view('gejala-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		function simpandata()
		{
			$KodeUser=$this->session->userdata('KodeUser');
			$this->mGejala->simpandata($KodeUser);
			redirect('cgejala/formgejala');	
		}

	}
?>