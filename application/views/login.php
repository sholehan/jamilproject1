<?php echo $this->session->flashdata('message_type');?>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>

<form action="<?php echo site_url()?>home/login_process" method="post" name="loginForm" id="loginForm"><table width="194"  bgcolor="#00FF00" >
  <tr>
    <td colspan="3" class="lg_banner"><strong><span class="style1">Login to use</span></td>
    </tr>
  <tr class="lg_login">
    <td width="69"><font size="4" color="#0000FF" style="font:'Comic Sans MS'">Username</font></td>
    <td width="3"><font size="4" color="#0000FF" style="font:'Comic Sans MS'">:</font></td>
    <td width="108"><input type="text" name="username"  size="18" /></td>
  </tr>
  <tr>  
    <td><font size="4" color="#0000FF" style="font:'Comic Sans MS'">Password</font></td>
    <td><font size="4" color="#0000FF" style="font:'Comic Sans MS'">:</font></td>
    <td><input type="password" name="password" size="18" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Login" /></td>
  </tr>
</table>
</form>