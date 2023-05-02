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
			$data['konten']=$this->load->view('login','',TRUE);
			$this->load->view('halamanawal',$data);	
		}
   }

?>