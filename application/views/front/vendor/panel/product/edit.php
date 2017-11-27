
                        <div class="row margin-top-0">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                	<div class="information-title margin-bottom-0">
                                    	<?php echo translate('edit_product_info');?></div>
                                    <form action="#" class="form-login">
                                        <div class="col-md-12">
                                            <div class="tabs-wrapper content-tabs">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                    	<a href="#tab1" data-toggle="tab">
                                                        	<?php echo translate('product_details');?>
                                                       	</a>
                                                    </li>
                                                    <li>
                                                    	<a href="#tab2" data-toggle="tab">
                                                        	<?php echo translate('business_details');?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                    	<a href="#tab3" data-toggle="tab">
                                                        	<?php echo translate('customer_choice_options');?>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tab1">
                                                        <div class="row product-form">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('product_title:');?></label>
                                                                <div class="col-md-9 col-sm-9 col-xs-9">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('product_title:');?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('categoty:');?></label>
                                                                <div class="col-md-9 col-sm-9 col-xs-9">
                                                                    <select class="form-control">
                                                                        <option disabled selected><?php echo translate('select...');?></option>
                                                                        <option value="digital">Categoty1</option>
                                                                        <option value="others">Categoty2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('unit:');?></label>
                                                                <div class="col-md-9 col-sm-9 col-xs-9">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('unit:');?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('tags:');?></label>
                                                                <div class="col-md-9 col-sm-9 col-xs-9">
                                                                    <input class="form-control" data-role="tagsinput" type="text" placeholder="<?php echo translate('tags:');?>">
                                                                </div>
                                                            </div>
                                                            <div class="multi_image">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('image:');?></label>
                                                                    <div class="col-md-9 col-sm-9 col-xs-9 file">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 col-xs-12">
                                                                            <img class="img-responsive img-box blah"  src="<?php echo base_url(); ?>uploads/others/photo_default.png"  >
                                                                        </div>
                                                                        <input class="form-control imgInp" type="file" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <button type="button" class="btn btn-circle-add pull-right add_more_imageInp"><i class="glyphicon glyphicon-plus"></i></button>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('description:');?></label>
                                                                <div class="col-md-9 col-sm-9 col-xs-9" style="margin-bottom:20px;">
                                                                    <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('next');?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2">
                                                        <div class="row product-form">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('sale_pice:');?></label>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('sale_pice:');?>">
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    $ /
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('purchase_price:');?></label>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('purchase_price:');?>">
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    $ /
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('shipping_cost:');?></label>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('shipping_cost:');?>">
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    $ /
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('product_tax:');?></label>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('product_tax:');?>">
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    <select class="form-control">
                                                                        <option value="digital">%</option>
                                                                        <option value="others">$</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('product_discount:');?></label>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <input class="form-control" type="text" placeholder="<?php echo translate('product_discount:');?>">
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                                    <select class="form-control">
                                                                        <option value="digital">%</option>
                                                                        <option value="others">$</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('next');?></button>
                                                                <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('previous');?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3">
                                                        <div class="row product-form">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('color:');?></label>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <input class="form-control" type="color" name="color[t_0]">
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                                    <button type="button" class="btn btn-theme-sm  btn-more pull-right add_more_color"><i class="glyphicon glyphicon-plus"></i> <?php echo translate('add_more_color');?></button>
                                                                </div>
                                                            </div>
                                                            <div class="more_color">
                                                                
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-9 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                                                <h5><?php echo translate('If_you_need_more_choice_options_for_customers Of_this_product_,please_click_here.');?></h5>
                                                            </div>
                                                            <div class="more_field">
                                                
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                                <button type="button" class="btn btn_cus btn-theme-sm btn-more pull-right add_more_field"><i class="glyphicon glyphicon-plus"></i> <?php echo translate('add_customer_input_options');?> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <!-- digital && others product edit 2 rokom hobe -->
                        
                        <div id="imageInp_dummy" style="display:none;">
                            <div class="rem">
                                <div class="col-md-12 col-sm-12 col-xs-12 input">
                                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('image:')?></label></label>
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
                                        <input class="form-control" type="nm" name="nm[{{i}}]" placeholder="<?php echo translate('name');?>">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <input class="form-control" type="desc" name="desc[{{i}}]" placeholder="<?php echo translate('description');?>">
                                    </div>
                                    <button type="button" class="btn btn-circle-remove pull-right removal" id="add_more_field"><i class="glyphicon glyphicon-remove"></i></button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="field_count" value="0" />
                        
                        <div id="color_dummy" style="display:none;">
                            <div class="rem">
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                        <input class="form-control" type="color" name="color[{{i}}]">
                                    </div>
                                    <button type="button" class="btn btn-circle-remove pull-left removal"><i class="glyphicon glyphicon-remove"></i></button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="color_count" value="1" />
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
	$('.add_more_imageInp').click(function(){
		var imageInp_html = $('#imageInp_dummy').html();
		var l = $('#img_count').val();
		ln = parseInt(Number(l)+1);
		l = 't_'+ln;
		imageInp_html = imageInp_html.replace(/{{i}}/g, l);
		$(this).closest('.product-form').find('.multi_image').append(imageInp_html);
		$('#img_count').val(ln);
	});
	/*---for add_more_field---*/
	$('.add_more_field').click(function(){
		var more_field_html = $('#field_dummy').html();
		var l = $('#field_count').val();
		ln = parseInt(Number(l)+1);
		l = 't_'+ln;
		more_field_html = more_field_html.replace(/{{i}}/g, l);
		$(this).closest('.product-form').find('.more_field').append(more_field_html);
		$('#field_count').val(ln);
	});
	
	$('.add_more_color').click(function(){
		var more_color_html = $('#color_dummy').html();
		var l = $('#color_count').val();
		ln = parseInt(Number(l)+1);
		l = 't_'+ln;
		more_color_html = more_color_html.replace(/{{i}}/g, l);
		$(this).closest('.product-form').find('.more_color').append(more_color_html);
		$('#color_count').val(ln);
	});
	
	$('.product-form').on('click','.removal',function(){
		$(this).closest('.rem').remove();
	});
	$(document).ready(function() {
		set_summernote();
	});
</script>
