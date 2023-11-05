<?php 
    $router     	= service('router');
    $action     	= class_basename($router->controllerName()).'_'.$router->methodName();
    $globalCss  	= config('DzConfig')->dzAssets['public']['global']['css'];
    $pageLevelCss 	= config('DzConfig')->dzAssets['public']['pagelevel']['css'][$action];
    $globalJs  		= config('DzConfig')->dzAssets['public']['global']['js'];
    $pageLevelJs 	= config('DzConfig')->dzAssets['public']['pagelevel']['js'][$action];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Codeigniter Admin">
	<meta property="og:title" content="W3crm:Customer Relationship Management Codeigniter Admin">
	<meta property="og:description" content="W3crm:Customer Relationship Management Codeigniter Admin">
	<meta property="og:image" content="https://w3crm.dexignzone.com/codeigniter/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>W3CRM Customer Relationship Management Codeigniter Admin</title>
    <!-- Favicon icon -->
	
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('public/assets/images/favicon.png'); ?>">	
	
	<?php foreach($pageLevelCss as $css){
            if(strpos($css, 'http') !== false){
                $css_url = $css;    
            }else{
                $css_url = base_url($css);
            } 
        ?>	
		 <link href="<?php echo $css_url ?>" rel="stylesheet" type="text/css"/>	
	<?php } ?>
	<?php foreach($globalCss as $css){ ?>	
		 <link href="<?php echo base_url($css) ?>" rel="stylesheet" type="text/css"/>	
	<?php } ?>
	
</head>
<body data-typography="poppins" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
	
	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
		<?php echo $this->include('elements/nav-header') ?>
		<?php echo $this->include('elements/chat-box') ?>
        <?php echo $this->include('elements/header') ?>
        <?php echo $this->include('elements/sidebar') ?>
        <?php echo $this->renderSection('content') ?>
        <?php echo $this->include('elements/footer') ?>
	</div>
	
	<?php foreach($globalJs['top'] as $js){ ?>
		<script src="<?php echo base_url($js); ?>"></script>
	<?php } ?>	

	<?php foreach($pageLevelJs as $js){
        
        if(strpos($js, 'http') !== false){
            ?>
        <script src="<?php echo $js; ?>"></script>
        <?php }
        else{
            ?>
        <script src="<?php echo base_url($js); ?>"></script>
    <?php
        }
    } 
    ?>	
	<?php foreach($globalJs['bottom'] as $js){ ?>
		<script src="<?php echo base_url($js); ?>"></script>
	<?php } ?>
	<?php echo $this->renderSection('scripts') ?>
	
    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>
</html>