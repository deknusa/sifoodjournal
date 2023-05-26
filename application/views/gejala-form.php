<script language="javascript">
	function simpandata()
	{
		var NamaLengkap=$('#NamaLengkap').val();
		if (NamaLengkap=="")
		{
			alert ("Nama lengkap masih kosong");
			$('#NamaLengkap').focus();
			return false;	
		}	
		
		var Alamat=$('#Alamat').val();
		if (Alamat=="")
		{
			alert ("Alamat masih kosong");
			$('#Alamat').focus();
			return false;	
		}
		
		$('#formdaftar').submit();
			
	}
</script>

<div class="container mt-3">
  <h4>Pencatatan Gejala</h4>
  
  
 <?php
	$pesan=$this->session->flashdata('pesan');
	if ($pesan=="")
	{
		echo "";	
	}
	else
	{	
?>
	
    <div class="alert alert-success alert-dismissible">
  	<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 	  <?php echo $pesan; ?>
	</div>
      
<?php
	 }
?>
  
  
  <form name="formdaftar" id="formdaftar" method="post" action="<?php echo base_url('cpendaftaran/simpandata'); ?>">
  	 <input type="hidden" name="KodeDaftar" id="KodeDaftar"/>
 	 <div class="mb-3 mt-3">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" name="NamaLengkap" id="NamaLengkap" >
    </div>
    <div class="mb-3 mt-3">
      <label>Alamat</label>
      <input type="text" class="form-control" id="Alamat" name="Alamat">
    </div>
    <div class="mb-3 mt-3">
      <label>Telp</label>
      <input type="text" class="form-control"  name="Telp" id="Telp">
    </div>
    <div class="mb-3 mt-3">
      <label>Email</label>
      <input type="text" class="form-control" id="Email" name="Email">
    </div>
   
    <button type="button" class="btn btn-primary" onclick="simpandata()">Daftar</button>
  </form>
</div>
