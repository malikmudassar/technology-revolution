            <div class="row margin-top-0">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="information-title margin-bottom-0">
							<?php echo translate('manage_vendor_profile')?>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tabs-wrapper content-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                    	<a href="#tab1" data-toggle="tab">
                                        	<?php echo translate('manage_details')?>
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#tab2" data-toggle="tab">
                                        	<?php echo translate('change_password')?>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <div class="row margin-top-0">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <form action="#" class="form-login">
                                                    <div class="row product-form">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('name:')?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control" placeholder="<?php echo translate('name')?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('company:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control" placeholder="<?php echo translate('company')?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('display_name');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control" placeholder="<?php echo translate('display_name');?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('email:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="email" class="form-control" placeholder="xy@z.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('phone:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="tel" class="form-control" placeholder="01XXXXXXXXX">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('address_line_1:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control" placeholder="<?php echo translate('address_line_1:');?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
																<?php echo translate('address_line_2:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control" placeholder="<?php echo translate('address_line_2:');?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <div class="col-md-9 col-sm-9 col-xs-9 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                                                <img class="img-responsive" style="margin-bottom:20px;" src="<?php echo base_url(); ?>template/front/img/google-maps.png" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-3">
                                                            	<?php echo translate('about:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-9" style="margin-bottom:20px;">
                                                                <textarea maxlength="5000" rows="10" class="form-control" name="comment"  style="height: 138px;" placeholder="About"></textarea>
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
                                            <div class="col-sm-12">
                                                <form action="#" class="form-login">
                                                    <div class="row product-form">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-12">
                                                            	<?php echo translate('current_password:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-12">
                                                            	<?php echo translate('new_password*:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input">
                                                            <label class="col-md-3 col-sm-3 col-xs-12">
                                                            	<?php echo translate('confirm_password:');?>
                                                            </label>
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" class="form-control" placeholder="">
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