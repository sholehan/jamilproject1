<h1>Edit Siswa</h1>
<form id="siswa" name="siswa" method="post" action="">
<table width="499" border="0" cellpadding="1">
  <tr>
    <td width="154">Name</td>
    <td width="10">:</td>
    <td width="287">
    <?php echo form_error('nama'); ?>
    <input type="text" name="nama" id="nama" value="<?php echo $row->nama; ?>" />
    </td>
  </tr>
    <tr>
    <td>Username</td>
    <td>:</td>
    <td>
    <?php echo form_error('username'); ?>
    <input type="text" name="username" id="username" value="<?php echo  $row->username; ?>"/>
    </td>
  </tr>
  <tr>
    <td>User Display</td>
    <td>:</td>
    <td>
    <?php echo form_error('user_display'); ?>
    <input type="text" name="user_display" id="user_display" value="<?php echo  $row->user_display; ?>"/>
    </td>
  </tr>
<tr>
  <td>Password</td>
    <td>:</td>
    <td>
    <?php echo form_error('password'); ?>
    <input type="text" name="password" id="password" value="<?php echo  $row->password; ?>"/>
    </td>
  </tr>
<tr>
  <td>Email</td>
    <td>:</td>
    <td>
    <?php echo form_error('email'); ?>
    <input type="text" name="email" id="email" value="<?php echo  $row->email; ?>"/>
    </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>:</td>
    <td>
     <?php echo form_error('alamat'); ?>
    <textarea name="alamat" id="alamat" cols="45" rows="5"><?php echo $row->alamat; ?></textarea>
    </td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" /></td>
  </tr>
</table>

</form>
<p>&nbsp;</p>
