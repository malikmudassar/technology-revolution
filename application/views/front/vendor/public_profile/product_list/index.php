 <!-- PAGE WITH SIDEBAR -->
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
                <!-- shop-sorting -->
                <div class="shop-sorting">
                    <div class="row">
                        <div class="col-sm-10 sort-item">
                            <div class="form-inline">
                                <div class="form-group selectpicker-wrapper">
                                    <select class="selectpicker input-price sorter_search" data-live-search="true" data-width="100%"
                                        data-toggle="tooltip" title="Select" onChange="delayed_search()">                                  
                                            <option value="">Sort By</option>
                                            <option value="price_low">Price Low To High</option>
                                            <option value="price_high">Price High To Low</option>
                                            <option value="condition_old">Oldest</option>
                                            <option value="condition_new">Newest</option>
                                            <option value="most_viewed">Most Viewed</option>
                                    </select>
                                </div>
                                <div class="form-group selectpicker-wrapper set_brand" style="display:none;">
                                </div>
                                <div style="display:none;">
                                    <div class="form-group selectpicker-wrapper set_vendor">
                                    </div>
                                </div>
                                <div class="form-group widget">
                                    <div class="widget-search">
                                        <input class="form-control" type="text" id="texted" placeholder="Search">
                                        <button class="on_click_search"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 text-right-sm">
                            <a class="btn  btn-theme-transparent btn-theme-sm" onClick="set_view('list')" href="#"><img src="<?php echo base_url(); ?>template/front/img/icon-list.png" alt=""/></a>
                            <a class="btn  btn-theme-transparent btn-theme-sm" onClick="set_view('grid')" href="#"><img src="<?php echo base_url(); ?>template/front/img/icon-grid.png" alt=""/></a>
                        </div>
                    </div>
                </div>
                <!-- /shop-sorting -->
                <div id="result">
                
                </div>
            </div>
            <!-- /CONTENT -->
        </div>
    </div>
</section>
<!-- /PAGE WITH SIDEBAR -->

<style>
    .widget.shop-categories ul ul.children label {
        margin-right: 0;
    }
    .widget.shop-categories ul label {
        display: block;
        margin-right: 20px;
        color: #232323;
        cursor: pointer;
    }
	.pagination-wrapper.bottom{
		text-align-last:center;
	}
	.sort-item{
		display:table;
	}
	.sort-item .form-inline{
		display:table-row;
	}
	.sort-item .form-group{
		display:table-cell;
	}
	.sort-item .widget-search .form-control{
		height:35px;
		line-height: 35px;
	}
	.sort-item .widget-search button{
		line-height: 26px;
	}
	.sort-item .widget-search button:before{
		height:30px;
	}
	.shop-sorting .btn-theme-sm {
		padding: 5px 7px;
	}
</style>