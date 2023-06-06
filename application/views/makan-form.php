<script language="javascript">
	function simpandata()
	{
		var NamaMakanan=$('#NamaMakanan').val();
		if (NamaMakanan=="")
		{
			alert ("Nama Makanan masih kosong");
			$('#NamaMakanan').focus();
			return false;	
		}	
		
		var Waktu=$('#Waktu').val();
		if (Waktu=="")
		{
			alert ("Waktu masih kosong");
			$('#Waktu').focus();
			return false;	
		}
		
		var Jumlah=$('#Jumlah').val();
		if (Jumlah=="")
		{
			alert ("Jumlah masih kosong");
			$('#Jumlah').focus();
			return false;	
		}

		var Satuan=$('#Satuan').val();
		if (Satuan=="")
		{
			alert ("Satuan masih kosong");
			$('#Satuan').focus();
			return false;	
		}

		var Kalori=$('#Kalori').val();
		if (Kalori=="")
		{
			alert ("Kalori masih kosong");
			$('#Kalori').focus();
			return false;	
		}

		var BahanMakanan=$('#BahanMakanan').val();
		if (BahanMakanan=="")
		{
			alert ("BahanMakanan masih kosong");
			$('#BahanMakanan').focus();
			return false;	
		}

		var Keterangan=$('#Keterangan').val();
		if (Keterangan=="")
		{
			alert ("Keterangan masih kosong");
			$('#Waktu').focus();
			return false;	
		}

		$('#fromcatat').submit();
			
	}
</script>

<div class="container mt-3">
  <h4>Pencatatan Makan</h4>
  
  
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
  
  
  <form name="fromcatat" id="fromcatat" method="post" action="<?php echo base_url('cmakan/simpandata'); ?>">
  	 <input type="hidden" name="KodeMakan" id="KodeMakan"/>
 	 <div class="mb-3 mt-3">
      <label>Nama Makanan</label>
      <input type="text" class="form-control" name="NamaMakan" id="NamaMakan" >
    </div>
    <div class="mb-3 mt-3">
      <label>Waktu</label>
      <input type="datetime-local" class="form-control" name="Waktu" id="Waktu" >
    </div>
    <div class="mb-3 mt-3">
      <label>Jumlah</label>
      <input type="text" class="form-control" id="Jumlah" name="Jumlah">
    </div>
	 <label>Satuan</label>
         <select class="form-select" id="Satuan" name="Satuan">
         <option value="">Pilih</option>
         <option value="gram">gram</option>
         <option value="sdt">sdt</option>
         <option value="sdm">sdm</option>
         <option value="Gelas">Gelas</option>
         <option value="Mangkok">Mangkok</option>
         <option value="Piring">Piring</option>
         </select>
	 <div class="mb-3 mt-3">
      <label>Kalori</label>
      <input type="text" class="form-control" id="Kalori" name="Kalori">
    </div>
	 <div class="mb-3 mt-3">
      <label>Bahan Makanan</label>
      <input type="text" class="form-control" id="BahanMakanan" name="BahanMakanan">
    </div>
    <div class="mb-3 mt-3">
      <label>Keterangan</label>
      <input type="text" class="form-control"  name="Keterangan" id="Keterangan">
    </div>
    <button type="button" class="btn btn-primary" onclick="simpandata()">Simpan</button>
  </form>
</div>
