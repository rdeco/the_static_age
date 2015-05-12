<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="shortcode icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"> -->
        <title> 
        	<?php wp_title( '|', true, 'right'); ?> 
        	<?php bloginfo('name'); ?>
        </title>
        <?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>	
		
		<nav class="navbar navbar-inverse ">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		
					
					<?php $logo= get_option('staticAge_logo', IMAGES.'/logo.png'); ?>
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                        <img class="logo" src="<?php print $logo; ?>" alt="<?php bloginfo('name'); ?>" />
                    </a>                    

				</div>
					
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<?php
						$args = array(
							'menu' => 'header-menu',
							'menu_class' => 'nav navbar-nav navbar-right',
							'container'  => 'false'
							
						);
						wp_nav_menu($args);
					?>

					
					<!--
					<ul class="nav navbar-nav navbar-right">
						<li class="navLink active">
							<a class="navLink" href="#">Link1 <span class="sr-only">(current)</span></a>
						</li>
						<li class="navLink">
							<a class="navLink" href="#">Link2</a>
						</li>
						<li class="navLink">
							<a class="navLink" href="#">Link3</a>
						</li>
						<li class="navLink">
							<a class="navLink" href="#">Link4</a>
						</li>				
						<li class="navLink media">
			                <a class="media" href="#">
			                    <img src="imgs/mediaBtn-fb.png">
			                    <img src="imgs/mediaBtn-twitter.png">
			                    <img src="imgs/mediaBtn-pinterest.png">	                        
			                </a>
			            </li>
					</ul>
					-->
				</div><!-- .collapse .navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>