    <?php 
        $system_title = $this->db->get_where('general_settings',array('type' => 'system_title'))->row()->value;
        $total = $this->cart->total(); 
        if ($this->crud_model->get_type_name_by_id('business_settings', '3', 'value') == 'product_wise') { 
            $shipping = $this->crud_model->cart_total_it('shipping'); 
        } elseif ($this->crud_model->get_type_name_by_id('business_settings', '3', 'value') == 'fixed') { 
            $shipping = $this->crud_model->get_type_name_by_id('business_settings', '2', 'value'); 
        } 
        $tax = $this->crud_model->cart_total_it('tax'); 
        $grand = $total + $shipping + $tax; 
        //echo $grand; 
    ?>
    <?php
        $p_set = $this->db->get_where('business_settings',array('type'=>'paypal_set'))->row()->value; 
        $c_set = $this->db->get_where('business_settings',array('type'=>'cash_set'))->row()->value; 
        $s_set = $this->db->get_where('business_settings',array('type'=>'stripe_set'))->row()->value; 
        
    ?> 


    <?php
        if($p_set == 'ok'){ 
    ?>
    <div class="panel radio panel-default">
        <div class="panel-heading" id="headingOne" role="tab">
            <h4 class="panel-title">
                <input id="visa" type="radio" style="display:none;" checked name="payment_type" value="paypal"/>
                <a aria-controls="collapseOne" onclick="radio_check('visa')" aria-expanded="true" data-parent="#accordion" data-toggle="collapse" href="#collapse1">
                    <span class="dot"></span>
                    <?php echo translate('paypal');?>
                </a>
                <span class="overflowed pull-right">
                    <img alt="" src="<?php echo base_url(); ?>template/front/img/preview/payments/paypal-2.jpg">
                </span>
            </h4>
        </div>
        <div aria-labelledby="heading1" class="panel-collapse collapse in" id="collapse1" role="tabpanel">
            <div class="panel-body">
                <div class="alert alert-success" role="alert">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur sollicitudin ultrices suscipit. Sed commodo vel
                    mauris vel dapibus.
                </div>
            </div>
        </div>
    </div>
    <?php
        } if($s_set == 'ok'){
    ?>
    <div class="panel panel-default">
        <div class="panel-heading" id="headingTwo" role="tab">
            <h4 class="panel-title">
                <input id="mastercardd" style="display:none;" type="radio" name="payment_type" value="stripe"/>
                <a aria-controls="collapseTwo" onclick="radio_check('mastercardd')" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse2">
                    <span class="dot"></span>
                    <?php echo translate('stripe');?>
                </a>
                <span class="overflowed pull-right">
                    <img alt="" src="<?php echo base_url(); ?>template/front/img/preview/payments/stripe.jpg">
                </span>
            </h4>
        </div>
        <div aria-labelledby="heading2" class="panel-collapse collapse" id=
        "collapse2" role="tabpanel">
            <div class="panel-body">
                Please send your cheque to Store Name, Store Street, Store
                Town, Store State / County, Store Postcode.
            </div>
        </div>
    </div>
    <script src="http://checkout.stripe.com/checkout.js"></script>
    <script>
        var handler = StripeCheckout.configure({
            key: '<?php echo $this->db->get_where('business_settings' , array('type' => 'stripe_publishable'))->row()->value; ?>',
            image: '<?php echo base_url(); ?>template/front/assets/img/stripe.png',
            token: function(token) {
                // Use the token to create the charge with a server-side script.
                // You can access the token ID with `token.id`
                $('#cart_form').append("<input type='hidden' name='stripeToken' value='" + token.id + "' />");
                if($( "#visa" ).length){
                    $( "#visa" ).prop( "checked", false );
                }
                if($( "#mastercard" ).length){
                    $( "#mastercard" ).prop( "checked", false );
                }
                $( "#mastercardd" ).prop( "checked", true );
                notify('<?php echo translate('your_card_details_verified!'); ?>','success','bottom','right');
                setTimeout(function(){
                    $('#cart_form').submit();
                }, 500);
            }
        });

        $('#customButton').on('click', function(e) {
            // Open Checkout with further options
            var total = $('#grand').html();
            //total = total.replace("<?php echo currency(); ?>", '');
            //total = parseFloat(total.replace(",", ''));
            total = total/parseFloat(<?php echo $this->crud_model->get_type_name_by_id('business_settings', '8', 'value'); ?>);
            total = total*100;
            handler.open({
                name: '<?php echo $system_title; ?>',
                description: '<?php echo translate('pay_with_stripe'); ?>',
                amount: total
            });
            e.preventDefault();
        });

        // Close Checkout on page navigation
        $(window).on('popstate', function() {
            handler.close();
        });
    </script>

    <?php
        } if($c_set == 'ok'){
    ?>
    <div class="panel panel-default">
        <div class="panel-heading" id="heading4" role="tab">
            <h4 class="panel-title">
                <input id="mastercard" style="display:none;" type="radio" name="payment_type" value="cash_on_delivery"/>
                <a aria-controls="collapse4" aria-expanded="false" onclick="radio_check('mastercard')" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse4">
                    <span class="dot"></span>
                    <?php echo translate('cash_on_delivery');?>
                </a>
                <span class="overflowed pull-right">
                    <img alt="" src="<?php echo base_url(); ?>template/front/img/preview/payments/cash.jpg">
                </span>
            </h4>
        </div>
        <div aria-labelledby="heading4" class="panel-collapse collapse" id=
        "collapse4" role="tabpanel"></div>
    </div>
    <?php
        }
    ?>

