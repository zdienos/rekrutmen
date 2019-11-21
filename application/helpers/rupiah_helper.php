<?php
function separator_harga($harga)
{
	$format_number = number_format($harga, 0, ',', '.');
	return $format_number;
}

function separator_harga2($harga)
{
	$format_number = number_format($harga, 2, ',', '.');
	return $format_number;
}

function remove_separator($harga)
{
	return str_replace('.', '', $harga);
}

function remove_separator2($harga)
{
	$exp = explode(',', $harga);
	if (count($exp) == 2) {
		$str1 = str_replace(".", "", $exp[0]);
		$format = $str1 . '.' . $exp[1];
	}
	return floatval($format);
}

function remove_separator3($harga)
{
	$exp = explode(',', $harga);
	if (count($exp) == 2) {
		$str1 = str_replace(".", "", $exp[0]);
		$format = $str1 . '.00';
	}
	return floatval($format);
}

function penyebut($nilai)
{
	$nilai = abs($nilai);
	$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " " . $huruf[$nilai];
	} else if ($nilai < 20) {
		$temp = penyebut($nilai - 10) . " Belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai / 10) . " Puluh" . penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " Seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai / 100) . " Ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " Seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai / 1000) . " Ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai / 1000000) . " Juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai / 1000000000) . " Milyar" . penyebut(fmod($nilai, 1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai / 1000000000000) . " Trilyun" . penyebut(fmod($nilai, 1000000000000));
	}
	return $temp;
}

function terbilang($nilai)
{
	if ($nilai < 0) {
		$hasil = "Minus " . trim(penyebut($nilai)) . " Rupiah";
	} else {
		$hasil = trim(penyebut($nilai)) . " Rupiah";
	}
	return $hasil;
}
