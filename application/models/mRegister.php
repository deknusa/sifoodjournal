<?php
   class mRegister extends CI_Model
   {
      function insertData()
      {
         $data=$_POST;
         $Email= $data['Email'];
         $this->db->where('Email', $Email);
			$query = $this->db->get('tbuser');

         if($query->num_rows()>0){
            $this->session->set_flashdata('pesan','Email sudah terdaftar');
				redirect('cregister/formregister');
         }
         else{
            $data=$_POST;
            $data['Level']="User";
            $this->db->insert('tbuser', $data);
         }
        
      }
   }

?>