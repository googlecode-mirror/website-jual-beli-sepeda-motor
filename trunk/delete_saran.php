<?php
include "koneksi.php";

mysql_query("DELETE FROM saran WHERE id_saran='$_GET[id]'");
header('location:view_saran.php');
?>