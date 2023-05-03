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
			$data['landingKonten']=$this->load->view('login-form','',TRUE);
			$this->load->view('landingpage',$data);	
		}
      function proseslogin()
		{
			$this->mlogin->proseslogin();	
		}
		function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/formlogin');
		}
   }

?>