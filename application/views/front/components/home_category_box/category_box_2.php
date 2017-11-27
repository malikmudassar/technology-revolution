<section class="page-section">
    <div class="container">
        <div class="row home_category_theme_1" style="border-top: 2px solid <?php echo $color_back;?>;">
        	<div class="col-md-4">
                <h2 class="category_title" style="background-color:<?php echo $color_back;?>;">
                    <span>
                    	<a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>" style="color:<?php echo $color_text;?>">
							<?php echo $this->crud_model->get_type_name_by_id('category',$category,'category_name'); ?>
                        </a>
                    </span>
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <article class="post-wrap" style="border-right: 2px solid <?php echo $color_back;?>;">
                            <div class="owl-carousel img-carousel">
                            <?php
								$i=0;
                                $this->db->order_by('sub_category_id', 'ASC');
                                $sub_categories = $this->db->get_where('sub_category',array('category'=>$category))->result_array();
								$all_brands= $this->crud_model->get_brands('category',$category);
								foreach($all_brands as $row){
									$brand=explode(':::',$row);
										if($i==0){
							?>
                                <div class="item">
                                    <div class="row">
										<?php
                                            }
                                        ?>
                                        <div class="col-md-12">
                                            <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>/0-<?php echo $brand[0]; ?>" class="brand-box">
                                                <img class="img-responsive brand-img" src="<?php echo base_url();?>uploads/brand_image/<?php echo $this->crud_model->get_type_name_by_id('brand',$brand[0],'logo'); ?>" alt=""/>
                                            </a>
                                        </div>
										<?php
                                            if($i==3){
                                        ?>
                                    </div>
                                </div>
                            <?php
									}
									if($i<3){
										$i++;
									}
									else{
										$i=0;
									}
                                }
                            ?>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <div class="list-items">
                            <ul>
                            <?php
                                $this->db->order_by('sub_category_id', 'ASC');
                                $sub_categories = $this->db->get_where('sub_category',array('category'=>$category))->result_array();
                                foreach($sub_categories as $row1){
                            ?>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/home/category/<?php echo $category;?>/<?php echo $row1['sub_category_id'];?>-0">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        <?php echo $row1['sub_category_name']; ?>
                                    </a>
                                </li>
                            <?php
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tabs-wrapper content-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade in active">
                            <div class="row">
                            	<div class="col-md-6 category">
                                	<div class="p-item p-item-type-zoom">
                                        <span class="p-item-hover">
                                            <div class="p-item-info">
                                                <div class="p-headline">
                                                    <span><?php echo $this->crud_model->get_type_name_by_id('category',$category,'category_name'); ?></span>
                                                    <div class="p-line"></div>
                                                    <div class="p-btn">
                                                        <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>" class="btn  btn-theme-transparent btn-theme-xs">Browse</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-mask"></div>
                                        </span>
                                        <div class="p-item-img">
                                        	<?php 
												if(file_exists('uploads/category_image/'.$this->crud_model->get_type_name_by_id('category',$category,'banner'))){
											?>
                                            <img src="<?php echo base_url();?>uploads/category_image/<?php echo $this->crud_model->get_type_name_by_id('category',$category,'banner'); ?>" class="img-responsive" alt=""/>
                                            <?php }else{?>
                                            <img class="img-responsive img-box" src="<?php echo base_url();?>uploads/others/photo_default.png" alt=""/>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                	<div class="row">
                                    	<?php
										foreach($sub_category as $row2){
										?>
                                        <div class="col-md-6 sub-category">
                                        	<div class="p-item p-item-type-zoom">
                                                <span class="p-item-hover" target="_blank">
                                                    <div class="p-item-info">
                                                        <div class="p-headline">
                                                        	<span><?php echo $this->crud_model->get_type_name_by_id('sub_category',$row2,'sub_category_name'); ?></span>
                                                            <div class="p-line"></div>
                                                            <div class="p-btn">
                                                            	<a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $category; ?>/<?php echo $row2; ?>-0" class="btn  btn-theme-transparent btn-theme-xs"><?php echo translate('browse'); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-mask"></div>
                                                </span>
                                                <div class="p-item-img">
                                                	<?php 
														if(file_exists('uploads/sub_category_image/'.$this->crud_model->get_type_name_by_id('sub_category',$row2,'banner'))){
													?>
                                                	<img class="img-responsive img-box" src="<?php echo base_url();?>uploads/sub_category_image/<?php echo $this->crud_model->get_type_name_by_id('sub_category',$row2,'banner'); ?>" alt=""/>
                                                    <?php }
													else{
													?>
                                                    <img class="img-responsive img-box" src="<?php echo base_url();?>uploads/others/photo_default.png" alt=""/>
													<?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
										}
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>