<?php
   class mRegister extends CI_Model
   {
      function insertData()
      {
         $data=$_POST;
         $data['Level']="Member";

         $this->db->insert('tbuser', $data);
      }
   }

?>