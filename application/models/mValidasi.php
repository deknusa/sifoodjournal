<?php
	class mValidasi extends CI_Model
	{
        function validasi()
        { 
            if($this->session->userdata('Email')==''){
                echo "<script>alert('Anda tidak dapat mengakses halaman ini, Silahkan login terlebih dahulu')</script>";
                redirect('clogin/formlogin','refresh');
             }
        }

	}
?>