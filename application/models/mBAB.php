<?php
	class mBAB extends CI_Model
	{

	
		function simpandata($User)
		{
			$data=$_POST;
			$KodeUser=(int)$User;
			$data['KodeUser']=$KodeUser;
            
			$KodeBAB=$data['KodeBAB'];
			if ($KodeBAB=="")
			{
				//simpan
				$this->db->insert('tbbab',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$Kode=array(
					'KodeBAB'=>$KodeBAB
				);
				$this->db->where($Kode);
				$this->db->update('tbbab',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}
		
		function tampildata($KodeUser)
		{
			$this->db->where('KodeUser', $KodeUser);
			$this->db->order_by('Waktu', 'DESC');
			$query = $this->db->get('tbbab');

			if ($query->num_rows() > 0) {
				$hasil = $query->result();
			} else {
				$hasil = array();
			}

			return $hasil;
		}

		function hapusdata($KodeBAB){
			$this->db->where('KodeBAB', $KodeBAB);
			$this->db->delete('tbbab');
		}

		function editdata($KodeBAB)
		{
			$this->db->where('KodeBAB',$KodeBAB);
			$query = $this->db->get('tbbab');
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeBAB').val('".$data->KodeBAB."');</script>";
				echo "<script>$('#Waktu').val('".$data->Waktu."');</script>";	
				echo "<script>$('#Warna').val('".$data->Warna."');</script>";
				echo "<script>$('#Jumlah').val('".$data->Jumlah."');</script>";
				echo "<script>$('#Skala').val('".$data->Skala."');</script>";
				echo "<script>$('#Keterangan').val('".$data->Keterangan."');</script>";
			}
		}	
	}
?>