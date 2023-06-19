<div class="container">
    <h2>Hasil Pencarian</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Mood</th>
                <th>Gejala</th>
                <th>Nama Makanan</th>
                <th>Skala BAB</th>
                <th>Lama Tidur</th>
                <th>Kualitas Tidur</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hasil as $data) { ?>
                <tr>
                    <td><?php echo $data['Waktu']; ?></td>
                    <td><?php echo $data['Mood']; ?></td>
                    <td><?php echo $data['Gejala']; ?></td>
                    <td><?php echo $data['NamaMakan']; ?></td>
                    <td><?php echo $data['SkalaBAB']; ?></td>
                    <td><?php echo $data['LamaTidur']; ?></td>
                    <td><?php echo $data['KualitasTidur']; ?></td>
                    <td><?php echo $data['Catatan']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>