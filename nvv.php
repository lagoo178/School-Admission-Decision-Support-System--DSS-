<?php
include ("konfig/koneksi.php");
$s=mysqli_query($koneksi, "select * from kriteria");
$h=mysqli_num_rows($s);


?>

<div class="box-header">
    <h3 class="box-title " >Hasil Akhir dan Ranking</h3>
</div>

<table class="table table-bordered table-responsive">
<thead>
<tr>
<th rowspan="2">Ranking</th>
<th rowspan="2">Nama</th>
<th rowspan="2">Nilai Prefrensi Alternatif</th>
</thead>
<tbody>
<?php
$i=0;

$a=mysqli_query($koneksi, "select * from alternatif order by n_vektor_v desc");



while($da=mysqli_fetch_assoc($a)){


	echo "<tr>
		<td>".(++$i)."</td>
		<td>$da[nm_alternatif]</td>";
		$idalt=$da['id_alternatif'];
	
			//mencari perbaikan bobot
			$arBB=array();
			$n=mysqli_query($koneksi, "select sum(n_vektor_s) as sum from alternatif");
			$quV = mysqli_fetch_array($n);
			$jml_vs = $quV['sum'];
			$vkt_v = $da['n_vektor_s'] / $jml_vs;
			// echo "<b>$vkt_s</b>";
			$upd = mysqli_query($koneksi, "update alternatif set n_vektor_v = '$vkt_v' where id_alternatif = '$idalt'");
			
			echo "<td align='center'>".($vkt_v)."</td>";
			
		echo "</tr>\n";

}
?>

</tbody>
</table>