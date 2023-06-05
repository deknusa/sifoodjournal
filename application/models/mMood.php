<?php
	class mMood extends CI_Model
	{

	
		function simpandata($User)
		{
			$data=$_POST;
			$KodeUser=(int)$User;
			$data['KodeUser']=$KodeUser;
            
			$KodeMood=$data['KodeMood'];
			if ($KodeMood=="")
			{
				//simpan
				$this->db->insert('tbmood',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$Kode=array(
					'KodeMood'=>$KodeMood
				);
				$this->db->where($Kode);
				$this->db->update('tbmood',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}
		
		function tampildata($KodeUser)
		{
			$this->db->where('KodeUser', $KodeUser);
			$this->db->order_by('KodeMood', 'ASC');
			$query = $this->db->get('tbmood');

			if ($query->num_rows() > 0) {
				$hasil = $query->result();
			} else {
				$hasil = array();
			}

			return $hasil;
		}

		function hapusdata($KodeMood){
			$this->db->where('KodeMood', $KodeMood);
			$this->db->delete('tbmood');
		}

		function editdata($KodeMood)
		{
			$this->db->where('KodeMood',$KodeMood);
			$query = $this->db->get('tbmood');
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeMood').val('".$data->KodeMood."');</script>";
				echo "<script>$('#Waktu').val('".$data->Waktu."');</script>";	
				echo "<script>$('#Mood').val('".$data->Mood."');</script>";
				echo "<script>$('#Keterangan').val('".$data->Keterangan."');</script>";
			}
		}	
	}
?>