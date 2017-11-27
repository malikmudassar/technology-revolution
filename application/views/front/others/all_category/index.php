<!-- BREADCRUMBS -->
<section class="page-section breadcrumbs">
    <div class="container">
        <div class="page-header">
            <h2 class="section-title section-title-lg">
                <span>
                    <?php echo translate('all_categories');?>
                </span>
            </h2>
        </div>
    </div>
</section>
<!-- /BREADCRUMBS -->

<!-- PAGE -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <?php
            $categories=$this->db->get('category')->result_array();
            foreach($categories as $row){
            ?>
            <div class="col-md-3">
                <div class="all-brands-list">
                    <div class="brands-list-heading">
                        <div class="heading-text">
                            <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category_id']; ?>">
                                <?php echo translate($row['category_name']);?>
                                (<?php
                                    echo $this->crud_model->is_publishable_count('category',$row['category_id']);
                                ?>)
                            </a>
                        </div>
                    </div>
                    <div class="brands-list-body" style="background-image:linear-gradient(rgba(255, 255, 255, 0.87),rgba(241, 241, 241, 0.98)),url('<?php echo base_url();?>uploads/category_image/<?php echo $row['banner'];?>');">
                    <?php 
                    $sub_categories=$this->db->get_where('sub_category',array('category'=>$row['category_id']))->result_array();
                    foreach($sub_categories as $row1){
                    ?>
                        <div class="brands-show">
                            <table>
                                <tr>
                                    <td class="brand-image">
                                        <img src="<?php echo base_url();?>uploads/sub_category_image/<?php echo $row1['banner'];?>" alt=""/>
                                    </td>
                                    <td class="brand-name">
                                        <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category_id']; ?>/<?php echo $row1['sub_category_id'];?>">
                                            <?php echo $row1['sub_category_name'];?>
                                            (<?php echo $this->crud_model->is_publishable_count('sub_category',$row1['sub_category_id']); ?>)
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php /*?><div class="col-md-4">
                <div class="product-list">
                    <h4 class="block-title">
                        <span>
                            <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category_id']; ?>">
                                <?php echo $row['category_name'];?>
                                (<?php
                                    echo $this->crud_model->is_publishable_count('category',$row['category_id']);
                                ?>)
                            </a>
                        </span>
                    </h4>
                    <div class="widget shop-categories scroll">
                        <div class="widget-content" style="overflow:hidden;">
                            <ul>
                                <?php
                                    $sub_categories=$this->db->get_where('sub_category',array('category'=>$row['category_id']))->result_array();
                                    foreach($sub_categories as $row1){
                                ?>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/home/category/<?php echo $row['category_id']; ?>/<?php echo $row1['sub_category_id'];?>">
                                        <?php echo $row1['sub_category_name'];?>
                                    (<?php
                                        echo $this->crud_model->is_publishable_count('sub_category',$row1['sub_category_id']);
                                    ?>)
                                    </a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><?php */?>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- /PAGE -->