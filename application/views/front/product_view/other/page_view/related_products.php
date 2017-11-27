<section class="page-section">
    <div class="container">
        <div class="row">
        	<div class="recommendation col-md-12">
            	<div class="row">
                    <h3 class="title">
                        <?php echo translate('related_products');?>
                    </h3>
                	<?php
						$this->db->limit(12);
						$this->db->where('product_id!=',$row['product_id']);
						$this->db->where('category=',$row['category']);
						//$this->db->where('discount>',0);
						$recommends= $this->db->get('product')->result_array();
						foreach($recommends as $rec){
					?>
                	<div class="col-md-2">
                        <div class="recommend_box_1">
                        	<a class="link" href="<?php echo $this->crud_model->product_link($rec['product_id']); ?>">
                                <div class="image-box">
                                    <img class="img-responsive" src="<?php echo $this->crud_model->file_view('product',$rec['product_id'],'','','thumb','src','multi','one'); ?>" alt="product"/>
                                </div>
                                <div class="price">
                                    <?php if($rec['discount'] > 0){ ?> 
                                        <ins>
                                            <?php echo currency($this->crud_model->get_product_price($rec['product_id'])); ?>
                                        </ins> 
                                        <del><?php echo currency($rec['sale_price']); ?></del>
                                    <?php 
                                    }
                                    else{
                                    ?>
                                    <ins>
                                        <?php echo currency($rec['sale_price']); ?>
                                    </ins>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
						}
					?>
                </div>
            </div>
        </div>
    </div>
</section>