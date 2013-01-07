<?php
include "koneksi.php";

mysql_query("DELETE FROM daftar WHERE id='$_GET[id]'");
header('location:view_user.php');
?>