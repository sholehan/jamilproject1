<?php echo $this->session->flashdata('message_type');?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<form action="<?php echo site_url()?>home/doLogout" method="post" name="logoutForm" id="logoutForm"><table width="228" border="0">
  <tr>
    <td colspan="3" class="lg_banner"><strong><span class="style1">Administrator</span></td>
    </tr>
  <tr class="lg_login">
    <td width="98"><font size="4" color="#0000FF" style="font:'Comic Sans MS'">Name</font></td>
    <td width="120"><font size="4" color="#0000FF" style="font:'Comic Sans MS'"><?php echo $nama->usernama;?></font></td>
    
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
		<tr>
	<td><input type="submit" name="submit" value="Logout" /></td>
  </tr>
</table></form>