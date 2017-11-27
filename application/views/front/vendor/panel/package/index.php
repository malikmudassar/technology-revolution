					<div class="row margin-top-0">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <form action="#" class="form-login">
                                <div class="row product-form">
                                    <div class="information-title">
                                    	<?php echo translate('upgrade_package');?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('products:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control">
                                                <option disabled selected><?php echo translate('select...');?></option>
                                                <option value="">Default</option>
                                                <option value="">Gold</option>
                                                <option value="">Platinum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                    	<label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('details:');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="table-responsive">
                                            	<table class="table table-striped">
                                                	<tbody>
                                                    	<tr>
                                                        	<td><?php echo translate('title');?></td>
                                                            <td><?php echo translate('default');?></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><?php echo translate('price');?></td>
                                                            <td><?php echo translate('free');?></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><?php echo translate('timespan');?></td>
                                                            <td><?php echo translate('lifetime');?></td>
                                                        </tr>
                                                        <tr>
                                                        	<td><?php echo translate('maximum_product');?></td>
                                                            <td>5</td>
                                                        </tr>
                                                   	</tbody>
                                            	</table>
                                        	</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3">
                                        	<?php echo translate('payment_method');?>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control">
                                                <option disabled selected><?php echo translate('select...');?></option>
                                                <option value="">Paypal</option>
                                                <option value="">Stripe</option>
                                                <option value="">Cash</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('save');?></button>
                                    </div>
                                </div>
                        	</form>
                    	</div>
                   	</div>