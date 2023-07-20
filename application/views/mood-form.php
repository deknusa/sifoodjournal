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
		
		var Mood=$('#Mood').val();
		if (Mood=="")
		{
			alert ("Mood masih kosong");
			$('#Mood').focus();
			return false;	
		}
		
		$('#fromcatat').submit();
			
	}
</script>

<div class="container mt-3">
  <h4>Pencatatan Mood</h4>
  
  
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
  
  
  <form name="fromcatat" id="fromcatat" method="post" action="<?php echo base_url('cmood/simpandata'); ?>">
  	 <input type="hidden" name="KodeMood" id="KodeMood"/>
 	 <div class="mb-3 mt-3">
      <label>Waktu</label>
      <input type="datetime-local" class="form-control" name="Waktu" id="Waktu" >
    </div>
    <label>Mood</label>
	 <div class="form-check">
  		<input class="form-check-input" type="radio" id="Mood" name="Mood" value="Gembira">
  		<label class="form-check-label" for="Gembira">Gembira</label>
	 </div>
	 <div class="form-check">
  		<input class="form-check-input" type="radio" id="Mood" name="Mood" value="Sedih">
  		<label class="form-check-label" for="Sedih">Sedih</label>
	 </div>
	 <div class="form-check">
  		<input class="form-check-input" type="radio" id="Mood" name="Mood" value="Biasa">
  		<label class="form-check-label" for="Biasa">Biasa</label>
	 </div>
	 <div class="form-check">
  		<input class="form-check-input" type="radio" id="Mood" name="Mood" value="Swing">
  		<label class="form-check-label" for="Swing">Swing</label>
	 </div>
	 <div class="form-check">
  		<input class="form-check-input" type="radio" id="Mood" name="Mood" value="Rewel">
  		<label class="form-check-label" for="Rewel">Rewel</label>
	 </div>
	<div class="mb-3 mt-3">
	  <label>Keterangan</label>
	  <textarea class="form-control"  name="Keterangan" id="Keterangan" cols="10" rows="5"></textarea> 
	</div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
