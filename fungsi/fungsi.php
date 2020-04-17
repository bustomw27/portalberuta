<?php 
function name($parameter) {
$data=mysqli_fetch(mysqli_query("SELECT nama_lengkap FROM admin WHERE id_admin='$parameter'"));
return $data[0];
 }

 function random()
 {
 	echo rand(0,999);
 }

function msgbox($msg,$url){
echo "<script>window.alert('$msg');window.location=('$url');</script>";
}

function rdir($url){
header("location:$url");
}

function status ($parameter) {
if ($parameter==1)
	$status="Aktif";
	else
		$status="Non Aktif";
	return $status;

}

function rupiah ($parameter) {
	$rupiah="<sup>Rp</sup>".number_format($parameter,0,',','.');
	return $rupiah;
}

function selisihwaktu($waktupembuatan){
	$waktusekarang=date("Y-m-d h:i:s");
	$datetime1= new DateTime($waktusekarang);
	$datetime2= new DateTime($waktupembuatan);
	$interval= $datetime1->diff($datetime2);
	return $selisih;
}

function tgl_ina($parameter){
	$thn=substr($parameter,0,4);
	$b=substr($parameter,5,2);
	$tgl=substr($parameter,-2);
	if($b==1) {$bln="Januari";}	
	elseif ($b==2) {$bln="Februari";}
	elseif ($b==3) {$bln="Maret";}
	elseif ($b==4) {$bln="April";}
	elseif ($b==5) {$bln="Mei";}
	elseif ($b==6) {$bln="Juni";}
	elseif ($b==7) {$bln="Juli";}
	elseif ($b==8) {$bln="Agustus";}
	elseif ($b==9) {$bln="September";}
	elseif ($b==10) {$bln="Oktober";}
	elseif ($b==11) {$bln="November";}
	elseif ($b==12) {$bln="Desember";}

	$tanggal=$tgl." ".$bln." ".$thn;
	return $tanggal;
}

function tgl_ina2($parameter2){
	$parameter2=substr($parameter1,0,10);
	$parameter3=substr($parameter1,-8);
	$thn=substr($parameter2,2,2);
	$bln=substr($parameter2,5,2);
	$tgl=substr($parameter2,2,-2);
	$tanggal=$tgl."/".$bln."/".$thn;
	$jam=$parameter3;
	$waktu=$tanggal.".::::.".$jam;
	return $waktu;
}

function tgl_ina3($parameter){
	$thn=substr($parameter,2,2);
	$bln=substr($parameter,5,2);
	$tgl=substr($parameter,2,-2);
	$tanggal=$tgl."/".$bln."/".$thn;
	$waktu=$tanggal;
	return $waktu;
}

function hari_ina($day){
	if ($day=="Monday") 
		{$hari="Senin";}
	elseif ($day=="Tuesday") 
		{$hari="Selasa";}
	elseif ($day=="Wednesday") 
		{$hari="Rabu";}
	elseif ($day=="Thursday") 
		{$hari="Kamis";}
	elseif ($day=="Friday") 
		{$hari="Jumat";}
	elseif ($day=="Saturday") 
		{$hari="Sabtu";}
	elseif ($day=="Sunday") 
		{$hari="Minggu";}
	return $hari;
}

function jangkawaktu($waktu1,$waktu2){
	$start_date=new DateTime($waktu1);
	$end_date=new DateTime($waktu2);
	$interval=$start_date->diff($end_date);
	$selisih=$interval->d;
	$jangkawaktu=$selisih+1;
	return $jangkawaktu;

}

 ?>


