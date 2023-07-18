<?php
	class mMakan extends CI_Model
	{

      //fungsi aksi menyimpan data ke dalam DB
		function simpandata($User)
		{
			//$data=$_POST;

			$data['NamaMakan']=$NamaMakan=$this->input->post('NamaMakan');
			$data['Waktu']=$Waktu=$this->input->post('Waktu');
			$data['Jumlah']=$Jumlah=$this->input->post('Jumlah');
			$data['Satuan']=$Satuan=$this->input->post('Satuan');
			$data['BahanMakanan']=$BahanMakanan=$this->input->post('BahanMakanan');
			$data['Kalori']=$Kalori=$this->input->post('Kalori');
			//$data['NamaDokumen']=$NamaDokumen=$this->input->post('NamaDokumen');
			$data['Keterangan']=$Keterangan=$this->input->post('Keterangan');

			//$data['NamaFile']=$NamaFile=$this->upload($_FILES['NamaFile'],'NamaFile',$NamaDokumen);
			$KodeUser=(int)$User;
			$data['KodeUser']=$KodeUser;
            
			$KodeMakan=$data['KodeMakan'];
			if ($KodeMakan=="")
			{
            //penulisan SQL menggunakan query builder
				//simpan
				$this->db->insert('tbmakan',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan');	
			}
			else
			{
				//edit	
				$Kode=array(
					'KodeMakan'=>$KodeMakan
				);
				$this->db->where($Kode);
				$this->db->update('tbmakan',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit');
			}
		}
		
		function tampildata($KodeUser)
		{
			$this->db->where('KodeUser', $KodeUser);
			$this->db->order_by('Waktu', 'DESC');
			$query = $this->db->get('tbmakan');

			if ($query->num_rows() > 0) {
				$hasil = $query->result();
			} else {
				$hasil = array();
			}

			return $hasil;
		}

		function hapusdata($KodeMakan){
			$this->db->where('KodeMakan', $KodeMakan);
			$this->db->delete('tbmakan');
		}

		function editdata($KodeMakan)
		{
			$this->db->where('KodeMakan', $KodeMakan);
			$query = $this->db->get('tbmakan');
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				echo "<script>$('#KodeMakan').val('".$data->KodeMakan."');</script>";
				echo "<script>$('#NamaMakan').val('".$data->NamaMakan."');</script>";
				echo "<script>$('#Waktu').val('".$data->Waktu."');</script>";	
				echo "<script>$('#Jumlah').val('".$data->Jumlah."');</script>";
				echo "<script>$('#Satuan').val('".$data->Satuan."');</script>";
				echo "<script>$('#Kalori').val('".$data->Kalori."');</script>";
				echo "<script>$('#BahanMakanan').val('".$data->BahanMakanan."');</script>";
				echo "<script>$('#Keterangan').val('".$data->Keterangan."');</script>";
			}
		}
		
		//fungsi upload pindah ke cMakan
		
	}
?>