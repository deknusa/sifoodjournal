<?php
	class cBAB extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mBAB');
		}

		function formBAB()
		{
			$data['konten']=$this->load->view('form-bab','',TRUE);
			$KodeUser=$this->session->userdata('KodeUser');
			$hasiltable['hasil']=$this->mBAB->tampildata($KodeUser);
			$data['table']=$this->load->view('bab-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		function simpandata()
		{
			$User=$this->session->userdata('KodeUser');
			$this->mBAB->simpandata($User);
			redirect('cbab/formbab');	
		}

		function hapusdata($KodeBAB){
			$this->mBAB->hapusdata($KodeBAB);
			redirect('cbab/formbab');
		}

		function editdata($KodeBAB)
		{
			$this->mBAB->editdata($KodeBAB);	
		}

	}
?>