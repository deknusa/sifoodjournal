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
			$data['NamaDokumen']=$NamaDokumen=$this->input->post('NamaDokumen');
			$data['NamaFile']=$NamaFile=$this->upload($_FILES['NamaFile'],'NamaFile',$NamaDokumen);

			$data=array(
				'NamaDokumen'=>$NamaDokumen,
				'NamaFile'=>$NamaFile
			);	
			
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
		}

		//fungsi upload file
		function upload($uploadFile,$field,$nama)
		{
			$NamaFile=str_replace(' ', '', $nama);
			$extractFile = pathinfo($uploadFile['name']);	
			$ekst = $extractFile['extension'];
			$newName = $NamaFile.".".$ekst; 
			$config['upload_path']				= FCPATH.'berkas/';
			$config['allowed_types']			= 'jpg|png|jpeg';
			$config['max_size']         		= 5000;
			$config['overwrite'] 				= true;
			$config['file_name'] 				= $newName;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload($field)){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				
				return "";
			}else{
				return $newName;
			}
		 }

	}
?>