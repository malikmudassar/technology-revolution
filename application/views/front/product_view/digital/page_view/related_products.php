<div class="recommendation" style="margin-bottom:20px;">
    <div class="row">
        <h3 class="title" style="font-size:16px;">
            <?php echo translate('related_products');?>
        </h3>
        <?php
            $this->db->where('product_id!=',$row['product_id']);
            $this->db->where('category=',$row['product_id']);
            $recommends= $this->db->get('product',3)->result_array();
            foreach($recommends as $rec){
        ?>
        <div class="col-md-4">
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