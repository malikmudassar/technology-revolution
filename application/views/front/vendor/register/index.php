<section class="page-section color get_into">
    <div class="container">
        <div class="row margin-top-0">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="logo_top">
                    <a href="<?php echo base_url()?>">
                        <img class="img-responsive" src="<?php echo $this->crud_model->logo('home_bottom_logo'); ?>" alt="Shop" style="z-index:200">
                    </a>
                </div>
				<?php
                    echo form_open(base_url() . 'index.php/home/vendor_logup/add_info/', array(
                        'class' => 'form-login',
                        'method' => 'post',
                        'id' => 'sign_form'
                    ));
                ?>
                	<div class="row box_shape">
                        <div class="title">
                            <?php echo translate('vendor_registration');?>
                            <div class="option">
                            	<?php echo translate('already_a_vendor_?_click_to_');?>
                                <a href="<?php echo base_url(); ?>index.php/vendor" target="_blank" class="vendor_login_btn"> 
                                    <?php echo translate('login');?> <?php echo translate('as_vendor');?>
                                </a>!
                            	<?php echo translate('not_a_member_yet_?_click_to_');?>
                                <a href="<?php echo base_url(); ?>index.php/home/login_set/registration"> 
                                    <?php echo translate('sign_up');?> <?php echo translate('as_customer');?>
                                </a>!
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="name" type="text" placeholder="<?php echo translate('name');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="display_name" type="text" placeholder="<?php echo translate('display_name');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control emails required" name="email" type="email" placeholder="<?php echo translate('email');?>">
                            </div>
                            <div id='email_note'></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control pass1 required" type="password" name="password1" placeholder="<?php echo translate('password');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control pass2 required" type="password" name="password2" placeholder="<?php echo translate('confirm_password');?>">
                            </div>
                            <div id='pass_note'></div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="company" type="text" placeholder="<?php echo translate('company');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control required" name="address1" type="text" placeholder="<?php echo translate('address_line_1');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control required" name="address2" type="text" placeholder="<?php echo translate('address_line_2');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <span class="btn btn-theme-sm btn-block btn-theme-dark pull-right logup_btn" data-ing='<?php echo translate('registering..'); ?>' data-msg="">
                                <?php echo translate('register');?>
                            </span>
                        </div>
                    </div>
            	</form>
            </div>
        </div>
    </div>
</section>