<?php 
	include 'header.php';
?>
<!-- PAGE WITH SIDEBAR -->
<section class="page-section with-sidebar">
	<div class="container">
		<div class="row">
			<!-- SIDEBAR -->
			<?php 
				include 'navigation.php';
			?>
			<!-- /SIDEBAR -->
			<!-- CONTENT -->
			<div class="col-md-9 content" id="content">
				<div id="panel-content">
                </div>
			</div>
			<!-- /CONTENT -->

		</div>
	</div>
</section>
<!-- /PAGE WITH SIDEBAR -->
<script>
	function get_dashboard(){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_dashboard/");
	}
	function get_product(type){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_product/"+type);
	}
	function get_stock(type){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_stock/"+type);
	}
	function get_sale(type){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_sale/"+type);
	}
	function get_coupon(type){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_coupon/"+type);
	}
	function get_settings(){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_settings/");
	}
	function get_payment_method(){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_payment_method/");
	}
	function get_package(){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_package/");
	}
	function get_manage_profile(){	
		$("#panel-content").load("<?php echo base_url()?>index.php/home/vendor_manage_profile/");
	}
	$(document).ready(function(){
		get_dashboard();
    });
</script>