<script language="javascript">
	function simpandata()
	{
		var WaktuMulai=$('#WaktuMulai').val();
		if (WaktuMulai=="")
		{
			alert ("WaktuMulai masih kosong");
			$('#WaktuMulai').focus();
			return false;	
		}	
		var WaktuSelesai=$('#WaktuSelesai').val();
		if (WaktuSelesai=="")
		{
			alert ("WaktuSelesai masih kosong");
			$('#WaktuSelesai').focus();
			return false;	
		}	
		
		var KualitasTidur=$('#KualitasTidur').val();
		if (KualitasTidur=="")
		{
			alert ("KualitasTidur masih kosong");
			$('#KualitasTidur').focus();
			return false;	
		}
		
		$('#fromcatat').submit();
			
	}
</script>

<div class="container mt-3">
  <h4>Pencatatan KualitasTidur</h4>
  
  
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
  
  
  <form name="fromcatat" id="fromcatat" method="post" action="<?php echo base_url('ctidur/simpandata'); ?>">
  	 <input type="hidden" name="KodeTidur" id="KodeTidur"/>
 	 <div class="mb-3 mt-3">
      <label>Waktu Mulai</label>
      <input type="datetime-local" class="form-control" name="WaktuMulai" id="WaktuMulai" >
    </div>
	<div class="mb-3 mt-3">
      <label>Waktu Selesai</label>
      <input type="datetime-local" class="form-control" name="WaktuSelesai" id="WaktuSelesai" >
    </div>
    <div class="mb-3 mt-3">
      <label>KualitasTidur</label>
      <input type="text" class="form-control" id="KualitasTidur" name="KualitasTidur">
    </div>
	 <div class="mb-3 mt-3">
	  <label>Keterangan</label>
	  <textarea class="form-control"  name="Keterangan" id="Keterangan" cols="10" rows="5"></textarea> 
	</div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
