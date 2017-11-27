                        	
<aside class="col-md-3 sidebar" id="sidebar">
    <div class="widget shop-categories">
        <h4 class="widget-title">
            <?php echo translate('panel_for_vendor_name');?>
        </h4>
        <div class="widget-content vendor_nav">
            <ul>
                <li class="<?php if($page_title=="vendor_panel"){ echo "active"; } ?>">
                    <a href="#" onClick="get_dashboard()">
                        <i class="fa fa-tachometer"></i>
                        <?php echo translate('dashboard');?>
                    </a>
                </li>
                <li class="<?php if($page_title=="vendor_product"|| $page_title=="vendor_stock"){ echo "active"; } ?>">
                    <span class="arrow"><i class="fa fa-angle-down"></i></span>
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <?php echo translate('my_products');?>
                    </a>
                    <ul class="children sub-menu <?php if($page_title=="vendor_product"|| $page_title=="vendor_stock"){ echo "active"; } ?>">
                        <li class="<?php if($page_title=="vendor_product"){echo "active";}?>">
                            <a href="#" onClick="get_product('list')">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <?php echo translate('product_list');?>
                            </a>
                        </li>
                        <li class="<?php if($page_title=="vendor_stock"){ echo "active";}?>">
                            <a href="#" onClick="get_stock('list')">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <?php echo translate('product_stock');?>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($page_title=="vendor_sale"){ echo "active"; } ?>">
                    <a href="#" onClick="get_sale('list')">
                        <i class="fa fa-usd"></i>
                        <?php echo translate('manage_sale');?>
                    </a>
                </li>
                <li>
                    <span class="arrow"><i class="fa fa-angle-down"></i></span>
                    <a href="#">
                        <i class="fa fa-file-text"></i>
                        <?php echo translate('reports');?>
                    </a>
                    <ul class="children sub-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <?php echo translate('product_compare');?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <?php echo translate('product_stock');?>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-arrow-circle-o-right"></i>
                                <?php echo translate('product_wishes');?>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if($page_title=="vendor_coupon"){ echo "active"; } ?>">
                    <a href="#" onClick="get_coupon('list')">
                        <i class="fa fa-tags"></i>
                        <?php echo translate('coupon');?>
                    </a>
                </li>
                <li class="<?php if($page_title=="vendor_settings"){ echo "active"; } ?>">
                    <a href="#" onClick="get_settings()">
                        <i class="fa fa-wrench"></i>
                        <?php echo translate('settings');?>
                    </a>
                </li>
                <li class="<?php if($page_title=="vendor_payment_method"){echo "active";}?>">
                    <a href="#" onClick="get_payment_method()">
                        <i class="fa fa-usd"></i>
                        <?php echo translate('payment_method');?>
                    </a>
                </li>
                <li class="<?php if($page_title=="vendor_package"){ echo "active"; }?>">
                    <a href="#" onClick="get_package()">
                        <i class="fa fa-gift"></i>
                        <?php echo translate('my_package');?>
                    </a>
                </li>
                <li class="<?php if($page_title=="vendor_manage_profile"){ echo "active";}?>">
                    <a href="#" onClick=" get_manage_profile()">
                        <i class="fa fa-lock"></i>
                        <?php echo translate('manage_vendor_profile');?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>