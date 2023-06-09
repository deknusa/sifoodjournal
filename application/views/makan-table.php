<script language= "javascript" >
  function hapusdata(KodeMakan){
    if(confirm("Apakah yakin menghapus data ini ?")){
      window.open("<?php echo base_url()?>cmakan/hapusdata/"+KodeMakan,"_self");
    }
  }
  function editdata(KodeMakan)
	{
    load("cmakan/editdata/"+KodeMakan,"#script");
	}

</script>

<div class="container mt-3">
  <h4>Data Makan</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Makan</th>
        <th>Waktu</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Kalori</th>
        <th>Bahan Makanan</th>
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
           <td><?php echo $no;?></td>
           <td><?php echo $data->NamaMakan;?></td>
           <td><?php echo $data->Waktu;?></td>
           <td><?php echo $data->Jumlah;?></td>
           <td><?php echo $data->Satuan;?></td>
           <td><?php echo $data->Kalori;?></td>
           <td><?php echo $data->BahanMakanan;?></td>
           <td><?php echo $data->Keterangan;?></td>
           <td>
           <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->KodeMakan;?>')">Edit</button>
           <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->KodeMakan;?>')">Hapus</button>
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