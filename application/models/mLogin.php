<?php
	class mLogin extends CI_Model
	{

		function proseslogin()
		{
			$Email=$this->input->post('Email');
			$Password=$this->input->post('Password');
			
			$sql="select * from tbdaftar where Email='".$Email."' ";
			$sql.="and Password='".$Password."'";
			$query=$this->db->query($sql);

			$data=$query->row();
			$Level = $data->Level;
			$Email=$data->Email;
			$NamaLengkap=$data->NamaLengkap;
			$session=array(
				'Email'=>$Email,
				'NamaLengkap'=>$NamaLengkap
			);	
			
			if ($query->num_rows()>0)
			{
				if ($Level == 'Admin'){
					
					$this->session->set_userdata($session);
					redirect('cutama/tampiladmin');
				}
				else{
					
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