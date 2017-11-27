
<aside class="col-md-3 sidebar" id="sidebar">
    <!-- widget shop categories -->
    <div class="widget shop-categories">
        <div class="widget-content">
            <ul>   
                <li class="title-for-list">
                    <span class="arrow search_cat search_cat_click all_category_set" style="display:none;" data-cat="0" 
                        data-min="<?php echo round($this->crud_model->get_range_lvl('product_id !=', '0', "min")); ?>" 
                           data-max="<?php echo round($this->crud_model->get_range_lvl('product_id !=', '0', "max")); ?>" 
                            data-brands="<?php echo join('-',$this->crud_model->get_brands('category','0')); ?>"
                                data-vendors="<?php echo join('-',$this->crud_model->get_vendors_by('category','0')); ?>"
                           >
                                    <i class="fa fa-angle-down"></i>
                    </span>
                    <a href="#" class="search_cat" data-cat="0"
                        data-min="<?php echo round($this->crud_model->get_range_lvl('product_id !=', '0', "min")); ?>" 
                           data-max="<?php echo round($this->crud_model->get_range_lvl('product_id !=', '0', "max")); ?>" >
                        <?php echo translate('all_products');?>
                    </a>
                </li>                                                 
                <?php
                    $all_category = $this->db->get('category')->result_array();
                    foreach($all_category as $row)
                    {
                ?>
                <li>
                    <span class="arrow search_cat search_cat_click" data-cat="<?php echo $row['category_id']; ?>" 
                        data-min="<?php echo round($this->crud_model->get_range_lvl('category', $row['category_id'], "min")); ?>" 
                           data-max="<?php echo round($this->crud_model->get_range_lvl('category', $row['category_id'], "max")); ?>" 
                            data-brands="<?php echo join('-',$this->crud_model->get_brands('category',$row['category_id'])); ?>"
                                data-vendors="<?php echo join('-',$this->crud_model->get_vendors_by('category',$row['category_id'])); ?>"
                           >
                                    <i class="fa fa-angle-down"></i>
                    </span>
                    <a href="#" class="search_cat" data-cat="<?php echo $row['category_id']; ?>"
                        data-min="<?php echo round($this->crud_model->get_range_lvl('category', $row['category_id'], "min")); ?>" 
                            data-max="<?php echo round($this->crud_model->get_range_lvl('category', $row['category_id'], "max")); ?>" >
                        <?php echo $row['category_name']; ?>
                    </a>
                    <ul class="children">
                        <?php
                            $sub_category = $this->db->get_where('sub_category',array('category'=>$row['category_id']))->result_array();
                            foreach($sub_category as $row1)
                            {
                        ?>
                        <li class="on_click_search checkbox">
                            <label for="sub_<?php echo $row1['sub_category_id']; ?>" onClick="check(this)" >
                                <input type="checkbox" name="jsut_show" id="sub_<?php echo $row1['sub_category_id']; ?>" class="search_sub" value="<?php echo $row1['sub_category_id']; ?>">
                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                <?php echo $row1['sub_category_name']; ?>
                                <span class="count">
                                   <?php echo $this->crud_model->is_publishable_count('sub_category',$row1['sub_category_id']); ?>
                                </span>
                            </label>
                        </li>
                        <?php  
                            }
                        ?>
                    </ul>
                </li>
                <?php  
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- /widget shop categories -->
    <!-- widget price filter -->
    <div class="widget widget-filter-price">
        <h4 class="widget-title">
            <?php echo translate('price');?>
        </h4>
        <div class="widget-content">
            <div id="slider-range"></div>
            <input type="text" id="amount" style="width:100%;text-align:center;"  />
        </div>
    </div>
    <!-- /widget price filter -->
    <br>
    <div class="row">
    <?php
		echo $this->html_model->widget('special_products');
	?>
    </div>
</aside>

<input type="hidden" id="univ_max" value="<?php echo $this->crud_model->get_range_lvl('product_id !=', '', "max"); ?>">
<input type="hidden" id="cur_cat" value="0">
<?php include 'search_script.php'; ?>
