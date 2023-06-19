<script language="javascript">
	function simpandata()
	{
		var Waktu=$('#Waktu').val();
		if (Waktu=="")
		{
			alert ("Waktu masih kosong");
			$('#Waktu').focus();
			return false;	
		}	
		
		var Catatan=$('#Catatan').val();
		if (Catatan=="")
		{
			alert ("Catatan masih kosong");
			$('#Catatan').focus();
			return false;	
		}
		
		$('#fromcatat').submit();
			
	}
</script>

<div class="container mt-3">
  <h4>Catatan Harian</h4>
  
  
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
 	  <?php echo $pesan; ?>g
	</div>
      
<?php
	 }
?> 
  
  
  <form name="fromcatat" id="fromcatat" method="post" action="<?php echo base_url('ccatatan/simpandata'); ?>">
  	 <input type="hidden" name="KodeCatatan" id="KodeCatatan"/>
 	 <div class="mb-3 mt-3">
      <label>Waktu</label>
      <input type="datetime-local" class="form-control" name="Waktu" id="Waktu" >
    </div>
    <div class="mb-3 mt-3">
      <label>Catatan</label>
      <input type="text" class="form-control" id="Catatan" name="Catatan">
    </div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
