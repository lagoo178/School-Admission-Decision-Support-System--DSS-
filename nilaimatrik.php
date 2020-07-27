
<h1>Data Nilai</h1>
<ul class="nav nav-tabs">
  
  <li class="active" ><a href="index.php?a=kriteria&k=kriteria">Isi Nilai Siswa</a></li>
  
  
  
</ul>
<div class="box-header">
    <h3 class="box-title">Tambah Data Nilai</h3>
</div>


<form method="POST" action="">
<div class="form-group">
							<label class="control-label col-lg-2">Id Alternatif</label>
							<div class="col-lg-4">
								<select name="id_alt" class="form-control">
								<?php
								include ("konfig/koneksi.php");
								$s=mysqli_query($koneksi, "select * from alternatif");
								while($d=mysqli_fetch_assoc($s)){
								?>
								
									<option value="<?php echo $d['id_alternatif'] ?>"><?php echo $d['id_alternatif']." | ".$d['nm_alternatif'] ?></option>
								<?php
								}
								?>
								</select>
							
								
							</div>
							
						</div>
						<br />
<hr />

	<div class="form-group">
								<?php
								$i=1;
								$alt=mysqli_query($koneksi, "select * from kriteria");
						//hitung jml kriteria		
						$jml_krit=mysqli_num_rows($alt);		
								
			while($dalt=mysqli_fetch_assoc($alt)){
								?>
						
	<table   align="left">
		<tr>
		<td width="200" >
			<label ><?php echo $dalt['nama_kriteria']; ?></label>
			<input type="hidden" name="id_krite<?php echo $i; ?>" value="<?php echo $dalt['id_kriteria']; ?>" />
		</td>					
			<div class="col-md-12">
		<td width="80">					
			<input type="text" name="nilai<?php echo $i; ?>"/>
		</td>
		</tr>	
								
		<?php
		$i++;
		}
		?>
		<tr>
		<td colspan=5 align="center">
		<br></b><input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		</td>
		</tr>
	</table>		

	</div>
							
</div>
						
						
</form>						
<?php
$b=mysqli_query($koneksi, "select * from kriteria");
$c=mysqli_fetch_assoc($b);



if(isset($_POST['simpan'])){
 
$o=1;

//cek id alternatif
$id_alt=$_POST['id_alt'];
$cek=mysqli_query($koneksi, "select * from alternatif where id_alternatif='$id_alt'");
$cek_l=mysqli_num_rows($cek);
if($cek_l>0){
	$del=mysqli_query($koneksi, "delete from nilai where id_alternatif='$id_alt'");
}

for($n=1;$n<=$jml_krit;$n++){
	$id_k=$_POST['id_krite'.$o];
	 $nilai=$_POST['nilai'.$o];
	
	
	$m=mysqli_query($koneksi, "insert into nilai (id_alternatif,id_kriteria,nilai) values('$_POST[id_alt]','$id_k','$nilai')");
	
	$o++;
}

}
?>			

			