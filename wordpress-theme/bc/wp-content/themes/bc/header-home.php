<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        
        <style>
		@import 'https://fonts.googleapis.com/css?family=Amatica+SC:400,700';
		@import 'https://fonts.googleapis.com/css?family=Raleway:300,400,700';
		</style> 

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
        
			<!-- header -->

		
			<header>
			<section class="hero">
				<div class="texture-overlay"></div>
                
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div  class="container-fluid">
                    	<div class="navbar-header">
                    		<a class="page-scroll" href="#"><p class="b-c amatic-h"><?php echo get_bloginfo('name'); ?></p></a>
                        </div>
                     <div class="text-right navicon">   
						<a id="trigger-overlay" class="nav_slide_button nav-toggle"><span></span></a>
                     </div>
                  </div>
                 </nav>
                 
                <div class="network">
                  	<div class="container-fluid">
                    	<ul>
                            <li><a href="https://fr-fr.facebook.com/Bonnie-Claude-253590028160524/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="Rejoignez-nous"></a></li>
                            <li><a href="mailto:<?php echo get_bloginfo('admin_email'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/letter.png" alt="Concatez-nous"></a></li>
                          </ul>            
                     </div> 
                 </div>
                 
				<div class="row hero-content">
                <div class="container">
						<div class="col-md-12">
							<h1 class="animated fadeInDown logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Bonnie & Claude"></h1>
                        </div>
                        <div class="animated animated-2 bounce">
								 <nav><a href="#about" class="down-arrow js-scrollTo"><img src="<?php echo get_template_directory_uri(); ?>/img/down-arrow.png" alt="HTML5 Logo"></a></nav>
						</div>
					</div>
				</div>
			</section>
		</header>	
        <!-- /header -->