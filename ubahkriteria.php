<?php

include ("konfig/koneksi.php");


$query = "SELECT max(id_kriteria) as idMaks FROM kriteria";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['idMaks'];

//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "kr";
//%03s untuk mengatur 3 karakter di belakang 201353
$IDbaru = $char . sprintf("%03s", $noUrut);

//ambil data \
$s=mysqli_query($koneksi, "select * from kriteria where id_kriteria='$_GET[id]'");
$d=mysqli_fetch_assoc($s);


?>
<div class="box-header">
    <h3 class="box-title">Ubah Kriteria</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_kriteria" class="form-control" value="<?php echo $d['id_kriteria']; ?>" readonly>
 <br />
 <input type="text" name="nama_kriteria" class="form-control"  placeholder="Nama Kriteria" value="<?php echo $d['nama_kriteria']; ?>" >
 <br />
 <input type="text" name="bobot" class="form-control" placeholder="Bobot" value="<?php echo $d['bobot']; ?>">
 <br />
 <select name="sifat" class="form-control">
	<option value="<?php echo $d['sifat']; ?>"><?php echo $d['sifat']; ?></option>
	<option value="benefit">Benefit</option>
	<option value="cost">Cost</option>
 </select>
 <br />
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$s=mysqli_query($koneksi, "update kriteria set nama_kriteria='$_POST[nama_kriteria]', bobot='$_POST[bobot]', sifat='$_POST[sifat]' where id_kriteria='$_POST[id_kriteria]'");
	
	if($s){
		echo "<script>alert('Diubah'); window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
	}
}

?>

