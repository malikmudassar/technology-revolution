<!-- BREADCRUMBS -->
<section class="page-section" style="padding:0px">
    <div class="">
        <!-- HEADER -->
        <div class="header header-logo-left" style="border-bottom:none;">
            <div class="header-wrapper"  style="padding: 15px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="">
                                	<img class="img-responsive" src="<?php echo base_url(); ?>uploads/vendor/logo_<?php echo $vendor_id; ?>.png" alt="Shop"/>
                                </a>
                            </div>
                            <!-- /Logo -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <!-- Header shopping cart -->
                            <div class="header-cart" style="padding: 10px 0px;">
                                [<?php echo $this->crud_model->get_type_name_by_id('vendor',$vendor_id,'company');?>]
                            </div>
                            <!-- Header shopping cart -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-wrapper">
                <div class="container">
                    <!-- Navigation -->
                    <nav class="navigation closed clearfix">
                        <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                        <ul class="nav sf-menu">
                            <li <?php if($content=='home'){ ?>class="active"<?php } ?> >
                            	<a href="<?php echo base_url(); ?>index.php/home/vendor_profile/<?php echo $vendor_id;?>">
									<?php echo translate('about_vendor');?>
                                </a>
                            </li>
                            <li <?php if($content=='product_list'){ ?>class="active"<?php } ?>>
                            	<a href="<?php echo base_url(); ?>index.php/home/vendor_category/<?php echo $vendor_id;?>/0">
									<?php echo translate('all_products');?>
                                </a>
                            </li>
                            <li <?php if($content=='featured'){ ?>class="active"<?php } ?>>
                                <a href="<?php echo base_url(); ?>index.php/home/vendor_featured/<?php echo $vendor_id;?>">
									<?php echo translate('featured_products');?>
                                </a>
                            </li>
                            <li <?php if($content=='contact'){ ?>class="active"<?php } ?>>
                                <a href="<?php echo base_url();?>index.php/home/store_locator/<?php echo $this->crud_model->get_type_name_by_id('vendor',$vendor_id,'display_name');?>" target="_blank">
									<?php echo translate('find_location');?>
                               	</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Navigation -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->             
    </div>
</section>
<!-- /BREADCRUMBS -->