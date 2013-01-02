<?
if (isset($_POST['Upload'])) {
$dir_upload = "gambar/";
$nama_file = $_FILES['file']['name'];
//
if ((is_uploaded_file($_FILES['file']['tmp_name']))) {
$cek = move_uploaded_file ($_FILES['file']['tmp_name'],$dir_upload.$nama_file);


if ($cek) {
	require('atur.php');
	$sqlInsert = "INSERT INTO produk VALUES ('','$_POST[TF1]','$_POST[select]','$_POST[DK9]','$_POST[DK10]','$_POST[DK11]','$_POST[DK12]','$nama_file')";
	mysql_query($sqlInsert,$conn) or die('Error, query failed : ' . mysql_error()); 
	$conn = mysql_close();
	header ("Location: pasangiklan.php");
} else {
echo "Error File Uploading";
}
}
}
?>
