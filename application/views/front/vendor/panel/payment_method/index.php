					<div class="row margin-top-0">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form action="#" class="form-login">
                                <div class="row product-form">
                                    <div class="information-title">
                                    	<?php echo translate('manage_payment_receiving_settings');?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('cash_payment:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input class='aiz_switchery' type="checkbox" name="download" value="ok" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('paypal_payment:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input class='aiz_switchery' type="checkbox" name="download" value="ok" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('paypal_email:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('stripe_payment:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input class='aiz_switchery' type="checkbox" name="download" value="ok" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('stripe_secret_key:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('stripe_publishable_key:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#">
                                        	<?php echo translate('save');?>
                                        </button>
                                    </div>
                                </div>
                        	</form>
                    	</div>
                   	</div>
                    
<script>
	$(document).ready(function() {
		set_switchery();
		function set_switchery(){
			$(".aiz_switchery").each(function(){
				new Switchery($(this).get(0), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
			});
		}
	} );
</script>