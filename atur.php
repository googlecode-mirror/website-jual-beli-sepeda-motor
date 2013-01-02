<?
	$dbHost = "localhost";
	$dbName = "dbtgs";
	$dbUser = "root";
	$dbPass = "";

	
	$conn = mysql_connect($dbHost,$dbUser,$dbPass) or die("Gagal koneksi database");
	mysql_select_db($dbName,$conn) or die("Gagal pilih database");
	
	$title = "Kelinci Percobaan";
	

$footer = "Kelinci Percobaan";
	
?>