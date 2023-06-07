<script language= "javascript" >
  function hapusdata(KodeCatatan){
    if(confirm("Apakah yakin menghapus data ini ?")){
      window.open("<?php echo base_url()?>cmood/hapusdata/"+KodeCatatan,"_self");
    }
  }
  function editdata(KodeCatatan)
	{
		if(confirm("Apakah yakin mengedit data ini ?")){
     load("ccatatan/editdata/"+KodeCatatan,"#script");
    }
    
	}

</script>

<div class="container mt-3">
  <h4>Data Catatan Harian</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Catatan</th>
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
        <td><?php echo $data->Catatan;  ?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeCatatan; ?>')">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeCatatan ?>')">Hapus</button>
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