<h1 align="center"><font color="#0000FF">Data User</font></h1>
<a href="<?php echo base_url();?>register" method="post" name="ragister" >REGISRASI</a>
<table width="594" border="1">
  <tr align="center" bgcolor="#FFFF00">
    <td width="33" height="30"><strong><font color="#0000FF" size="-1">No</font></strong></td>
    <td width="54"><strong><font color="#0000FF" size="-1">Name</font></strong></td>
    <td width="73"><strong><font color="#0000FF" size="-1">Username</font></strong></td>
    <td width="86"><strong><font color="#0000FF" size="-1">User Display</font></strong></td>
    <td width="58"><strong><font color="#0000FF" size="-1">Email</font></strong></td>
    <td width="76"><strong><font color="#0000FF" size="-1">Address</font></strong></td>
	<td width="76"><strong><font color="#0000FF" size="-1">Aksi</font></strong></td>
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
	<td><a href="<?php echo base_url().'user/edit/'.$row['no']?>"><font size="-1" face="Times New Roman">Edit</font></a>
	 <a href="<?php echo base_url().'user/delete/'.$row['no']?>"><font size="-1" face="Times New Roman">Hapus</font></a></td>
  </tr>
    <?php $no++; }?>
</table>
