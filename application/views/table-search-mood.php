<script language= "javascript" >
    function lihat(KodeMood){
      window.open("<?php echo base_url()?>cSearchMood/lihat/"+KodeMood,"_self");
    }
    function lihatJum(NamaMakan,Mood){
      window.open("<?php echo base_url()?>cSearchMood/lihatJum/"+NamaMakan+"/"+Mood,"_self");
    }
    function ditail(KodeMakan){
      window.open("<?php echo base_url()?>cSearchMood/ditail/"+KodeMakan,"_self");
    }
</script>
<div class="container">
    <?php if (!empty($hasil1['mood'])) { ?>
        <h4>Riwayat Mood</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Mood</th>
                    <th>Waktu</th>
                    <th>Lihat riwayat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil1['mood'] as $data) { ?>
                    <tr>
                        <td><?php echo $data['Mood']; ?></td>
                        <td><?php echo $data['Waktu']; ?></td>
                        <td><button type="button" class="btn btn-primary btn-sm" onclick="lihat('<?php echo $data['KodeMood']?>')">Lihat</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h4>Makanan terbanyak</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama makanan</th>
                    <th>Jumlah</th>
                    <th>Lihat selengkapnya</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil1['hitung'] as $data) {?>
                    <?php foreach ($hasil1['mood'] as $a) { ?>
                        <?php  $a['Mood']; ?></td>
                    <?php } ?>
                    <tr>
                        <td><?php echo $data['NamaMakan']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
                        <td><button type="button" class="btn btn-primary btn-sm" onclick="lihatJum('<?php echo $data['NamaMakan']?>','<?php echo $a['Mood'] ?>')">Lihat</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h4>Riwayat Makan</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Makan</th>
                    <th>Waktu</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Kalori</th>
                    <th>Bahan Makanan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil1['makan'] as $data) { ?>
                    <tr>
                        <td><?php echo $data['NamaMakan']; ?></td>
                        <td><?php echo $data['Waktu']; ?></td>
                        <td><?php echo $data['Jumlah'];?></td>
                        <td><?php echo $data['Satuan'];?></td>
                        <td><?php echo $data['Kalori'];?></td>
                        <td><?php echo $data['BahanMakanan'];?></td>
                        <td><?php echo $data['Keterangan'];?></td>
                        <td><button type="button" class="btn btn-primary btn-sm" onclick="ditail('<?php echo $data['KodeMakan']?>')">Ditail</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <!-- return dari hasil 2     -->
    <?php } else if(!empty($hasil2['makan'])){ ?>
        <h4>Riwayat Makan</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Makan</th>
                    <th>Waktu</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Kalori</th>
                    <th>Bahan Makanan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil2['makan'] as $data) { ?>
                    <tr>
                        <td><?php echo $data['NamaMakan']; ?></td>
                        <td><?php echo $data['Waktu']; ?></td>
                        <td><?php echo $data['Jumlah'];?></td>
                        <td><?php echo $data['Satuan'];?></td>
                        <td><?php echo $data['Kalori'];?></td>
                        <td><?php echo $data['BahanMakanan'];?></td>
                        <td><?php echo $data['Keterangan'];?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h4>Riwayat Tidur</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>KualitasTidur</th>
                    <th>WaktuMulai</th>
                    <th>WaktuSelesai</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil2['tidur'] as $data) { ?>
                    <tr>
                        <td><?php echo $data['KualitasTidur'];  ?></td>
                        <td><?php echo $data['WaktuMulai'];  ?></td>
                        <td><?php echo $data['WaktuSelesai'];  ?></td>
                        <td><?php echo $data['Keterangan'];  ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h4>Riwayat Gejala</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Gejala</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil2['gejala'] as $data) { ?>
                    <tr>
                        <td><?php echo $data['Gejala'];  ?></td>
                        <td><?php echo $data['Waktu'];  ?></td>
                        <td><?php echo $data['Keterangan'];  ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <h4>Riwayat BAB</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Jumlah</th>
                    <th>Waktu</th>
                    <th>Warna</th>
                    <th>Skala</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil2['bab'] as $data) { ?>
                    <tr>
                        <td><?php echo $data['Jumlah'];  ?></td>
                        <td><?php echo $data['Waktu'];  ?></td>
                        <td><?php echo $data['Warna'];  ?></td>
                        <td><?php echo $data['Skala'];  ?></td>
                        <td><?php echo $data['Keterangan'];  ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else if(!empty($hasil3)){ ?>
        <h4>Riwayat Makan</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Makan</th>
                    <th>Waktu</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Kalori</th>
                    <th>Bahan Makanan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil3 as $data) { ?>
                    <tr>
                        <td><?php echo $data['NamaMakan']; ?></td>
                        <td><?php echo $data['Waktu']; ?></td>
                        <td><?php echo $data['Jumlah'];?></td>
                        <td><?php echo $data['Satuan'];?></td>
                        <td><?php echo $data['Kalori'];?></td>
                        <td><?php echo $data['BahanMakanan'];?></td>
                        <td><?php echo $data['Keterangan'];?></td>
                        <td><button type="button" class="btn btn-primary btn-sm" onclick="ditail('<?php echo $data['KodeMakan']?>')">Ditail</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {?>
        <p>Hasil tidak ditemukan.</p>
    <?php }  ?>
</div>