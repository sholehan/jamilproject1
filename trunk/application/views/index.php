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
<table border="0" bgcolor="#FFFFFF" cellpadding="5">
<tr> <td>

<?php $this->load->view($menu)?>
  <table width="1101" height="725" style="border:#FF0000" >
  <tr>
    <th width="246" height="180" scope="row" bgcolor="#FF0000"><a href=""><img src="<?php echo base_url()?>assets/51854910.jpg" alt="bola" width="233" height="163" align=""/></a></th>
    <td width="594" rowspan="4" bgcolor="#00FF00" valign="top" >
	<div  id="main">
&nbsp; <?php $this->load->view($main_view)?></div> </td>
    <td width="245" valign="top" bgcolor="#0000FF"><div align="center"> <span class="style7"></span><!--<?php echo $this->session->userdata('user_display');?> --><br />
      <div id="menu_kanan" >
	 <br/><?php $this->load->view($slide_view)?></div>
</div>   
</td>
</tr>
  <tr>
    <th height="181" scope="row" bgcolor="#FF0000"><a href=""><img src="<?php echo base_url()?>assets/474012.JPG" alt="balap" width="233" height="163" /></a></th>
    <td bgcolor="#FF0000" valign="top"><div align="center" >
      <p><span class="style1"><br>
          <span class="style8">Do you want to register to be a new User?          </span></span>
          <span class="style8"></br>
          </span>
          <br>
         <a href="<?php echo site_url()?>register"><font color="#00FF00" size="+2"><strong>Registrasi</strong></font></a>
      </div></td>
  </tr>
  <tr>
    <th height="178" scope="row" bgcolor="#FF0000"><a href=""><img src="<?php echo base_url()?>assets/911Turbo.jpg" alt="elegant" width="233" height="163"></a></th>
    <td align="center" valign="top" bgcolor="#3300FF"><strong>Do you want to give us a command ?</strong>
	<br>
	<br>
	<a href="<?php echo site_url()?>komen" ><font size="+2" face="Comic Sans MS" color="#FFCC00"><strong>Give a command</strong></font></a></td>
  </tr>
  <tr>
    <th height="174" scope="row" bgcolor="#FF0000"><a href="" ><img src="<?php echo base_url()?>assets/550sypder.jpg" alt="modivy" width="233" height="163"></a></th>
    <td align="center" valign="top" bgcolor="#FFFF00"><p><strong><span class="style2">Do you want to make a reklame?</span></strong></p>
    <p><strong><span class="style3"><a href="">Click Here</a> </span></strong></p></td>
  </tr>
</table>

</td>
</tr>
</table>
</center>
</body>
</html>
