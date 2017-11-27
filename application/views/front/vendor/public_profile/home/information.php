<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs vendor_breadcrumbs">
    <div class="container">
        <div class="page-header" style="margin:25px 0 0;">
            <h4>
                <?php echo translate('name');?>: 
				<?php echo $this->crud_model->get_type_name_by_id('vendor',$vendor_id,'display_name');?>
            </h4>
            <h6>
                <?php echo translate('member_since');?>: 
                <?php echo date("d M, Y", $this->crud_model->get_type_name_by_id('vendor',$vendor_id,'create_timestamp'));?>
            </h6>
            <hr/>
            <h5>
                <?php echo $this->crud_model->get_type_name_by_id('vendor',$vendor_id,'address1');?>
                <?php echo $this->crud_model->get_type_name_by_id('vendor',$vendor_id,'address2');?>
            </h5>
        </div>
        <div class="page-header special-bg" style="background:url(<?php echo base_url(); ?>template/front/img/bottom-bg-1.png) no-repeat;
    background-size: 100%;">
        </div>
    </div>
</section>
<!-- /BREADCRUMBS -->
<style>
.special-bg{
    margin: 0px !important;
    opacity: 0.6;
    height: 50px;
}
</style>