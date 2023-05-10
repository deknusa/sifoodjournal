<?php
   class mRegister extends CI_Model
   {
      function insertData()
      {
         $data=$_POST;
         $data['Level']="Member";

         $this->db->insert('tbdaftar', $data);

         $Username=$this->input->post('Email');
         $Password=$this->input->post('Password');
         $datal['Username']=$Username;
         $datal['Password']="$Password";
         $datal['Level']="Member";
         
         $this->db->insert('tblogin', $datal);
      }
   }

?>