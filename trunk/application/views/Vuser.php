<h1 align="center"><font color="#0000FF">Data User</font></h1>
<table width="505" border="1">
  <tr align="center" bgcolor="#FFFF00">
    <td width="30" height="30"><strong><font color="#0000FF" size="-1">No</font></strong></td>
    <td width="86"><strong><font color="#0000FF" size="-1">Name</font></strong></td>
    <td width="87"><strong><font color="#0000FF" size="-1">Username</font></strong></td>
    <td width="94"><strong><font color="#0000FF" size="-1">User Display</font></strong></td>
    <td width="74"><strong><font color="#0000FF" size="-1">Email</font></strong></td>
    <td width="94"><strong><font color="#0000FF" size="-1">Address</font></strong></td>
  </tr>
   <?php $no=1?>
  <?php foreach ($query as $row){?>
  <tr align="center" bgcolor="#00FFFF">
    <td height="23"><?php echo $no?></td>
    <td><?php echo $row['nama']?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['user_display']?>;</td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['alamat']?></td>
  </tr>
  <?php $no++; }?>
</table>
