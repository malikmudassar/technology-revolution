                  	<div class="row margin-top-0">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        	<form action="#" class="form-login">
                                <div class="row product-form">
                                    <div class="information-title"><?php echo translate('destroy_stock');?></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('category:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control" id="sel_category">
                                                <option disabled selected><?php echo translate('selecct...');?></option>
                                                <option value="">Categoty1</option>
                                                <option value="">Categoty2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input" id="subcategory" style="display:none;">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('sub-category:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control" id="sel_subcategory">
                                                <option disabled selected><?php echo translate('selecct...');?></option>
                                                <option value="">Sub-Categoty1</option>
                                                <option value="">Sub-Categoty2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input" id="product" style="display:none;">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('product:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control">
                                                <option disabled selected><?php echo translate('selecct...');?></option>
                                                <option value="">Product1</option>
                                                <option value="">Product2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('quantity:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('rate:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('total:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="number" class="form-control" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('reason_note:');?></label>
                                        <div class="col-md-9 col-sm-9 col-xs-9" style="margin-bottom:20px;">
                                            <textarea maxlength="5000" rows="10" class="form-control" name="comment"  style="height: 138px;" placeholder="<?php echo translate('reason_note');?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 input">
                                        <a href="#" onClick="get_stock('list')" class="btn btn_cus btn-theme-sm btn-theme"><?php echo translate('back_to_stock_list');?></a>
                                        <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#"><?php echo translate('save');?></button>
                                    </div>
                                </div>
                            </form>
                    	</div>
                   	</div>
                    
<script type="text/javascript">
	$('#sel_category').on('change',function(){
		$('#subcategory').show();
	});
	$('#sel_subcategory').on('change',function(){
		$('#product').show();
	});
</script>