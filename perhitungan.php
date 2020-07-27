
<h1>Hasil dan Pengumuman</h1>
<ul class="nav nav-tabs">
  <?php
  if($_GET['k']=='n'){
	$act1='class="active"';
	$act2='';
	$act3='';
	$act4='';
  }else if($_GET['k']=='npb'){
	$act1='';
	$act2='class="active"';
	$act3='';
	$act4='';
  }else if($_GET['k']=='npv'){
	$act1='';
	$act2='';
	$act3='class="active"';
	$act4='';
  }else if($_GET['k']=='npa'){
	$act1='';
	$act2='';
	$act3='';
	$act4='class="active"';
  }else{
	$act1='';
	$act2='';
	$act3='';
	$act4='';
  }
  ?>
  <li <?php echo $act1; ?> ><a href="index.php?a=perhitungan&k=n">Data Nilai</a></li>
  
  <li <?php echo $act2; ?>><a href="index.php?a=perhitungan&k=npb">Nilai Perbaikan Bobot</a></li>
  
  <li <?php echo $act3; ?>><a href="index.php?a=perhitungan&k=npv">Nilai Vektor S</a></li>
  
  <li <?php echo $act4; ?>><a href="index.php?a=perhitungan&k=npa">Nilai Prefensi Alternatif</a></li>
  
  
</ul>

<?php

if(@$_GET['a']=='perhitungan' and @$_GET['k']=='n'){
	include ("nilai.php");
 }else if(@$_GET['k']=='npb'){
	include ("npb.php");
 }else if(@$_GET['k']=='npv'){
	include ("nvs.php");
 }else if(@$_GET['k']=='npa'){
	include ("nvv.php");
 }
 ?>
