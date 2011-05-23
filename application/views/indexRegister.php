<h1> REGISTRASI</h1>

<form id="siswa" name="siswa" method="post" action="">
<table width="505" border="0">

	<tr>
    <td width="154">Nama *</td>
    <td width="20">:</td>
    <td width="287"><?php echo form_error('nama'); ?> <input type="text" name="nama" id="nama" value="<?php echo set_value('nama');?>" >	</td>
  </tr>
  <tr>
    <td width="154">Alamat *</td>
    <td width="20">:</td>
    <td width="287"><?php echo form_error('alamat'); ?> <textarea type="text" name="alamat" id="alamat" value=""><?php echo set_value('alamat');?></textarea>	</td>
  </tr>
	<tr>
    <td width="154">Username *</td>
    <td width="20">:</td>
    <td width="287"><?php echo form_error('username'); ?> <input type="text" name="username" id="username" value="<?php echo set_value('username');?>" >	</td>
  </tr>
  	<tr>
    <td width="154">User Display *</td>
    <td width="20">:</td>
    <td width="287"><?php echo form_error('user_display'); ?> <input type="text" name="user_display" id="user_display" value="<?php echo set_value('user_display');?>" >	</td>
  </tr>
  <tr>
    <td width="154">Password *</td>
    <td width="20">:</td>
    <td width="287"><?php echo form_error('password'); ?> <input type="password" name="password" id="password" value="<?php echo set_value('password');?>" >	</td>
  </tr>
  <tr>
    <td width="154">Email *</td>
    <td width="20">:</td>
    <td width="287"><?php echo form_error('email'); ?> <input type="text" name="email" id="kode" value="<?php echo set_value('email');?>" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="simpan"></td>
  </tr>
</table>
</form>
