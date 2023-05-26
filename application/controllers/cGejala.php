<?php
	class cGejala extends CI_Controller
	{
		

		function formGejala()
		{
			$data['konten']=$this->load->view('gejala-form','',TRUE);
			//$hasiltable['hasil']=$this->mGejala->tampildata();
			//$data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
			$this->load->view('halaman-user',$data);	
		}

	}
?>