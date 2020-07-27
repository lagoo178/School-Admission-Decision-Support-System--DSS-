<?php
include ("konfig/koneksi.php");
$s=mysqli_query($koneksi, "select * from kriteria");
$h=mysqli_num_rows($s);


?>

<div class="box-header">
    <h3 class="box-title " >Nilai Vektor S</h3>
</div>

<table class="table table-bordered table-responsive">
<thead>
<tr>
<th rowspan="2">No</th>
<th rowspan="2">Nama</th>
<th rowspan="2">Nilai Vektor S</th>
</thead>
<tbody>
<?php
$i=0;

$a=mysqli_query($koneksi, "select * from alternatif");



while($da=mysqli_fetch_assoc($a)){


	echo "<tr>
		<td>".(++$i)."</td>
		<td>$da[nm_alternatif]</td>";
		$idalt=$da['id_alternatif'];
			
			//mencari vektor S
			$arBB=array();
			// to get a sum of bobot kriteria
			$n=mysqli_query($koneksi, "select sum(bobot) as sum from kriteria");
			$quB = mysqli_fetch_array($n);
			$jml_bobot = $quB['sum'];
			// loop kriteria
			$w = 0;
			$vkt_s = 1;
			$ps = mysqli_query($koneksi, "select * from nilai where id_alternatif='$idalt'");
			while ($rps=mysqli_fetch_array($ps)){
				$idkrit = $rps['id_kriteria'];
				$nalt = $rps['nilai'];
				// echo $rps['nilai'].'-'.$idkrit.'<br>';
				$cr = mysqli_query($koneksi, "select * from kriteria where id_kriteria='$idkrit'");
				$rcr = mysqli_fetch_array($cr);
				$npb = round(($rcr['bobot']/$jml_bobot),9);
				$nv = round(pow($nalt, $npb),9);
				// echo "$nv<br>";
				$vkt_s = $vkt_s * $nv;
			}
			// echo "<b>$vkt_s</b>";
			$upd = mysqli_query($koneksi, "update alternatif set n_vektor_s = '$vkt_s' where id_alternatif = '$idalt'");
			
			echo "<td align='center'>".($vkt_s)."</td>";
			
		echo "</tr>\n";

}
?>

</tbody>
</table>