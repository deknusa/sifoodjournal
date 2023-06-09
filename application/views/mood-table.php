<script language= "javascript" >
  function hapusdata(KodeMood){
    if(confirm("Apakah yakin menghapus data ini ?")){
      window.open("<?php echo base_url()?>cmood/hapusdata/"+KodeMood,"_self");
    }
  }
  function editdata(KodeMood)
	{
		//alert(KodeMood);
    load("cmood/editdata/"+KodeMood,"#script");
	}

</script>

<div class="container mt-3">
  <h4>Data Mood</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Mood</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
		if(empty($hasil))
		{
			echo "Data Kosong";	
		}
		else
		{
			$no=1;
			foreach($hasil as $data):
	?>
    
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data->Waktu;  ?></td>
        <td><?php echo $data->Mood;  ?></td>
        <td><?php echo $data->Keterangan;  ?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeMood; ?>')">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeMood ?>')">Hapus</button>
        </td>
      </tr>
      
    <?php
		  $no++;
		  endforeach;
		}
	?>  
      
      
      
    </tbody>
  </table>
</div>