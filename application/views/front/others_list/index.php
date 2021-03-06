<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h2 class="section-title section-title-lg">
                <span>
                    <?php echo translate($product_type);?>  
                    <span class="thin"> <?php echo translate('products');?></span>
                </span>
            </h2>
         </div>
    </div>
</section>
<!-- /BREADCRUMBS -->
<!-- PAGE WITH SIDEBAR -->
<input type="hidden" value="<?php echo $product_type; ?>" id="type" />
<section class="page-section with-sidebar">
    <div class="container">
        <div class="row">
            <!-- SIDEBAR -->
            <?php 
                include 'sidebar.php';
            ?>
            <!-- /SIDEBAR -->
            <!-- CONTENT -->
            <div class="col-md-9 content" id="content">
                <!-- /shop-sorting -->
                <div id="page_content">
                
                </div>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->
<script>
	function product_by_type(type){	
		$("#page_content").load("<?php echo base_url()?>index.php/home/product_by_type/"+type);
	}
	$(document).ready(function(){
		var product_type=$('#type').val();
		product_by_type(product_type);
    });
</script>