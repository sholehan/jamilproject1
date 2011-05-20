<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Parkir OnLine <?php if(isset($title)): echo $title;else: echo 'SISTEM KRS'; endif; ?></title>
</head>

<body>
<a href="<?php echo base_url()?>matakuliah.php"><font color="#0000FF" face="Comic Sans MS">Home</font>&nbsp;</a>
<a href="<?php echo base_url()?>mahasiswa.php"><font color="#FF0000" face="Comic Sans MS">Pendaftaran</font>&nbsp;</a>
<a href="<?php echo base_url()?>kuliah.php"><font color="#00FF00"face="Comic Sans MS">Pengambilaan</font>&nbsp;</a>
<?php $this->load->view(indexLogout);?>
</body>
</html>