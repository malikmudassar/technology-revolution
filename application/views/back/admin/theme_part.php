<div class="panel">
	<?php 
        $header_color =  $this->db->get_where('ui_settings',array('type' => 'header_color'))->row()->value;
    ?>
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo translate('choose_theme');?></h3>
    </div>
    <?php
        echo form_open(base_url() . 'index.php/admin/general_settings/color', array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => '',
            'enctype' => 'multipart/form-data'
        ));
    ?>
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <?php
                        $colors = array(
                                    'blue-1'=>'#5687bf',
                                    'blue-2'=>'#22a7f0',
                                    'purple-1'=>'#470467',
                                    'purple-2'=>'#685ab1',
                                    'red-1'=>'#dc143c',
                                    'red-2'=>'#d80018',
                                    'green-1'=>'#00b16a',
                                    'green-2'=>'#89c144',
                                    'yellow-1'=>'#f1be03',
                                    'yellow-2'=>'#e3c552',
                                    'orange-1'=>'#e47911',
                                    'orange-2'=>'#e48f4c',
                                    'cumin' =>'#b8a279',
                                    'gray'=>'#3c3c3c',
                                    'pink'=>'#ec005f',
                                    'gold'=>'#a0913d'
                                );
                                
                        foreach($colors as $n => $color){
                    ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="delete-div-wrap cc-selector col-sm-12" style="border:0px;">
                            <input id="theme_color_<?php echo $n; ?>" type="radio" value="<?php echo $n; ?>" name="header_color" <?php if($header_color == $n){ echo 'checked'; } ?> >
                            <label class="tr-bg drinkcard-cc" for="theme_color_<?php echo $n; ?>" 
                                style="margin-bottom:0px;  height:200px; width:100%;
                                    background:<?php echo $color; ?>">
                            </label>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <span class="btn btn-success btn-labeled fa fa-check submitter"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('theme_updated!'); ?>'>
                <?php echo translate('save');?>
            </span>
        </div>
    </form>
</div>