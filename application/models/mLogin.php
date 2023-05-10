<?php
	class mLogin extends CI_Model
	{

		function proseslogin()
		{
			$Username=$this->input->post('Email');
			$Password=$this->input->post('Password');
			
			$sql="SELECT * FROM tblogin WHERE Username='".$Username."' ";
			$sql.="AND Password='".$Password."'";
			$query=$this->db->query($sql);

			$data=$query->row();
			$Level=$data->Level;
			$Username=$data->Username;
			
			$session=array(
				'Username'=>$Username
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