<?php
	class cCatatan extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mCatatan');
		}

		function formCatatan()
		{
			$data['konten']=$this->load->view('Catatan-form','',TRUE);
			$KodeUser=$this->session->userdata('KodeUser');
			$hasiltable['hasil']=$this->mCatatan->tampildata($KodeUser);
			$data['table']=$this->load->view('Catatan-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		function simpandata()
		{
			$User=$this->session->userdata('KodeUser');
			$this->mCatatan->simpandata($User);
			redirect('cCatatan/formCatatan');	
		}

		function hapusdata($KodeCatatan){
			$this->mCatatan->hapusdata($KodeCatatan);
			redirect('cCatatan/formCatatan');
		}

		function editdata($KodeCatatan)
		{
			$this->mCatatan->editdata($KodeCatatan);	
			redirect('cCatatan/formCatatan');
		}

	}
?>