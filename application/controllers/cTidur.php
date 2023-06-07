<?php
	class cTidur extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mTidur');
		}

		function formTidur()
		{
			$data['konten']=$this->load->view('tidur-form','',TRUE);
			$KodeUser=$this->session->userdata('KodeUser');
			$hasiltable['hasil']=$this->mTidur->tampildata($KodeUser);
			$data['table']=$this->load->view('tidur-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		function simpandata()
		{
			$User=$this->session->userdata('KodeUser');
			$this->mTidur->simpandata($User);
			redirect('cTidur/formTidur');	
		}

		function hapusdata($KodeTidur){
			$this->mTidur->hapusdata($KodeTidur);
			redirect('ctidur/formTidur');
		}

		function editdata($KodeTidur)
		{
			$this->mTidur->editdata($KodeTidur);	
			redirect('cTidur/formTidur');
		}

	}
?>