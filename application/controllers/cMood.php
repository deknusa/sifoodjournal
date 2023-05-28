<?php
	class cMood extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mMood');
		}

		function formMood()
		{
			$data['konten']=$this->load->view('mood-form','',TRUE);
			$hasiltable['hasil']=$this->mMood->tampildata();
			$data['table']=$this->load->view('mood-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		function simpandata()
		{
			$User=$this->session->userdata('KodeUser');
			$this->mMood->simpandata($User);
			redirect('cMood/formMood');	
		}

		function hapusdata($KodeMood){
			$this->mMood->hapusdata($KodeMood);
			redirect('cMood/formMood');
		}

		function editdata($KodeMood)
		{
			$this->mMood->editdata($KodeMood);	
		}

	}
?>