
<?php
	echo form_open('', array(
		'method' => 'post',
		'class' => 'sky-form',
	));
?>
    <div class="buttons" style="display:inline-flex;">
        <span class="btn btn-add-to cart" onclick="to_cart(<?php echo $row['product_id']; ?>)">
            <i class="fa fa-shopping-cart"></i>
            <?php if($this->crud_model->is_added_to_cart($row['product_id'])=="yes"){ 
                echo translate('added_to_cart');  
                } else { 
                echo translate('add_to_cart');  
                } 
            ?>
        </span>
        <?php 
            $wish = $this->crud_model->is_wished($row['product_id']); 
        ?>
        <span class="btn btn-add-to <?php if($wish == 'yes'){ echo 'wished';} else{ echo 'wishlist';} ?>" onclick="to_wishlist(<?php echo $row['product_id']; ?>)">
            <i class="fa fa-heart"></i>
            <?php if($wish == 'yes'){ 
                echo translate('_added_to_wishlist'); 
                } else { 
                echo translate('_add_to_wishlist');
                } 
            ?>
        </span>
        <?php 
            $compare = $this->crud_model->is_compared($row['product_id']); 
        ?>
        <span class="btn btn-add-to compare btn_compare"  onclick="do_compare(<?php echo $row['product_id']; ?>)">
            <i class="fa fa-exchange"></i>
            <?php if($compare == 'yes'){ 
                echo translate('_compared'); 
                } else { 
                echo translate('_compare');
                } 
            ?>
        </span>
    </div>
    <div class="buttons">
        <div id="share"></div>
    </div>
    <input type="hidden" name="qty" value="1" />
</form>
<div id="pnopoi"></div>
<hr class="page-divider"/>
<script>
	$(document).ready(function() {
		$('#share').share({
			networks: ['facebook','googleplus','twitter','linkedin','tumblr','in1','stumbleupon','digg'],
			theme: 'square'
		});
	});
</script>
<style>
.t-row{
	display:table-row;
}
.buttons span{
	display:table-cell;
}
</style>