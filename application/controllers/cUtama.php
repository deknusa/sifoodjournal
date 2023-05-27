<?php
	class cUtama extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
		}

		function tampiladmin()
		{
			$this->load->view('halaman-admin');	
		}
			
		function tampiluser()
		{
			$this->load->view('halaman-user');	
		}	
	}
?>