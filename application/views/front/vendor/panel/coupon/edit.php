<div class="row margin-top-0">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <form action="#" class="form-login">
            <div class="row product-form">
                <div class="information-title"><?php echo translate('edit_coupon')?></div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('title:')?></label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('valit_till:')?></label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="date" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('product:')?></label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <select class="form-control">
                            <option disabled selected><?php echo translate('select...')?></option>
                            <option value="">Product1</option>
                            <option value="">Product2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('coupon_code:')?></label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('discount_type:')?></label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <select class="form-control">
                            <option disabled selected><?php echo translate('select...')?></option>
                            <option value="">Percent</option>
                            <option value="">Amount</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <label class="col-md-3 col-sm-3 col-xs-3"><?php echo translate('discount_value:')?></label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="number" class="form-control" placeholder="0">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 input">
                    <a href="#" onClick="get_coupon('list')" class="btn btn_cus btn-theme-sm btn-theme"> <?php echo translate('back_to_coupon_list')?></a>
                    <button class="btn btn_cus btn-theme-sm btn-theme-dark pull-right" href="#">
                        <?php echo translate('save')?>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>