<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php 
            $vendor_system   =  $this->db->get_where('general_settings',array('type' => 'vendor_system'))->row()->value;
            $description     =  $this->db->get_where('general_settings',array('type' => 'meta_description'))->row()->value;
            $keywords        =  $this->db->get_where('general_settings',array('type' => 'meta_keywords'))->row()->value;
            $author          =  $this->db->get_where('general_settings',array('type' => 'meta_author'))->row()->value;
            $system_name     =  $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;
            $system_title    =  $this->db->get_where('general_settings',array('type' => 'system_title'))->row()->value;
            $map_api_key     =  $this->db->get_where('general_settings',array('type' => 'google_api_key'))->row()->value;
            $revisit_after   =  $this->db->get_where('general_settings',array('type' => 'revisit_after'))->row()->value;
            $page_title      =  ucfirst(str_replace('_',' ',$page_title));
            $this->crud_model->check_vendor_mambership();
            if($page_name == 'product_view'){
                $keywords    .= $product_tags;
            }
		?>
    	<title><?php echo $page_title; ?> || <?php echo $system_title; ?></title>
    	<?php
        	include 'includes/top/index.php';
		?>
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
    	<?php
			$preloader = '1';
        	//include 'preloader/preloader_'.$preloader.'.php';
			include 'preloader.php';
		?>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- Popup: Shopping cart items -->
			<?php
                include 'components/cart_modal.php';
            ?>            
            <!-- /Popup: Shopping cart items -->

            <!-- HEADER -->
			<?php
                $header = '1';
                include 'header/header_'.$header.'.php';
            ?>            
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <div class="content-area">
				<?php
                    include $page_name.'/index.php';
                ?>                
            </div>
            <!-- /CONTENT AREA -->

            <!-- FOOTER -->
			<?php
                $footer = '1';
                include 'footer/footer_'.$footer.'.php';
            ?> 
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /WRAPPER -->
        <?php
            include 'script_texts.php';
        ?>
    	<?php
        	include 'includes/bottom/index.php';
		?>
    </body>
</html>