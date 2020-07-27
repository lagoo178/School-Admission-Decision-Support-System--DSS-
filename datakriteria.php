<div class="box-header">
    <h3 class="box-title">Data Kriteria</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Kriteria</th>
<th>Nama Kriteria</th>
<th>Bobot</th>
<th>Sifat Kriteria</th>
<th>Pilihan</th>
</tr>
</thead>
<tbody>
<?php
include ("konfig/koneksi.php");

$s=mysqli_query($koneksi, "select * from kriteria order by id_kriteria ASC");
while($d=mysqli_fetch_assoc($s)){
?>
<tr>
<td><?php echo $d['id_kriteria']; ?></td>
<td><?php echo $d['nama_kriteria']; ?></td>
<td><?php echo $d['bobot']; ?></td>
<td><?php echo $d['sifat']; ?></td>
<td>
<a href="?a=kriteria&k=ubahk&id=<?php echo $d['id_kriteria']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapus.php?id=<?php echo $d['id_kriteria']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>