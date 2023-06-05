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
		
		var Gejala=$('#Gejala').val();
		if (Gejala=="")
		{
			alert ("Gejala masih kosong");
			$('#Gejala').focus();
			return false;	
		}
		
		$('#fromcatat').submit();
			
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
  
  
  <form name="fromcatat" id="fromcatat" method="post" action="<?php echo base_url('cgejala/simpandata'); ?>">
  	 <input type="hidden" name="KodeGejala" id="KodeGejala"/>
 	 <div class="mb-3 mt-3">
      <label>Waktu</label>
      <input type="datetime-local" class="form-control" name="Waktu" id="Waktu" >
    </div>
    <div class="mb-3 mt-3">
      <label>Gejala</label>
      <input type="text" class="form-control" id="Gejala" name="Gejala">
    </div>
    <div class="mb-3 mt-3">
      <label>Keterangan</label>
      <input type="text" class="form-control"  name="Keterangan" id="Keterangan">
    </div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
