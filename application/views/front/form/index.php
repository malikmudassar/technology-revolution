
<section class="page-section">
    <div class="container">
    	<div class="row margin-top-0">
            <div class="col-md-9 col-sm-9 col-sm-9 col-xs-9">
                <div class="thumbnail list_box_style1 no-padding">
                        <div class="row product-single">
                            <div class="col-md-4">
                                <div class="media">
                                    <div class="media-link">
                                    	<img class="img-responsive" src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>" alt=""/>
                                        <span onclick="quick_view('<?php echo $this->crud_model->product_link($product_id,'quick'); ?>')">
                                            <span class="icon-view">
                                                <strong><i class="fa fa-eye"></i></strong>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 padding-l-0-md">
                                <div class="caption">
                                    <h4 class="caption-title">
                                        <a href="<?php echo $this->crud_model->product_link($product_id); ?>">
                                            <?php echo $title; ?>
                                        </a>
                                    </h4>
                                    <div class="product-info">
                                        <p>
                                            <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>">
                                                <?php echo $this->crud_model->get_type_name_by_id('category',$category,'category_name');?>
                                            </a>
                                        </p>
                                        ||
                                        <p>
                                            <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>/<?php echo $sub_category; ?>">
                                                <?php echo $this->crud_model->get_type_name_by_id('sub_category',$sub_category,'sub_category_name');?>
                                            </a>
                                        </p>
                                        ||
                                        <p>
                                            <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>/<?php echo $sub_category; ?>-<?php echo $brand; ?>">
                                            <?php echo $this->crud_model->get_type_name_by_id('brand',$brand,'name');?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="added_by">
                                        <?php echo translate('sold_by_:');?>
                                        <p>
                                            <?php echo $this->crud_model->product_by($product_id,'with_link');?>
                                        </p>
                                    </div>
                                    <hr class="page-divider"/>
                                    <div class="product-price">
                                        <?php echo translate('price_:');?>
                                        <?php if($discount > 0){ ?> 
                                            <ins>
                                                <?php echo currency($this->crud_model->get_product_price($product_id)); ?>
                                                <unit><?php echo ' /'.$unit;?></unit>
                                            </ins> 
                                            <del><?php echo currency($sale_price); ?></del>
                                            <span class="label label-success">
                                            <?php 
                                                echo translate('discount:_').$discount;
                                                if($discount_type =='percent'){
                                                    echo '%';
                                                }
                                                else{
                                                    echo currency();
                                                }
                                            ?>
                                            </span>
                                        <?php } else { ?>
                                            <ins>
                                                <?php echo currency($sale_price); ?>
                                                <unit><?php echo ' /'.$unit;?></unit>
                                            </ins> 
                                        <?php }?>
                                    </div>
                                    <?php
                                        if($current_stock > 0){
                                    ?>
                                    <div class="stock">
                                        <?php echo $current_stock.' '.$unit.translate('_available');?>
                                    </div>
                                    <?php
                                        }else{
                                    ?>
                                    <div class="out_of_stock">
                                        <?php echo translate('out_of_stock');?>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="buttons">
                                        <span class="btn btn-add-to cart" onclick="to_cart(<?php echo $product_id; ?>)">
                                            <i class="fa fa-shopping-cart"></i>
                                            <?php if($this->crud_model->is_added_to_cart($product_id)){ 
                                                echo translate('added_to_cart');  
                                                } else { 
                                                echo translate('add_to_cart');  
                                                } 
                                            ?>
                                        </span>
                                        <?php 
                                            $wish = $this->crud_model->is_wished($product_id); 
                                        ?>
                                        <span class="btn btn-add-to <?php if($wish == 'yes'){ echo 'wished';} else{ echo 'wishlist';} ?>" onclick="to_wishlist(<?php echo $product_id; ?>)">
                                            <i class="fa fa-heart"></i>
                                            <?php if($wish == 'yes'){ 
                                                echo translate('_added_to_wishlist'); 
                                                } else { 
                                                echo translate('_add_to_wishlist');
                                                } 
                                            ?>
                                        </span>
                                        <?php 
                                            $compare = $this->crud_model->is_compared($product_id); 
                                        ?>
                                        <span class="btn btn-add-to compare btn_compare" onclick="do_compare(<?php echo $product_id; ?>)">
                                            <i class="fa fa-exchange"></i>
                                            <?php if($compare == 'yes'){ 
                                                echo translate('_compared'); 
                                                } else { 
                                                echo translate('_compare');
                                                } 
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        	</div>
        </div>
    </div>
</section>

<!-- PAGE -->
<section class="page-section">
    <div class="container">
        <div class="row margin-top-0">
            <div class="col-md-12 col-sm-12 col-xs-12 col-sm-12 col-xs-12">
                <form action="#" class="form-login">
                    <div class="row product-form">
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('title:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input class="form-control" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('email:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input class="form-control" type="email" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('password:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input class="form-control" type="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('category:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <select class="form-control">
                                    <option disabled selected><?php echo translate('select...');?></option>
                                    <option value="digital"><?php echo translate('digital');?></option>
                                    <option value="others"><?php echo translate('others');?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('tags:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input class="form-control" data-role="tagsinput" type="text" placeholder="">
                            </div>
                        </div>
                        <div id="multi_image">
                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                <label class="col-md-3 col-sm-3 col-xs-3">
                                    <?php echo translate('image:');?>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-9 file">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-xs-12">
                                        <img class="img-responsive img-box blah"  src="<?php echo base_url(); ?>uploads/others/photo_default.png"  >
                                    </div>
                                    <input class="form-control imgInp" type="file" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button type="button" class="btn btn-circle-add pull-right" id="add_more_imageInp"><i class="glyphicon glyphicon-plus"></i></button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('date:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9 file">
                                <input class="form-control" type="date" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3" for="demo-hor-11">
                                <?php echo translate('switchery');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input class='aiz_switchery' type="checkbox" name="download" value="ok" />
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                                <?php echo translate('description:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9" style="margin-bottom:20px;">
                                <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
                            </div>
                        </div>
                        <div id="more_field">
                            
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <button type="button" class="btn btn_cus btn-theme-sm btn-default btn-more pull-right" id="add_more_field">
                                <i class="glyphicon glyphicon-plus"></i>
                                <?php echo translate('add_more_field');?>
                            </button>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                            <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right">
                                <?php echo translate('upload');?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
                <!-- PAGE END-->
                
                <div id="imageInp_dummy" style="display:none;">
                    <div class="rem">
                    	<div class="col-md-12 col-sm-12 col-xs-12 input">
                            <label class="col-md-3 col-sm-3 col-xs-3">
                            	<?php echo translate('image:');?>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-9 file">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-xs-12">
                                    <img class="img-responsive img-box blah"  src="<?php echo base_url(); ?>uploads/others/photo_default.png"  >
                                </div>
                                <input class="form-control imgInp" name="img[{{i}}]" type="file" placeholder="">
                            </div>
                            <button type="button" class="btn btn-circle-remove pull-right removal" id="add_more_imageInp"><i class="glyphicon glyphicon-remove"></i></button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="img_count" value="1" />
                
                <div id="field_dummy" style="display:none;">
                    <div class="rem">
                    	<div class="col-md-12 col-sm-12 col-xs-12 input" style="margin-bottom:20px;">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input class="form-control" type="nm" name="nm[{{i}}]" placeholder="Name">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input class="form-control" type="desc" name="desc[{{i}}]" placeholder="Description">
                            </div>
                            <button type="button" class="btn btn-circle-remove pull-right removal"><i class="glyphicon glyphicon-remove"></i></button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="field_count" value="0" />
<script>
	function readURL_all(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
			var parent = $(input).closest('.file');
            reader.onload = function (e) {
                parent.find('.wrap').hide('fast');
                parent.find('.blah').attr('src', e.target.result);
                parent.find('.wrap').show('fast');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(".product-form").on('change','.imgInp',function(){
        readURL_all(this);
    });
	
	/*---for add more Image---*/
	$('#add_more_imageInp').click(function(){
		var imageInp_html = $('#imageInp_dummy').html();
		var l = $('#img_count').val();
		ln = parseInt(Number(l)+1);
		l = 't_'+ln;
		imageInp_html = imageInp_html.replace(/{{i}}/g, l);
		$('#multi_image').append(imageInp_html);
		$('#img_count').val(ln);
	});
	/*---for add_more_field---*/
	$('#add_more_field').click(function(){
		var more_field_html = $('#field_dummy').html();
		var l = $('#field_count').val();
		ln = parseInt(Number(l)+1);
		l = 't_'+ln;
		more_field_html = more_field_html.replace(/{{i}}/g, l);
		$('#more_field').append(more_field_html);
		$('#field_count').val(ln);
	});
	$('.product-form').on('click','.removal',function(){
		$(this).closest('.rem').remove();
	});
	
	$(document).ready(function() {
		set_switchery();
		function set_switchery(){
			$(".aiz_switchery").each(function(){
				new Switchery($(this).get(0), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
			});
		}
	});
</script>