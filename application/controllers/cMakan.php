<?php
	class cMakan extends CI_Controller
	{
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('mMakan');
		}

		//fungsi untuk menampilkan halaman form, tabel, dan data yang dimuat
		function formMakan()
		{
			$data['konten']=$this->load->view('makan-form','',TRUE);
			$KodeUser=$this->session->userdata('KodeUser');
			$hasiltable['hasil']=$this->mMakan->tampildata($KodeUser);
			$data['table']=$this->load->view('makan-table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

		//fungsi melakukan aksi simpan yang di-input pengguna pada form
		function simpandata()
		{
			$User=$this->session->userdata('KodeUser');
			$NamaDokumen=$this->input->post('NamaDokumen');
			$NamaFile=$this->mMakan->upload($_FILES['NamaFile'],'NamaFile',$NamaDokumen);
			
			$data=array(
				'KodeMakan'=>$this->input->post('KodeMakan'),
				'NamaMakan' => $this->input->post('NamaMakan'),
				'Waktu' => $this->input->post('Waktu'),
				'Jumlah' => $this->input->post('Jumlah'),
				'Satuan' => $this->input->post('Satuan'),
				'BahanMakanan' => $this->input->post('BahanMakanan'),
				'Kalori' => $this->input->post('Kalori'),
				'NamaDokumen'=>$NamaDokumen,
				'NamaFile'=>$NamaFile,
				'Keterangan'=> $this->input->post('Keterangan'),
				'KodeUser'=> (int) $User
			);	
			$this->mMakan->simpandata($data);
			redirect('cMakan/formmakan');	
		}

		//fungsi melakukan aksi hapus data pada tabel
		function hapusdata($KodeMakan){
			$this->mMakan->hapusdata($KodeMakan);
			redirect('cmakan/formmakan');
		}

		//fungsi melakukan aksi edit data pada tabel
		function editdata($KodeMakan)
		{
			$this->mMakan->editdata($KodeMakan);	
		}

		

	}
?>