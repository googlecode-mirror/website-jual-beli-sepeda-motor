<?php
include "koneksi.php";
$name= $_POST['f']; //get the nama value from form
$q = "SELECT * from produk where juduliklan like '%$juduliklan%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='5' cellpadding='6' cellspacing='10'>";
echo "
<tr bgcolor='orange'>
<td>juduliklan</td>
<td>harga</td>
<td>kondisi</td>
<td>lokasipenjualan</td>
<td>deskripsi</td>
</tr>";
while ($data = mysql_fetch_array($result)){
echo "
<tr>
<td>".$data['juduliklan']."</td>
<td>".$data['harga']."</td>
<td>".$data['kondisi']."</td>
<td>".$data['lokasipenjualan']."</td>
<td>".$data['deskripsi']."</td>
</tr>";
}
echo "</table>";
?>
