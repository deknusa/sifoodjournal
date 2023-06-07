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
		
		var Skala=$('#Skala').val();
		if (Skala=="")
		{
			alert ("Skala masih kosong");
			$('#Skala').focus();
			return false;	
		}
		
		$('#fromcatat').submit();
			
	}
</script>

<div class="container mt-3">
  <h4>Pencatatan BAB</h4>
  
  
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
  
  
  <form name="fromcatat" id="fromcatat" method="post" action="<?php echo base_url('cbab/simpandata'); ?>">
  	 <input type="hidden" name="KodeBAB" id="KodeBAB"/>
 	 <div class="mb-3 mt-3">
      <label>Waktu</label>
      <input type="datetime-local" class="form-control" name="Waktu" id="Waktu" >
    </div>
    <div class="mb-3 mt-3">
      <label>Warna</label>
      <input type="text" class="form-control" id="Warna" name="Warna">
    </div>
    <div class="mb-3 mt-3">
      <label>Jumlah</label>
      <input type="text" class="form-control" id="Jumlah" name="Jumlah">
    </div>
    <div class="mb-3 mt-3">
      <label>Skala</label>
      <input type="text" class="form-control" id="Skala" name="Skala">
    </div>
    <div class="mb-3 mt-3">
      <label>Keterangan</label>
      <input type="textarea" class="form-control" id="Keterangan" name="Keterangan">
    </div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
