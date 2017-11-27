
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><?php echo translate('id');?></th>
                <th><?php echo translate('title');?></th>
                <th><?php echo translate('entry_type');?></th>
                <th><?php echo translate('quantity');?></th>
                <th><?php echo translate('note');?></th>
                <th><?php echo translate('options');?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>
                    <div class="pull-right">
                        <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                        <a href="#" onClick="get_stock('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>
                    <div class="pull-right">
                        <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                        <a href="#" onClick="get_stock('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>
                    <div class="pull-right">
                        <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                        <a href="#" onClick="get_stock('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>San Francisco</td>
                <td>
                    <div class="pull-right">
                        <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                        <a href="#" onClick="get_stock('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                        <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div id="btn_dummy_1" style="display:none;">
        <a href="#" onClick="get_stock('add')" style="margin-right:5px;" class="btn btn-theme btn-theme-sm btn-icon-left pull-right"><i class="fa fa-plus-square"></i><?php echo translate('create_stock');?></a>
    </div>
    <div id="btn_dummy_2" style="display:none;">
        <a href="#" onClick="get_stock('destroy')" class="btn btn-theme btn-theme-sm btn-icon-left pull-right"><i class="fa fa-minus-square"></i><?php echo translate('destroy_stock');?></a>
    </div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
		var btn_html_2 = $('#btn_dummy_2').html();
		$('.mbtn').append(btn_html_2);
		var btn_html_1 = $('#btn_dummy_1').html();
		$('.mbtn').append(btn_html_1);
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