<?php
	class mTidur extends CI_Model
	{

	
		function simpandata($User)
		{
			$data=$_POST;
			$KodeUser=(int)$User;
			$data['KodeUser']=$KodeUser;
            
			$KodeTidur=$data['KodeTidur'];
			if ($KodeTidur=="")
			{
				//simpan
				$this->db->insert('tbtidur',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$Kode=array(
					'KodeTidur'=>$KodeTidur
				);
				$this->db->where($Kode);
				$this->db->update('tbtidur',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}
		
		function tampildata($KodeUser)
		{
			$this->db->where('KodeUser', $KodeUser);
			$this->db->order_by('KodeTidur', 'ASC');
			$query = $this->db->get('tbtidur');

			if ($query->num_rows() > 0) {
				$hasil = $query->result();
			} else {
				$hasil = array();
			}

			return $hasil;
		}

		function hapusdata($KodeTidur){
			$this->db->where('KodeTidur', $KodeTidur);
			$this->db->delete('tbtidur');
		}

		function editdata($KodeTidur)
		{
			$sql="select * from tbtidur where KodeTidur='".$KodeTidur."'";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeTidur').val('".$data->KodeTidur."');</script>";
				echo "<script>$('#Waktu').val('".$data->Waktu."');</script>";	
				echo "<script>$('#Tidur').val('".$data->Tidur."');</script>";
				echo "<script>$('#Keterangan').val('".$data->Keterangan."');</script>";
			}
		}	
	}
?>