<?php

//Konversi tanggal
function datetime_show($date){
  if(empty($date)){
      $output= ' - ';
  }else{   
  $datetime = date_create($date);
  $output= date_format($datetime, 'd-m-Y H:i:s');   
  }
  return $output;     
}

function tgl_sql($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
}

function tgl_excel($date){
	$exp = explode('/',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[0].'-'.$exp[1];
	}
	return $date;
}

function time_sql($date){
	$replace=str_replace(' ','-',$date);
	$exp = explode('-',$replace);
	if(count($exp) == 4) {
		$tgl = '<b>'.$exp[2].'-'.$exp[1].'-'.$exp[0].'</b> '.$exp[3];
	}
	return $tgl;
}

function tgl_sql_gm($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'/'.$exp[1].'/'.$exp[0];
	}
	return $date;
}

function tgl_str($date){
	$exp = explode('-',$date);
	if(count($exp) == 3) {
		$date = $exp[2].'-'.$exp[1].'-'.$exp[0];
	}
	return $date;
}

function ambilTgl($tgl){
	$exp = explode('-',$tgl);
	$tgl = $exp[2];
	return $tgl;
}

function ambilBln($tgl){
	$exp = explode('-',$tgl);
	$tgl = $exp[1];
	$bln = getBulan($tgl);
	$hasil = substr($bln,0,3);
	return $hasil;
}

function tgl_indo($tgl){
		$jam = substr($tgl,11,10);
		$tgl = substr($tgl,0,10);
		$tanggal = substr($tgl,8,2);
		$bulan = getBulan(substr($tgl,5,2));
		$tahun = substr($tgl,0,4);
		return $tanggal.' '.$bulan.' '.$tahun.' '.$jam;
}

function getBulan($bln){
	switch ($bln){
		case 1:
			return "Januari";
			break;
		case 2:
			return "Februari";
			break;
		case 3:
			return "Maret";
			break;
		case 4:
			return "April";
			break;
		case 5:
			return "Mei";
			break;
		case 6:
			return "Juni";
			break;
		case 7:
			return "Juli";
			break;
		case 8:
			return "Agustus";
			break;
		case 9:
			return "September";
			break;
		case 10:
			return "Oktober";
			break;
		case 11:
			return "November";
			break;
		case 12:
			return "Desember";
			break;
	}
}

function hari_ini($hari){
	date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
	$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	//$hari = date("w");
	$hari_ini = $seminggu[$hari];
	return $hari_ini;
}

function hari_kuliah(){
	$q = array('Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu');
	return $q;
}
?>
