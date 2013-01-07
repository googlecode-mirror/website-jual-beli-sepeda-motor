<style type="text/css">
<!--
.style1 {	font-family: Antares;
	font-size: 56px;
	color: #0000FF;
}
-->
</style>
<table width="859" border="2" align="center" bordercolor="#999999" background="image/backfix.jpg">
 
      <td><div align="center">KOTAK SARAN </div></td>
  </tr>
  
  <tr>
    <td><table width="844" border="3" align="center" bordercolor="#CCCCCC">
      <tr>
        <td colspan="3">
		<?
		$kon = mysql_connect("localhost","root","") or die ("Salah Bozzz");
		mysql_select_db("dbtgs",$kon);
		$query = "SELECT * FROM saran ORDER BY id_saran ";
		$result = mysql_query($query);
		//$conn = mysql_close();
		?>        </td>
      </tr>
      <tr>
		<td width="16%" class="head"><div align="center">Nama</div></td>
        <td width="16%" class="head"><div align="center">No_Telepon</div></td>
        <td width="16%" class="head"><div align="center">Email</div></td>
		<td width="16%" class="head"><div align="center">Pesan</div></td>
		<td colspan="2" class="head"><div align="center">Opsi</div></td>
      </tr>
      <?
	while ($rows = mysql_fetch_array ($result))
	{
		$a=($a==1) ? 0 : 1;
		$col=($a==1) ? "#CCCCCC" : "#999999";
?>
      <tr bgcolor="<?=$col?>">
        <td class="isi"><?=$rows[nama]?>        </td>
		<td class="isi"><?=$rows[telepon]?>        </td>
		<td class="isi"><?=$rows[email]?>        </td>
		<td class="isi"><?=$rows[pesan]?>        </td>
		<td width="5%" class="isi">&nbsp;</td>
        <td width="9%" class="isi"><div align="center"> <? echo "<a href=delete_saran.php?id=$rows[id_saran]>Hapus</a></td>"; ?>
		</div></td>
		
		
      </tr>
      <? }?>
  &nbsp;
    </table></td>
  </tr>
  <tr>
    <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
      <param name="movie" value="button5.swf" />
      <param name="quality" value="high" />
      <embed src="button5.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
    </object></td>
  </tr>
</table>
