<h1 align="center"><font color="#0000FF">Data User</font></h1>
<table width="550" border="1">
  <tr align="center" bgcolor="#FFFF00">
    <td width="45" height="30"><strong><font color="#0000FF" size="-1">No</font></strong></td>
    <td width="71"><strong><font color="#0000FF" size="-1">Name</font></strong></td>
    <td width="87"><strong><font color="#0000FF" size="-1">Username</font></strong></td>
    <td width="119"><strong><font color="#0000FF" size="-1">User Display</font></strong></td>
    <td width="79"><strong><font color="#0000FF" size="-1">Email</font></strong></td>
    <td width="99"><strong><font color="#0000FF" size="-1">Address</font></strong></td>
	<td width="99"><strong><font color="#0000FF" size="-1">Aksi</font></strong></td>
  </tr>
   <?php $no=1?>
  <?php foreach ($query as $row){?>
  <tr align="center" bgcolor="#00FFFF">
    <td height="23"><font size="-1" face="Times New Roman"><?php echo $no?></font></td>
    <td><font size="-1" face="Times New Roman"><?php echo $row['nama']?></font></td>
    <td><font size="-1" face="Times New Roman"><?php echo $row['username']?></font></td>
    <td><font size="-1" face="Times New Roman"><?php echo $row['user_display']?></font></td>
    <td><font size="-1" face="Times New Roman"><?php echo $row['email']?></font></td>
    <td><font size="-1" face="Times New Roman"><?php echo $row['alamat']?></font></td>
	 <td><font size="-1" face="Times New Roman"><a href="#">Edit</a> | <a href='#'>Hapus<a/></font></td>
  </tr>
  <?php $no++; }?>
</table>
