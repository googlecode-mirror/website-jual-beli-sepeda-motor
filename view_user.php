<style type="text/css">
<!--
.style1 {	font-family: Antares;
	font-size: 56px;
	color: #0000FF;
}
-->
</style>
<table width="859" border="2" align="center" bordercolor="#999999" background="image/backfix.jpg">
 
      <td><div align="center">DATA USER </div></td>
  </tr>
  
  <tr>
    <td><table width="845" border="3" align="center" bordercolor="#CCCCCC">
      <tr>
        <td colspan="3">
		<?
		$kon = mysql_connect("localhost","root","") or die ("Salah Bozzz");
		mysql_select_db("dbtgs",$kon);
		$query = "SELECT * FROM daftar ORDER BY id ";
		$result = mysql_query($query);
		//$conn = mysql_close();
		?>        </td>
      </tr>
      <tr>
		<td width="16%" class="head"><div align="center">User</div></td>
		<td width="16%" class="head"><div align="center">Alamat</div></td>
        <td width="16%" class="head"><div align="center">No_Telepon</div></td>
		<td width="16%" class="head"><div align="center">Tanggal_Lahir</div></td>
        <td width="16%" class="head"><div align="center">Email</div></td>
		<td colspan="2" class="head"><div align="center">Opsi</div></td>
      </tr>
      <?
	while ($rows = mysql_fetch_array ($result))
	{
		$a=($a==1) ? 0 : 1;
		$col=($a==1) ? "#CCCCCC" : "#999999";
?>
      <tr bgcolor="<?=$col?>">
        <td class="isi"><?=$rows[user]?>        </td>
		<td class="isi"><?=$rows[alamat]?>        </td>
		<td class="isi"><?=$rows[no_tlp]?>        </td>
		<td class="isi"><?=$rows[tanggal_lahir]?>        </td>
		<td class="isi"><?=$rows[email]?>        </td>
		<td width="5%" class="isi">&nbsp;</td>
        <td width="9%" class="isi"><div align="center"> <? echo "<<a href=delete_user.php?id=$rows[id]>Hapus</a></td>"; ?>
		</div></td>
      </tr>
      <? }?>
  &nbsp;
    </table></td>
  </tr>
  <tr>
    <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
      <param name="movie" value="button6.swf" />
      <param name="quality" value="high" />
      <embed src="button6.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
    </object></td>
  </tr>
</table>
