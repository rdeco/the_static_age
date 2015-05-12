<?php
	/*
		Template Name: Photo Gallery Page
	*/
?>

<?php get_header(); ?>
    <!-- Photo Section -->
    <section id="photo" class="container-fluid photo-section" >
        <div class="row">
            <div class="col-xs-12  col-md-8  col-md-offset-2 photoGallery">
                <h1> My <?php the_title(); ?></h1>
                <?php 
	                if(have_posts()) {
	                	while(have_posts()){
		                	the_post();
		 		
						the_content(); 
				
	                	}
                	}
                ?>
                
            </div>
        </div>
    </section>
<?php get_footer(); ?>   
