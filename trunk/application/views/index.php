<html>
<head>
<title>Parkir | <?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" >
</head>
<body>
<style type="text/css">
<!--
body{
background-color:#000000;
}
.style1 {
	color: #00FF00;
	font-weight: bold;
}
.style2 {
	font-family: "Comic Sans MS";
	color: #0000FF;
}
.style3 {font-size: xx-large}
.style7 {
	font-style: italic;
	font-size: large;
	font-weight: bold;
}
.style8 {color: #0000FF}
-->
</style>
<center>
<table border="0" cellpadding="15" bgcolor="#FFFFFF">
<tr> <td>

<?php $this->load->view($menu)?>
  <table width="1109" height="725" border="0">
  <tr>
    <th width="20" rowspan="3" bgcolor="#FFFFFF" scope="row" valign="middle" style="border:solid"><p></p><a href="" style="border-color:#FF0000"><img src="<?php echo base_url()?>assets/51854910.jpg" alt="bola" width="233" height="163" align=""/></a><p></p>
      <p></p>
      <a href=""><img src="<?php echo base_url()?>assets/474012.JPG" alt="balap" width="233" height="163" /></a><p></p><a href=""><img src="<?php echo base_url()?>assets/911Turbo.jpg" alt="elegant" width="233" height="163"></a><p></p><a href="" ><img src="<?php echo base_url()?>assets/550sypder.jpg" alt="modivy" width="233" height="163"></a></p></th>
    <td width="700" rowspan="3" bgcolor="#00FFFF" valign="top" bordercolor="#FFFF00">
	<div  id="main">
&nbsp; <?php $this->load->view($main_view)?></div> </td>
    <td width="197" valign="top" bgcolor="#FFFFFF"><font color="#0000FF"><?php
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("D, \\o\\n F, j - Y"); echo $today;?></font><br />
      <div id="menu_kanan" >
	 <br/><?php $this->load->view($slide_view)?></div>
</div>
<div align="center" >
      <?php $this->load->view($slide_view2)?>  </td>
</tr>
  
<tr>
    <td></td>
	  </tr>
  <!--<tr>
    <td height="174" align="center" valign="top" bgcolor="#FFFF00"><p><strong><span class="style2">Do you want to make a reklame?</span></strong></p>
    <p><strong><span class="style3"><a href="">Click Here</a> </span></strong></p></td>
  </tr>-->
</table>

</td>
</tr>
</table>
</center>
</body>
</html>
