<?php
   class cLogin extends CI_Controller
   {
      public function __construct()
      {
         parent::__construct();
			$this->load->model('mLogin');
      }

      function formLogin()
		{
			$data['landingContent']=$this->load->view('form-login','',TRUE);
			$this->load->view('landingpage',$data);	
		}

      function proseslogin()
		{
			$this->mLogin->proseslogin();	
		}
		
		function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/formlogin');
		}
   }

?>