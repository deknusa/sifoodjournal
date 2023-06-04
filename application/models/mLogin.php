<?php
	class mLogin extends CI_Model
	{

		function proseslogin()
		{
			$Email=$this->input->post('Email');
			$Password=$this->input->post('Password');
			
			$this->db->where('Email', $Email);
			$this->db->where('Password', $Password);
			$query = $this->db->get('tbuser');

			$data=$query->row();
			$Level=$data->Level;
			$Email=$data->Email;
			$KodeUser=$data->KodeUser;
			$NamaLengkap=$data->NamaLengkap;
			
			$session=array(
				'Email'=>$Email,
				'NamaLengkap'=>$NamaLengkap,
				'KodeUser'=>$KodeUser
			);	
			
			if ($query->num_rows()>0)
			{
				if ($Level == 'Admin'){
					$this->session->set_userdata($session);
					redirect('cutama/tampiladmin');
				}
				else 
				{
					$this->session->set_userdata($session);
					redirect('cutama/tampiluser');
					
				}
			}
			else
			{
				//tidak ada data	
				$this->session->set_flashdata('pesan','Login gagal');
				redirect('clogin/formlogin');
				
			}
		}
	}
?>