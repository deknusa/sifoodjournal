<script language= "javascript" >
  function hapusdata(KodeBAB){
    if(confirm("Apakah yakin menghapus data ini ?")){
      window.open("<?php echo base_url()?>cbab/hapusdata/"+KodeBAB,"_self");
    }
  }
  function editdata(KodeBAB){
		if(confirm("Apakah yakin mengedit data ini ?")){
     load("cbab/editdata/"+KodeBAB,"#script");
    }
	}

</script>

<div class="container mt-3">
  <h4>Data BAB</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Warna</th>
        <th>Jumlah</th>
        <th>Skala</th>
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
        <td><?php echo $data->Warna;  ?></td>
        <td><?php echo $data->Jumlah;  ?></td>
        <td><?php echo $data->Skala;  ?></td>
        <td><?php echo $data->Keterangan;  ?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeBAB; ?>')">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeBAB ?>')">Hapus</button>
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