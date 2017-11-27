<!-- PAGE -->
<section class="page-section special-products">
    <div class="container">
        <div class="row">
            <div class="col-md-4 product-list">
            	<h4 class="special-products-title">
                    <span>
                        <?php echo translate('latest_products');?>
                    </span>
                </h4>
            	<?php
					$this->db->limit(3);
					$this->db->order_by("product_id", "desc");
					$latest=$this->db->get('product')->result_array();
					foreach($latest as $row){
				?>
                <div class="product-box-sm">
                    <div class="row">
                        <div class="col-md-4" style="max-height:110px; overflow:hidden;">
                            <img class="media-object img-responsive pull-left" style="width:100%;" src="<?php echo $this->crud_model->file_view('product',$row['product_id'],'100','','thumb','src','multi','one');?>" alt="">
                        </div>
                        <div class="col-md-8 media-body">
                            <div class="inro-section">
                                <h4 class="title">
                                    <a href="<?php echo $this->crud_model->product_link($row['product_id']); ?>">
                                    <?php echo $row['title']; ?>
                                    </a>
                                </h4>
                                <p>
                                    <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category']; ?>">
                                    <?php echo $this->crud_model->get_type_name_by_id('category',$row['category'],'category_name'); ?>
                                    </a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="price pull-left">
                                        <ins>
                                            <?php echo currency($this->crud_model->get_product_price($row['product_id'])); ?>
                                        </ins>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="buttons">
                                        <span class="btn-icon wishlist pull-right" onclick="to_wishlist(<?php echo $row['product_id']; ?>)" data-original-title="<?php echo translate('add_to_wishlist');?>" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="btn-icon pull-right" onclick="to_cart(<?php echo $row['product_id']; ?>)" data-original-title="<?php echo translate('add_to_cart');?>" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					}
				?>
            </div>
            <div class="col-md-4 product-list">
            	<h4 class="special-products-title">
                    <span>
                        <?php echo translate('recently_viewed');?>
                    </span>
                </h4>
            	<?php
					$this->db->limit(3);
					$this->db->order_by("number_of_view", "desc");
					$most_viewed=$this->db->get('product')->result_array();
					foreach($most_viewed as $row){
				?>
                <div class="product-box-sm">
                    <div class="row">
                        <div class="col-md-4" style="max-height:110px; overflow:hidden;">
                            <img class="media-object img-responsive pull-left" style="width:100%;" src="<?php echo $this->crud_model->file_view('product',$row['product_id'],'100','','thumb','src','multi','one');?>" alt="">
                        </div>
                        <div class="col-md-8 media-body">
                            <div class="inro-section">
                                <h4 class="title">
                                    <a href="<?php echo $this->crud_model->product_link($row['product_id']); ?>">
                                    <?php echo $row['title']; ?>
                                    </a>
                                </h4>
                                <p>
                                    <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category']; ?>">
                                    <?php echo $this->crud_model->get_type_name_by_id('category',$row['category'],'category_name'); ?>
                                    </a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="price pull-left">
                                        <ins>
                                            <?php echo currency($this->crud_model->get_product_price($row['product_id'])); ?>
                                        </ins>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="buttons">
                                        <span class="btn-icon wishlist pull-right" onclick="to_wishlist(<?php echo $row['product_id']; ?>)" data-original-title="<?php echo translate('add_to_wishlist');?>" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="btn-icon pull-right" onclick="to_cart(<?php echo $row['product_id']; ?>)" data-original-title="<?php echo translate('add_to_cart');?>" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					}
				?>
            </div>
            <div class="col-md-4 product-list">
            	<h4 class="special-products-title">
                    <span>
                        <?php echo translate('most_viewed');?>
                    </span>
                </h4>
            	<?php
					$this->db->limit(3);
					$this->db->order_by("number_of_view", "desc");
					$most_viewed=$this->db->get('product')->result_array();
					foreach($most_viewed as $row){
				?>
                <div class="product-box-sm">
                    <div class="row">
                        <div class="col-md-4" style="max-height:110px; overflow:hidden;">
                            <img class="media-object img-responsive pull-left" style="width:100%;" src="<?php echo $this->crud_model->file_view('product',$row['product_id'],'100','','thumb','src','multi','one');?>" alt="">
                        </div>
                        <div class="col-md-8 media-body">
                            <div class="inro-section">
                                <h4 class="title">
                                    <a href="<?php echo $this->crud_model->product_link($row['product_id']); ?>">
                                    <?php echo $row['title']; ?>
                                    </a>
                                </h4>
                                <p>
                                    <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category']; ?>">
                                    <?php echo $this->crud_model->get_type_name_by_id('category',$row['category'],'category_name'); ?>
                                    </a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="price pull-left">
                                        <ins>
                                            <?php echo currency($this->crud_model->get_product_price($row['product_id'])); ?>
                                        </ins>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="buttons">
                                        <span class="btn-icon wishlist pull-right" onclick="to_wishlist(<?php echo $row['product_id']; ?>)" data-original-title="<?php echo translate('add_to_wishlist');?>" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-heart"></i>
                                        </span>
                                        <span class="btn-icon pull-right" onclick="to_cart(<?php echo $row['product_id']; ?>)" data-original-title="<?php echo translate('add_to_cart');?>" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					}
				?>
            </div>
        </div>
    </div>
</section>
<!-- /PAGE -->

<script>
$(document).ready(function(){
	setTimeout(function(){
		set_special_product_box();
	},500);
});

function set_special_product_box(){
	var max_height = 0;
	$('.product-box-sm').each(function(){
        var current_height= parseInt($(this).css('height'));
		if(current_height >= max_height){
			max_height = current_height;
		}
    });
	$('.product-box-sm').css('height',max_height);
	
	var max_title=0;
	$('.special-products .inro-section').each(function(){
        var current_height= parseInt($(this).css('height'));
		if(current_height >= max_title){
			max_title = current_height;
		}
    });
	$('.special-products .inro-section').css('height',max_title);
}
</script>