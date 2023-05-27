<?php
	class mGejala extends CI_Model
	{

	
		function simpandata($KodeUser)
		{
			$data=$_POST;
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
		
		function tampildata()
		{
			$sql="select * from tbgejala order by KodeGejala";
			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				foreach($query->result() as $data)
				{
					$hasil[]=$data;	
				}	
			}
			else
			{
				$hasil="";	
			}
			return $hasil;	
		}

		function hapusdata($KodeDaftar){
			$sql="delete from tbdaftar where KodeDaftar='".$KodeDaftar."'";
			$this->db->query($sql);
		}

		function editdata($KodeDaftar)
		{
			$sql="select * from tbdaftar where KodeDaftar='".$KodeDaftar."'";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeDaftar').val('".$data->KodeDaftar."');</script>";
				echo "<script>$('#NamaLengkap').val('".$data->NamaLengkap."');</script>";	
				echo "<script>$('#Alamat').val('".$data->Alamat."');</script>";
				echo "<script>$('#Telp').val('".$data->Telp."');</script>";
				echo "<script>$('#Email').val('".$data->Email."');</script>";
			}
		}	
	}
?>