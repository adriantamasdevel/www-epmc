<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta name="description" content="<?php echo $description ?>" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />


        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "normalize.min.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "bootstrap.min.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "jquery.fancybox.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "flexslider.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "styles.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "queries.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "etline-font.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "owl.theme.green.css") ?>">


        <!-- Owl Carousel Assets -->
        <link href="<?php echo base_url(FRONT_BOWER . "owl.carousel/dist/assets/owl.carousel.min.css") ?>" rel="stylesheet">
        

        <link rel="stylesheet" href="<?php echo base_url(FRONT_BOWER . "animate.css/animate.min.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url(FRONT_CSS . "font-awesome.min.css") ?>">
        <script src="<?php echo base_url(FRONT_JS . "vendor/modernizr-2.8.3-respond-1.4.2.min.js") ?>"></script>

        <!-- extra CSS-->
        <?php foreach ($css as $c): ?>
            <link rel="stylesheet" href="<?php echo base_url($c) ?>">
        <?php endforeach; ?>

        

    </head>
    <body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <?php echo $body ?>



        <!-- extra js-->
        <?php foreach ($javascript as $js): ?>
            <script defer src="<?php echo base_url($js) ?>"></script>
        <?php endforeach; ?>

        <!-- run js-->
        <script>
            jQuery(document).ready(function() {
            <?php foreach ($run_on_load as $rjs): ?>
                <?php echo $rjs . '
                            ' ?>
            <?php endforeach; ?>
            });
			
			$(window).on('beforeunload', function(e){  
				<?php foreach ($run_on_unload as $rjs): ?>
					<?php echo $rjs . '
								' ?>
				<?php endforeach; ?>
			}); 
			
			
        </script>
		<!-- END run js -->
		
        
        <script>
            var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
            (function(d, t) {
                var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g, s)
            }(document, 'script'));
        </script>
    </body>
</html>
