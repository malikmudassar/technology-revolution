
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php
        	include 'meta/'.$asset_page.'.php';
		?>      
        <!-- Favicon -->
        <?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value;?>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>template/front/ico/apple-touch-icon-144-precomposed.png">
        
        <link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">
        
        <!-- CSS Global -->
        <link href="<?php echo base_url(); ?>template/front/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/plugins/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/modal/css/sm.css" rel="stylesheet">
        
        <!-- Theme CSS -->
        <?php $theme =  $this->db->get_where('ui_settings',array('type' => 'header_color'))->row()->value;?>
        <link href="<?php echo base_url(); ?>template/front/css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>template/front/css/theme-<?php echo $theme; ?>.css" rel="stylesheet" id="theme-config-link">
        
        <!-- Head Libs -->
        <script src="<?php echo base_url(); ?>template/front/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>template/front/plugins/modernizr.custom.js"></script>
        
        <?php
        	include $asset_page.'.php';
		?>
		