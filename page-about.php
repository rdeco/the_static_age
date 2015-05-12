<?php 
	/*
		Template Name: About Me Page
	*/

	get_header(); ?>
	    <!-- About Section -->
	    <section id="about" class="container-fluid about-section" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-12 about">
                    <div id="aboutContainer" class="aboutContainer">
	                    
	                    <?php 
		                    if (have_posts()) {
		                    	while(have_posts()){
			                    	the_post();
						?>
						<h1 class="aboutHeadline"><?php the_title(); ?></h1>
													
						<?php the_content(); 
							
								}
							}
	                    ?>
                    </div>                
                </div>
            </div>
	    </section>
<?php get_footer(); ?>