
<div class="container">
     <h1>Search Results</h1>
    <?php if (empty($hasil)) { ?>
        <p>No results found.</p>
    <?php } else { ?>
        <table class="table">
            <tr>
                <th>Gejala Date/Time</th>
                <th>Eating Date/Time</th>
                <th>Food Name</th>
                <th>Food Jumlah</th>
                <th>Info Ditail</th>
            </tr>
            <?php foreach ($hasil as $data) { ?>
                <tr>
                <td><?php echo $data['GejalaWaktu']; ?></td>
                <td><?php echo $data['MakanWaktu']; ?></td>
                <td><?php echo $data['NamaMakan']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td><button type="button" class="btn btn-primary btn-sm">Detail</button></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</div>