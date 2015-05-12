<?php 
	/*
		Template Name: Contact Page
	*/

	get_header(); ?>
	
			
	    <!-- Contact Section -->
	    <section id="contact" class="container-fluid contact-section">

	            <div class="row">
	                <div class="topContent col-xs-12">
	                    <h1><?php wp_title(''); ?></h1>
	                </div>
	                <div class="sectionContent col-xs-12">
		                <div class="row">
			                <div class="contactContent col-md-9 col-md-offset-2 col-xs-12">
				                <?php 
					                if (have_posts()){
						                while(have_posts()){
							                the_post();
							                
							                
							                the_content();
						                }
					                }
					            ?>
			                </div>
		                </div>
	                </div>
	            </div>
	
	    </section>	    
	

	
	
	<?php get_footer(); ?>