<script language= "javascript" >
//   function hapusdata(KodeGejala){
//     if(confirm("Apakah yakin menghapus data ini ?")){
//       window.open("<?php echo base_url()?>Cpendaftaran/hapusdata/"+KodeGejala,"_self");
//     }
//   }
//   function editdata(KodeGejala)
// 	{
// 		//alert(KodeGejala);
// 		load("cpendaftaran/editdata/"+KodeGejala,"#script");	
// 	}

</script>

<div class="container mt-3">
  <h4>Data Gejala</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Gejala</th>
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
        <td><?php echo $data->Gejala;  ?></td>
        <td><?php echo $data->Keterangan;  ?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeGejala; ?>')">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeGejala ?>')">Hapus</button>
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