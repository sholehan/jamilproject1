<h1 align="center"><font color="#0000FF">Kolom Kerja Parkir</font></h1>
<br />
<blockquote>
  <form id="addAdm" name="addAdm" method="post" action="<?php echo base_url();?>administrasi/index">
    <table border="0" cellpadding="0" height="5">
      <tr>
        <td width="100">Nopol</td>
	    <td width="5">:</td>
      <td width="150"><?php echo form_error('nopol');?><input type="text" id="nopol" name="nopol" value="<?php echo set_value('nopol');?>" /></td>	</tr>
      <tr>
        <td width="90">Type</td>
	    <td width="5">:</td>
	    <td width="150"><?php echo form_error('type');?><input type="text" id="type" name="type" value="<?php echo set_value('type');?>" /></td>
    </tr>
      <!--<tr>
  <td></td>
  <td></td>
  <td><?php
    $timeZone = 'Asia/jakarta';  // +2 hours
    date_default_timezone_set($timeZone);
   
    $dateSrc = 'GMT+7:00';
    $TimeOut = new DateTime($dateSrc);
   
    //echo 'date(): '.date('H:i:s', strtotime($dateSrc));
    // correct! date(): 14:50:00
   
    echo ''.$TimeOut->format('H:i:s');
      // INCORRECT! DateTime::format(): 12:50:00 ?></td>
      </tr>-->
      <tr>
        <td width="90"></td>
	    <td width="5"></td>
      <td width="150"><input type="submit" id="simpan" value="Simpan"/></td>	</tr>
    </table>	
  </form>
</blockquote>
<br />
	
<form action="<?php echo base_url();?>user/edit" id="edit" name="edit" method="post">
<table width="653" height="50" border="1" style="border:solid" bordercolor="#0000FF">
  <tr bgcolor="#FFFF00" bordercolor="#FF0000" >
    <td width="51" align="center" ><strong><font color="#0000FF" size="-1">No</font></strong></td>
  	<td width="85" align="center"><strong><font color="#0000FF" size="-1">Nopol</font></strong></td>
    <td width="74" align="center"><strong><font color="#0000FF" size="-1">Type</font></strong></td>
    <td width="87" align="center"><strong><font color="#0000FF" size="-1">Jam Masuk</font></strong></td>
    <td width="86" align="center"><strong><font color="#0000FF" size="-1">Jam Keluar</font></strong></td>
    <td width="71" align="center"><strong><font color="#0000FF" size="-1">Lama Parkir</font></strong></td>
    <td width="72" align="center"><strong><font color="#0000FF" size="-1">Biaya</font></strong></td>
	<td width="69" align="center"><strong><font color="#0000FF" size="-1">Status</font></strong></td>
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
    <td><font color="#0000FF" size="-1"><a href="<?php echo base_url().'administrasi/out/'.$row['id_parkir'];?>">stop</a></font></td>

	
  </tr>
  <?php $no++; }?>
</table>
</form>

