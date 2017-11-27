<!-- PAGE -->
<?php
$box_style=2;
$categories = json_decode($this->db->get_where('ui_settings',array('type'=>'home_categories'))->row()->value,true);
foreach($categories as $row){
	 echo $this->html_model->home_category_box($row, $box_style);
}
?>
<!-- /PAGE -->
