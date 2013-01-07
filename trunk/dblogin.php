<?
session_start();
include "../admin/koneksi.php";

if(isset($_POST['username'])&& isset($_POST['password']))
{
$q=$_POST['username'];
$r=$_POST['password'];
$logginku = "SELECT * FROM admin WHERE (username = '$q' AND password = '$r')";
$qryLogin = mysql_query($logginku);
$row = mysql_num_rows($qryLogin);
	if ($row == 1) 
	{
		$_SESSION['us']=$q;
		$_SESSION['ps']=$r;
		?>
<script language="JavaScript">alert('Selamat Datang Admin');
document.location='home_admin.php'
</script>
<?
} else {
// jika login salah //
?>
<script language="JavaScript">alert('Username atau password Andasalah'); 
document.location='loginadmin.php'</script>
<?
}
}
?>
