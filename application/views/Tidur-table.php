<script language= "javascript" >
  function hapusdata(KodeTidur){
    if(confirm("Apakah yakin menghapus data ini ?")){
      window.open("<?php echo base_url()?>ctidur/hapusdata/"+KodeTidur,"_self");
    }
  }
  function editdata(KodeTidur)
	{
		if(confirm("Apakah yakin mengedit data ini ?")){
     load("ctidur/editdata/"+KodeTidur,"#script");
    }
	}

</script>

<div class="container mt-3">
  <h4>Data Tidur</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>WaktuMulai</th>
        <th>WaktuSelesai</th>
        <th>KualitasTidur</th>
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
        <td><?php echo $data->WaktuMulai;  ?></td>
        <td><?php echo $data->WaktuSelesai;  ?></td>
        <td><?php echo $data->KualitasTidur;  ?></td>
        <td><?php echo $data->Keterangan;  ?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeTidur; ?>')">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeTidur ?>')">Hapus</button>
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