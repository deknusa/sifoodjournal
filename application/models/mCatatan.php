<?php
	class mCatatan extends CI_Model
	{

	
		function simpandata($User)
		{
			$data=$_POST;
			$KodeUser=(int)$User;
			$data['KodeUser']=$KodeUser;
            
			$KodeCatatan=$data['KodeCatatan'];
			if ($KodeCatatan=="")
			{
				//simpan
				$this->db->insert('tbcatatan',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$Kode=array(
					'KodeCatatan'=>$KodeCatatan
				);
				$this->db->where($Kode);
				$this->db->update('tbcatatan',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}
		
		function tampildata($KodeUser)
		{
			$this->db->where('KodeUser', $KodeUser);
			$this->db->order_by('Waktu', 'DESC');
			$query = $this->db->get('tbcatatan');

			if ($query->num_rows() > 0) {
				$hasil = $query->result();
			} else {
				$hasil = array();
			}

			return $hasil;
		}

		function hapusdata($KodeCatatan){
			$this->db->where('KodeCatatan', $KodeCatatan);
			$this->db->delete('tbcatatan');
		}

		function editdata($KodeCatatan)
		{
			$this->db->where('KodeCatatan',$KodeCatatan);
			$query = $this->db->get('tbcatatan');
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeCatatan').val('".$data->KodeCatatan."');</script>";
				echo "<script>$('#Waktu').val('".$data->Waktu."');</script>";	
				echo "<script>$('#Catatan').val('".$data->Catatan."');</script>";
			}
		}	
	}
?>