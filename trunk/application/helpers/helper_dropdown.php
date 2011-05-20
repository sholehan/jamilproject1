<?php
/**
* function cart
* helper yang berfungsi untuk mengandle proses shoping cart
*/

/**
* function dropdown
* helper untuk handle semua form dropdown
*/
function userDropdown($selected=FALSE)
{
	$ci=& get_instance();
    //$ci->load->Model('Matkul_model');
    $res = $ci->db->get('list',FALSE);
	$ci->load->get('tb_dropd');
	$data['id']=$this->db->get('tb_dropd')
	$this->db->where('nama_drop',$id);
    $output = "<select id='nama_drop' name='nama_drop' class='title'>";
		$output .= "<option value=''> - Pilih - </option>";
		foreach($res as $row):
		    if($selected):
		    	if($row["nama_drop"]==$selected):
					$output .= "<option value='".$row["nama_drop"]."' selected='selected'>".$row['nama_drop']."</option>";
				endif;
		endforeach;
	$output .= "</select>";
    return $output;
}
