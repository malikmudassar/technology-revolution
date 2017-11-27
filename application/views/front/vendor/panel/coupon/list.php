<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><?php echo translate('no')?></th>
            <th><?php echo translate('title')?></th>
            <th><?php echo translate('code')?></th>
            <th><?php echo translate('added_by')?></th>
            <th><?php echo translate('publish')?></th>
            <th><?php echo translate('options')?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Developer</td>
            <td>#h8668d</td>
            <td>San Francisco</td>
            <td><input class='aiz_switchery' type="checkbox" name="download" value="ok" /></td>
            <td>
                <div class="pull-right">
                    <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                    <a href="#" onClick="get_coupon('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                    <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Developer</td>
            <td>#h8668d</td>
            <td>San Francisco</td>
            <td><input class='aiz_switchery' type="checkbox" name="download" value="ok" /></td>
            <td>
                <div class="pull-right">
                    <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                    <a href="#" onClick="get_coupon('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                    <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Developer</td>
            <td>#h8668d</td>
            <td>San Francisco</td>
            <td><input class='aiz_switchery' type="checkbox" name="download" value="ok" /></td>
            <td>
                <div class="pull-right">
                    <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                    <a href="#" onClick="get_coupon('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                    <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Developer</td>
            <td>#h8668d</td>
            <td>San Francisco</td>
            <td><input class='aiz_switchery' type="checkbox" name="download" value="ok" /></td>
            <td>
                <div class="pull-right">
                    <a href="" data-toggle="tooltip" title="View" class="btn btn-theme btn-theme-xs"><i class="fa fa-eye"></i></a>
                    <a href="#" onClick="get_coupon('edit')" data-toggle="tooltip" title="Edit" class="btn btn-theme btn-edit btn-theme-xs"><i class="fa fa-wrench"></i></a>
                    <a href="" data-toggle="tooltip" title="Delete" class="btn btn-theme btn-danger btn-theme-xs"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
    </tbody>
</table>
    
<div id="btn_dummy" style="display:none;">
    <a href="#" onClick="get_coupon('add')" class="btn btn-theme btn-theme-sm btn-icon-left pull-right"><i class="fa fa-plus-square"></i> <?php echo translate('create_coupon')?></a>
</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
		var btn_html = $('#btn_dummy').html();
		$('.mbtn').append(btn_html);
		
		set_switchery();
		function set_switchery(){
			$(".aiz_switchery").each(function(){
				new Switchery($(this).get(0), {color:'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
			});
		}
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