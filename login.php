<?php
session_start();
#**************** koneksi ke mysql *****************#
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dbtgs";
$conn = mysql_connect($host,$user,$pass);
if($conn) {
//select database
$sele = mysql_select_db($dbname);
if(!$sele) {
echo mysql_error();
}
}
#***************** akhir koneksi ******************#
#jika ditekan tombol login
if(isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysql_query("SELECT * FROM daftar WHERE username='$username' &&
password='$password'");
$num = mysql_num_rows($sql);
if($num==1) {
// login benar //
$_SESSION['user'] = $username;
$_SESSION['passwd'] = $password;
?>
<script language="JavaScript">alert('Anda berhasil login');
document.location='berhasil.php'
</script>
<?
} else {
// jika login salah //
?>
<script language="JavaScript">alert('Username atau password Andasalah'); 
document.location='home.php'</script>