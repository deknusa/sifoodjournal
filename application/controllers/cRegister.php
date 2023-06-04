<?php
   class cRegister extends CI_Controller
   {
      public function __construct()
      {
         parent::__construct();
         $this->load->model('mRegister');
      }

      function formRegister()
      {
         $data['landingContent']=$this->load->view('form-register','',TRUE);
         $this->load->view('landingpage', $data);
      }

      function procRegister()
      {
         $this->mRegister->insertData();
         redirect('cawal/tampilanawal');
      }
   }
?>

