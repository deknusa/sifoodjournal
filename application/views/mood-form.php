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
            <select class="form-select" id="Mood" name="Mood">
            <option value="">Pilih</option>
            <option value="Gembira">Gembira</option>
            <option value="Sedih">Sedih</option>
            <option value="Biasa">Biasa</option>
            <option value="Swing">Swing</option>
            <option value="Rewel">Rewel</option>
            </select>
    <div class="mb-3 mt-3">
      <label>Keterangan</label>
      <input type="text" class="form-control"  name="Keterangan" id="Keterangan">
    </div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
