<?php 
	$home_style =  $this->db->get_where('ui_settings',array('type' => 'home_page_style'))->row()->value;
?>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo translate('choose_home_page_style');?></h3>
        </div>
        <?php
            echo form_open(base_url() . 'index.php/admin/ui_settings/ui_home/update_home_page/', array(
                'class' => 'form-horizontal',
                'method' => 'post'
            ));
        ?>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-5">
                    <?php
                        $style = array(1,2);
                        foreach($style as $value){
                    ?>
                        <div class="cc-selector col-sm-2">
                            <input type="radio" id="home_<?php echo $value; ?>" value="<?php echo $value; ?>" name="home_page" <?php if($home_style == $value){ echo 'checked'; } ?> >
                            <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; height:200px;" for="home_<?php echo $value; ?>">
                                    <img src="<?php echo base_url() ?>uploads/home_pages/<?php echo 'home_'.$value.'.jpg' ?>" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo 'home_style_'.$value; ?>" />
                                   
                            </label>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                    <div class="col-sm-7">
                    	<div class="img_show">
                    		<img class="img-responsive" src="" id="img_show"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <span class="btn btn-info submitter" data-ing='<?php echo translate('updating..'); ?>' data-msg='<?php echo translate('home_page_updated!'); ?>' onClick="check_style()">
                    <?php echo translate('update_home_page');?>
                </span>
            </div>       
        </form>
    </div>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo translate('change_home_page_items');?></h3>
        </div>
        <div id="home_item_set">
            
        </div>     
    </div>
<script>
$(document).ready(function() {
	check_style();
});
$(".drinkcard-cc").click(function(){
	$("#img_show").hide('slow');
	var img = $(this).find('img').attr('src');
	$("#img_show").attr("src", img);
	$("#img_show").show('slow');
});
function check_style(){
	var style=$('input[name="home_page"]:checked').val();
	var img=$('input[name="home_page"]:checked').closest(".cc-selector").find('img').attr('src');
	$("#img_show").attr("src", img);
	$("#home_item_set").load("<?php echo base_url()?>index.php/admin/home_item_change/"+style);
}
</script>
<style>
.horizontal-tab{
    margin:15px;
}
.horizontal-tab .nav-tabs{
    border: 0;
	display:block !important;
	width:100%;
}
.horizontal-tab .nav-tabs li{
    float:left;
}
.horizontal-tab .nav-tabs>li:not(.active) a:hover {
    border-right-color: #458fd2 !important;
}
.horizontal-tab .tab-content{
    display:block !important;
}
.img_show{
	position:relative;
	height:400px;
	overflow:auto;
}
.img_show::-webkit-scrollbar{
    width: 3px;
	background: #737373;
}
.img_show::-webkit-scrollbar-thumb{
    background: #fff;
}
.img_show::-webkit-scrollbar{
    width: 3px;
	background: #737373;
}
.img_show::-webkit-scrollbar-thumb{
    background: #fff;
}
</style>
