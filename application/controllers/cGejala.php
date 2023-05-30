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
			$KodeUser=$this->session->userdata('KodeUser');
			$hasiltable['hasil']=$this->mGejala->tampildata($KodeUser);
			$data['table']=$this->load->view('gejala-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		function simpandata()
		{
			$User=$this->session->userdata('KodeUser');
			$this->mGejala->simpandata($User);
			redirect('cgejala/formgejala');	
		}

		function hapusdata($KodeGejala){
			$this->mGejala->hapusdata($KodeGejala);
			redirect('cgejala/formgejala');
		}

		function editdata($KodeGejala)
		{
			$this->mGejala->editdata($KodeGejala);	
			redirect('cgejala/formgejala');
		}

	}
?>