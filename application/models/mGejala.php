<?php
	class mGejala extends CI_Model
	{

	
		function simpandata($User)
		{
			$data=$_POST;
			$KodeUser=(int)$User;
			$data['KodeUser']=$KodeUser;
            
			$KodeGejala=$data['KodeGejala'];
			if ($KodeGejala=="")
			{
				//simpan
				$this->db->insert('tbgejala',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$Kode=array(
					'KodeGejala'=>$KodeGejala
				);
				$this->db->where($Kode);
				$this->db->update('tbgejala',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}
		
		function tampildata($KodeUser)
		{
			$this->db->where('KodeUser', $KodeUser);
			$this->db->order_by('Waktu', 'DESC');
			$query = $this->db->get('tbgejala');

			if ($query->num_rows() > 0) {
				$hasil = $query->result();
			} else {
				$hasil = array();
			}

			return $hasil;
		}

		function hapusdata($KodeGejala){
			$this->db->where('KodeGejala', $KodeGejala);
			$this->db->delete('tbgejala');
		}

		function editdata($KodeGejala)
		{
			$sql="select * from tbgejala where KodeGejala='".$KodeGejala."'";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeGejala').val('".$data->KodeGejala."');</script>";
				echo "<script>$('#Waktu').val('".$data->Waktu."');</script>";	
				echo "<script>$('#Gejala').val('".$data->Gejala."');</script>";
				echo "<script>$('#Keterangan').val('".$data->Keterangan."');</script>";
			}
		}	
	}
?>