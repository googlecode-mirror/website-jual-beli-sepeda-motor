<!DOCTYPE HTML>
<html><head><title>Motor.com</title><meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style"></head><body>
  <div id="main">
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
        
        <h2>DAFTAR</h2>
        <form action="" method="post">
          <div class="form_settings">
            <p><span>Username</span>
              <input type="text" name="username" id="username"value=""></p>
			  <p><span>Alamat</span>
                <input type="text" name="alamat" id="alamat"value=""></p>
			  <p><span>No_tlp</span>
                <input type="text" name="no_tlp" id="no_tlp"value=""></p>
			  <p><span>Tanggal_lahir</span>
                <input type="text" name="tanggal_lahir" id="tanggal_lahir"value=""></p>
			  <p><span>Email</span>
                <input type="text" name="email" id="email"value=""></p>
            <p><span>Password</span>
              <input type="password" name="password" id="password"value="">
            </p>
            <p>&nbsp;</p>
            <p><span> </span>
              <input class="submit" type="submit" name="name" value="ok">
            </p>
          </div>
        </form>
      </div>
    </div>
    <div id="content_footer"></div>
</div>
</body></html>
<?
if ($_POST)
{
$knek= mysql_connect ("localhost","root","") or die ("koneksi gagal");
mysql_select_db("dbtgs",$knek);
	$dbmask = "INSERT INTO daftar VALUES ('','$_POST[username]','$_POST[alamat]','$_POST[no_tlp]','$_POST[tanggal_lahir]','$_POST[email]','$_POST[password]')";
	$dbgakama = mysql_query($dbmask);
	$conet = mysql_close();
//	header("Location:daftar.php");
}
?>
