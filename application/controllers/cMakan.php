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
			$this->mMakan->simpandata($User);
			redirect('cmakan/formmakan');	
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
			redirect('cmakan/formmakan');
		}

	}
?>