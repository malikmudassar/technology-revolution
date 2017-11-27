<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><?php echo translate('id');?></th>
                <th><?php echo translate('sale_code');?></th>
                <th><?php echo translate('buyer');?></th>
                <th><?php echo translate('date');?></th>
                <th><?php echo translate('total');?></th>
                <th><?php echo translate('delivery_status');?></th>
                <th><?php echo translate('payment_status');?></th>
                <th><?php echo translate('option');?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>#201605529</td>
                <td>Nadir</td>
                <td>23-04-2016</td>
                <td>$20.00</td>
                <td><span class="sticker">Pending</span></td>
                <td><span class="sticker">Due</span></td>
                <td>
                    <div class="pull-right">
                        <a href="#" onClick="get_sale('view')" data-toggle="tooltip" title="Invoice" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="#" onClick="get_sale('delivery')" data-toggle="tooltip" title="Delivery status" class="btn btn-theme btn-theme-xs"><i class="fa fa-truck"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>#201605529</td>
                <td>Nadir</td>
                <td>23-04-2016</td>
                <td>$20.00</td>
                <td><span class="sticker">Pending</span></td>
                <td><span class="sticker">Due</span></td>
                <td>
                    <div class="pull-right">
                        <a href="#" onClick="get_sale('view')" data-toggle="tooltip" title="Invoice" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="#" onClick="get_sale('delivery')" data-toggle="tooltip" title="Delivery status" class="btn btn-theme btn-theme-xs"><i class="fa fa-truck"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>#201605529</td>
                <td>Nadir</td>
                <td>23-04-2016</td>
                <td>$20.00</td>
                <td><span class="sticker">Pending</span></td>
                <td><span class="sticker">Due</span></td>
                <td>
                    <div class="pull-right">
                        <a href="#" onClick="get_sale('view')" data-toggle="tooltip" title="Invoice" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="#" onClick="get_sale('delivery')" data-toggle="tooltip" title="Delivery status" class="btn btn-theme btn-theme-xs"><i class="fa fa-truck"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>#201605529</td>
                <td>Nadir</td>
                <td>23-04-2016</td>
                <td>$20.00</td>
                <td><span class="sticker">Pending</span></td>
                <td><span class="sticker">Due</span></td>
                <td>
                    <div class="pull-right">
                        <a href="#" onClick="get_sale('view')" data-toggle="tooltip" title="Invoice" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="#" onClick="get_sale('delivery')" data-toggle="tooltip" title="Delivery status" class="btn btn-theme btn-theme-xs"><i class="fa fa-truck"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>#201605529</td>
                <td>Nadir</td>
                <td>23-04-2016</td>
                <td>$20.00</td>
                <td><span class="sticker">Pending</span></td>
                <td><span class="sticker">Due</span></td>
                <td>
                    <div class="pull-right">
                        <a href="#" onClick="get_sale('view')" data-toggle="tooltip" title="Invoice" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="#" onClick="get_sale('delivery')" data-toggle="tooltip" title="Delivery status" class="btn btn-theme btn-theme-xs"><i class="fa fa-truck"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<style>
select.input-sm, select.form-group-sm .form-control {
    height: 40px !important;
    line-height: 15px !important;
}
.as{
	margin-top:0px !important;
}
td .sm{
	height:50px;
}
</style>