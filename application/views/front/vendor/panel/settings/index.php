			<div class="row margin-top-0">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="information-title margin-bottom-0">
                        	<?php echo translate('manage_settings');?></div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tabs-wrapper content-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">
                                    	<?php echo translate('vendor_images');?></a></li>
                                    <li><a href="#tab2" data-toggle="tab">
                                    	<?php echo translate('social_media');?></a></li>
                                    <li><a href="#tab3" data-toggle="tab">
                                    	<?php echo translate('seo');?></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <div class="row margin-top-0">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <form action="#" class="form-login">
                                                    <div class="row product-form">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-2">
                                                            <?php echo translate('logo:');?></label>
                                                            <div class="col-md-9 col-sm-9 col-xs-10 file">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <img class="img-responsive img-box blah"  src="<?php echo base_url(); ?>uploads/others/photo_default.png" style="height:64px;width:auto;" >
                                                                </div>
                                                                <input class="form-control imgInp" type="file" placeholder="">
                                                                <p>(<?php echo translate('suggested width:height - 300px:300px*');?>)</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-2"><?php echo translate('banner:');?>  </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-10 file">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <img class="img-responsive img-box blah"  src="<?php echo base_url(); ?>uploads/others/parralax_vendor.jpg" style="height:128px;width:auto;" >
                                                                </div>
                                                                <input class="form-control imgInp" type="file" placeholder="">
                                                                <p>(<?php echo translate('suggested width:height - 1000px:500px*');?>)</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('save');?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row margin-top-0">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <form action="#" class="form-login">
                                                    <div class="row product-form">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 input-group">
                                                                <span class="input-group-addon fb_font">
                                                                    <i class="fa fa-facebook-square fa-lg"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 input-group">
                                                                <span class="input-group-addon fb_font">
                                                                    <i class="fa fa-google-plus-square fa-lg"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 input-group">
                                                                <span class="input-group-addon fb_font">
                                                                    <i class="fa fa-twitter-square fa-lg"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 input-group">
                                                                <span class="input-group-addon fb_font">
                                                                    <i class="fa fa-pinterest-square fa-lg"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 input-group">
                                                                <span class="input-group-addon fb_font">
                                                                    <i class="fa fa-skype fa-lg"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 input-group">
                                                                <span class="input-group-addon fb_font">
                                                                    <i class="fa fa-youtube-square fa-lg"></i>
                                                                </span>
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('save');?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <div class="row margin-top-0">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <form action="#" class="form-login">
                                                    <div class="row product-form">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('keywoeds:');?></label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('description:');?></label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9" style="margin-bottom:20px;">
                                                                <textarea maxlength="5000" rows="10" class="form-control" name="comment"  style="height: 138px;" placeholder="<?php echo translate('description');?>"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('save');?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
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
</script>