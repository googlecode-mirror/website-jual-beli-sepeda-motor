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
            <p>&nbsp;</p>
			  <table width="567" border="1" bgcolor="#000000">
                <tr>
                  <td width="200">Username</td>
                  <td width="351"><input type="text" name="username" id="username"value=""></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><input type="text" name="alamat" id="alamat"value=""></td>
                </tr>
                <tr>
                  <td>No_tlp</td>
                  <td><input type="text" name="no_tlp" id="no_tlp"value=""></td>
                </tr>
                <tr>
                  <td>Tanggal_lahir</td>
                  <td><input type="text" name="tanggal_lahir" id="tanggal_lahir"value=""></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="text" name="email" id="email"value=""></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="password" id="password"value=""></td>
                </tr>
            </table>
		      <p><span> </span>
              <input class="submit" type="submit" name="name2" value="Save">
              </p>
		      <p align="right">&nbsp;</p>
		      <p align="right"><a href="home.php"><strong>LOGIN</strong></a></font></td>
	              </p>
		      <p>&nbsp;</p>
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
