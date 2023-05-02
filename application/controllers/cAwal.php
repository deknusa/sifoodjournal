<?php
   class cAwal extends CI_Controller
   {
      function tampilanawal()
      {
         $data['landingContent']=$this->load->view('landing-content','',TRUE);
         $this->load->view('landingpage', $data);
      }
   }

?>