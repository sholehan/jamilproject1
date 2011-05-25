<h1 align="center"><font color="#0000FF">Kolom Kerja Parkir</font></h1>
<br />
<form id="addAdm" name="addAdm" method="post" action="<?php echo base_url();?>administrasi/index">
<table border="0" cellpadding="0" height="5">
<tr>
	<td width="100">Nopol</td>
	<td width="5">:</td>
	<td width="150"><?php echo form_error('nopol');?><input type="text" id="nopol" name="nopol" value="<?php echo set_value('nopol');?>" /></td>	</tr>
<tr>
	<td width="90">Type</td>
	<td width="5">:</td>
	<td width="150"><?php echo form_error('type');?><input type="text" id="type" name="type" value="<?php echo set_value('type');?>" /></td>	</tr>
<tr>
	<td width="90"></td>
	<td width="5"></td>
	<td width="150"><input type="submit" id="simpan" value="Simpan"/></td>	</tr>
</table>	</form>
<br />
<table border="0"><tr align="right"><td width="596"><input type="submit" id="stop" name="stop" value="Stop" /></td></tr></table>
<form action="<?php echo base_url();?>user/edit" id="edit" name="edit" method="post">
<table width="599" height="50" border="1" bordercolor="#0000FF">
  <tr bgcolor="#FFFF00" bordercolor="#FF0000" >
    <td width="22" align="center" ><strong><font color="#0000FF" size="-1">No</font></strong></td>
    <td width="84" align="center"><strong><font color="#0000FF" size="-1">Nopol</font></strong></td>
    <td width="48" align="center"><strong><font color="#0000FF" size="-1">Type</font></strong></td>
    <td width="131" align="center"><strong><font color="#0000FF" size="-1">Jam Masuk</font></strong></td>
    <td width="112" align="center"><strong><font color="#0000FF" size="-1">Jam Keluar</font></strong></td>
    <td width="38" align="center"><strong><font color="#0000FF" size="-1">Lama Parkir</font></strong></td>
    <td width="70" align="center"><strong><font color="#0000FF" size="-1">Biaya</font></strong></td>
	<td width="42" align="center"><strong><font color="#0000FF" size="-1">Status</font></strong></td>
  </tr>
  <?php $no=1?>
  <?php foreach ($query as $row){?>
<tr>
  <tr align="center" height="30" bgcolor="#00FFFF">
    <td><font color="#0000FF" size="-1"><?php echo $no?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['nopol']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['type']?></font></td>
	   <td><font color="#0000FF" size="-1"><?php echo $row['jam_masuk']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['jam_keluar']?></font></td>
	<td><font color="#0000FF" size="-1"><?php echo $row['lama_parkir']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['biaya']?></font></td>
    <td><font color="#0000FF" size="-1"><?php echo $row['status']?></font></td>
<!--<td>
	<a href=""><font size="-1">Edit</font></a> | 
	<a href=""><font size="-1">Delete</font></a></td>-->
  </tr>
  <?php $no++; }?>
</table>
</form>

<?php
/*function time_difference($endtime){
    $hours =date("G",$endtime);
    $mins =date("i",$endtime);
    $secs =date("s",$endtime);
    $diff=",'hour': ".$hours.",'min': ".$mins.",'sec': ".$secs;
    return $diff;
}   
$end_time = $future_date - time();
$difference = time_difference($end_time);
echo $difference;

//sample output
'day': 2,'month': 1,'year': 0,'hour': 2,'min': 05,'sec': 41;*/
$today = date("H:i:s");
echo $today;
?>