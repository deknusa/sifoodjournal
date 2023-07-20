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
	 <label>Skala</label>
	 <br><em>*rentang skala menggunakan acuan dari bristol chart</em>
	 <br>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="1">
  		<label class="form-check-label" for="1">1</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="2">
  		<label class="form-check-label" for="2">2</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="3">
  		<label class="form-check-label" for="3">3</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="4">
  		<label class="form-check-label" for="4">4</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="4">
  		<label class="form-check-label" for="4">4</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="5">
  		<label class="form-check-label" for="5">5</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="6">
  		<label class="form-check-label" for="6">6</label>
	 </div>
	 <div class="form-check form-check-inline">
  		<input class="form-check-input" type="radio" id="Skala" name="Skala" value="7">
  		<label class="form-check-label" for="7">7</label>
	 </div>
    <div class="mb-3 mt-3">
	  <label>Keterangan</label>
	  <textarea class="form-control"  name="Keterangan" id="Keterangan" cols="10" rows="5"></textarea> 
	</div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
