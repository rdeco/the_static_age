<?php get_header(); ?>
<!-- Intro Section -->
<section id="intro" class="container-fluid intro-section">		    
    <div class="row">
        <div class="index col-xs-12">
            <div id="headerIntro" class="homeText">


                <h1 class="homeHeadline">
	                <?php
	                    $postmeta = get_post_meta($post->ID);
	
	                    if ( isset($postmeta['meta_box_title_field'][0]) ) {
	                        echo $postmeta['meta_box_title_field'][0];
	                    }
	                ?>
                </h1>
                
   
                <div class="logo">
		            <?php
		                if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
		            ?>
                </div>             
                                
                <p class="homeText">
	                <?php
	                    $postmeta = get_post_meta($post->ID);
	
	                    if ( isset($postmeta['meta_box_tagline_field'][0]) ) {
	                        echo $postmeta['meta_box_tagline_field'][0];
	                    }
	                ?>	                
                </p>
            </div>                

			
        </div> <!-- .col-xs-12 -->   
    </div> <!-- .row -->	
    <?php get_footer(); ?>    
</section> <!-- .container-fluid .intro-section -->
