				<div class="row margin-top-0">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#" class="form-login">
                            <div class="row product-form">
                                <div class="information-title"><?php echo translate('update_delivery_status');?></div>
                                <div class="col-md-12 col-sm-12 col-xs-12 input">
                                    <label class="col-md-3 col-sm-3 col-xs-3">
										<?php echo translate('payment_status:');?>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <select class="form-control">
                                            <option disabled selected><?php echo translate('select...');?></option>
                                            <option value="">Paid</option>
                                            <option value="">Due</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 input">
                                    <label class="col-md-3 col-sm-3 col-xs-3">
										<?php echo translate('delivery_status:');?>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <select class="form-control" >
                                            <option disabled selected><?php echo translate('select...');?></option>
                                            <option value="">Pending</option>
                                            <option value="">On Delivery</option>
                                            <option value="">Delivered</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 input">
                                	<a href="#" onClick="get_sale('list')" class="btn btn_cus btn-theme-sm btn-theme"><?php echo translate('back_to_sale_list');?></a>
                                    <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('save');?></button>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>