<h1 align="center"><font color="#0000FF">Kolom Kerja Parkir</font></h1>
<br />
<form id="addAdm" name="addAdm" method="post" action="<?php echo base_url();?>administrasi/index">
<table border="0" cellpadding="0" height="160">
<tr>
	<td width="200">Owner's Name</td>
	<td width="5">:</td>
	<td width="150"><?php echo form_error('nama');?><input type="text" id="nama" name="nama" value="<?php echo set_value('nama');?>" /></td>	</tr>
<tr>
	<td width="90">Vehicle Type</td>
	<td width="5">:</td>
	<td width="150"><?php echo form_error('type');?><input type="text" id="type" name="type" value="<?php echo set_value('type');?>" /></td>	</tr>
<tr>
	<td width="90">Brand Vehicles</td>
	<td width="5">:</td>
	<td width="150"><?php echo form_error('merk');?><input type="text" id="merk" name="merk" value="<?php echo set_value('merk');?>"/></td>	</tr>
<tr>
	<td width="90">Police Numbers</td>
	<td width="5">:</td>
	<td width="150"><?php echo form_error('nopol');?><input type="text" id="nopol" name="nopol" value="<?php echo set_value('nopol');?>"/></td>
</tr>
<tr>
	<td width="90"></td>
	<td width="5"></td>
	<td width="150"><input type="submit" id="simpan" value="Simpan"/></td>	</tr>
</table>	</form>
<br />
<table width="532" height="93" border="1" bordercolor="#0000FF">
  <tr bgcolor="#FFFF00" bordercolor="#FF0000" >
    <td width="27" align="center" ><strong><font color="#0000FF" size="-1">No</font></strong></td>
    <td width="89" align="center"><strong><font color="#0000FF" size="-1">Owner's Name</font></strong></td>
    <td width="83" align="center"><strong><font color="#0000FF" size="-1">Vehicle Type</font></strong></td>
    <td width="83" align="center"><strong><font color="#0000FF" size="-1">Brand Vehicles</font></strong></td>
    <td width="102" align="center"><strong><font color="#0000FF" size="-1">Police Numbers</font></strong></td>
    <td width="108" align="center"><strong><font color="#0000FF" size="-1">Action</font></strong></td>
  </tr>
  <?php $no=1?>
  <?php foreach ($query as $row){?>
<tr>
  <tr align="center" height="30" bgcolor="#00FFFF">
    <td><font color="#0000FF" size="-1"><?php echo $no?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['nama_pemilik']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['jenis_kend']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['merk_kend']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['no_polisi']?></font></td>
	<td><a href=""><font size="-1">Edit</font></a> | <a href=""><font size="-1">Delete</font></a></td>
  </tr>
  <?php $no++; }?>
</table>

