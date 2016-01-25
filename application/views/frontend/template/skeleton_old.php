<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo $title ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="author" content="<?php echo $author ?>" />


 <!-- BEGIN GLOBAL MANDATORY STYLES -->          
<!--
        <link href="https://www.defenx.com/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
-->
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
<!--
        <link href="https://www.defenx.com/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link href="https://www.defenx.com/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>  
        <link rel="stylesheet" href="https://www.defenx.com/assets/plugins/revolution_slider/css/rs-style.css" media="screen">
        <link rel="stylesheet" href="https://www.defenx.com/assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
        <link href="https://www.defenx.com/assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                
-->
        <!-- END PAGE LEVEL PLUGIN STYLES -->

        <!-- BEGIN FLAT UI STYLES -->
<!--
        <link href="https://www.defenx.com/assets/flat-ui/bootstrap/css/prettify.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/flat-ui/css/flat-ui.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/flat-ui/css/demo.css" rel="stylesheet" type="text/css"/>
-->
        <!-- END FLAT UI STYLES -->

        <!-- BEGIN THEME STYLES --> 
        <!--<link href="https://www.defenx.com/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>-->
<!--
        <link href="https://www.defenx.com/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/css/pages/page404.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/css/pages/search-page-results.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="https://www.defenx.com/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/css/pages/prices.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.defenx.com/assets/css/custom.css" rel="stylesheet" type="text/css"/>
-->
        <!-- END THEME STYLES -->
  <!-- Fonts START -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all' rel='stylesheet' type='text/css'>
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url(PLUGINS . 'font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(PLUGINS . 'bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url(PLUGINS . 'fancybox/source/jquery.fancybox.css')?>" rel="stylesheet">              
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"><!-- for slider-range -->
  <link href="<?php echo base_url(PLUGINS . 'bxslider/jquery.bxslider.css')?>" rel="stylesheet">
  <link href="<?php echo base_url(PLUGINS . 'rateit/src/rateit.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(PLUGINS . 'uniform/css/uniform.default.css')?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->


	
	 <!--<link href="https://www.defenx.com/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>-->
	<link href="https://www.defenx.com/assets/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="https://www.defenx.com/assets/flat-ui/bootstrap/css/prettify.css" rel="stylesheet" type="text/css"/>
    <link href="https://www.defenx.com/assets/flat-ui/css/flat-ui.css" rel="stylesheet" type="text/css"/>
    <link href="https://www.defenx.com/assets/flat-ui/css/demo.css" rel="stylesheet" type="text/css"/>
	
	<link href="https://www.defenx.com/assets/css/pages/search-page-results.css" rel="stylesheet" type="text/css"/>
	<link href="https://www.defenx.com/assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="https://www.defenx.com/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="https://www.defenx.com/assets/css/pages/prices.css" rel="stylesheet" type="text/css"/>
	<link href="https://www.defenx.com/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	  <!-- Theme styles START -->
  <link href="<?php echo base_url(CSS . 'style-metronic.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(CSS . 'style.csss')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(CSS . 'style-responsive.css')?>" rel="stylesheet" type="text/css">  
  <link href="<?php echo base_url(CSS . 'custom.css')?>" rel="stylesheet" type="text/css">
  <!-- Theme styles END -->
<!-- extra CSS-->
<?php foreach($css as $c):?>
<link rel="stylesheet" href="<?php echo base_url($c)?>">
<?php endforeach;?>

<!-- extra fonts-->
<?php foreach($fonts as $f):?>
<link href="http://fonts.googleapis.com/css?family=<?php echo $f?>"
	rel="stylesheet" type="text/css">
<?php endforeach;?>


<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url(IMAGES.'ico/favicon.ico');?>">
<link rel="apple-touch-icon" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-precompresse.png');?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png');?>">

<script>
	var _language = "en";
	var _country = "gb";
</script>
	
</head>
<body>
	<?php echo $body ?>
	


	<!-- extra js-->
	<?php foreach($javascript as $js):?>
	<script defer src="<?php echo base_url($js)?>"></script>
	<?php endforeach;?>

	<!-- run js-->
	<script>
	jQuery(document).ready(function() { 

		Cart.init();
		<?php foreach($run_on_load as $rjs):?>
	<?php echo $rjs.'
		'?>
		<?php endforeach;?>
	
	});
	</script>
	<!-- END run js -->
	<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
