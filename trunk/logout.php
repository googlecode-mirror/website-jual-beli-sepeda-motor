<?php
session_start();
if (isset($_SESSION['us']) && isset ($_SESSION['ps']) )
{
unset ($_SESSION['ps']);
unset ($_SESSION['us']);
}

header ("location:index.php");
?>