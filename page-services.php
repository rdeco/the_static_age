<?php
	/*
		Template Name: Services Page
	*/
	
	get_header(); ?>
		<!-- Services Section -->
	    <section id="services" class="container-fluid services-section" >
	        <div class="row">
                <div class="col-xs-10 col-xs-offset-1 serviceInfo">
	                
	                <?php 
		                if(have_posts()) {
		                	while(have_posts()){
			                	the_post();
			 		?>
                    <h1 class="serviceH1"><?php the_title(); ?></h1>
                    <?php the_content(); 
					
		                	}
	                	}
	                ?>
                </div> <!-- .col-xs-10 .col-xs-offset-1 .serviceInfo -->
	        </div> <!-- .row -->
            <div class="row">
				<div class="col-xs-12 service-widget-background">
					<div class="row">
                		<div class="col-xs-12 col-md-4 services-widget">
							<figure class="img-rounded service-img">	
								<?php 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} 
			            		?>
							</figure>										       		          		
							<?php if (dynamic_sidebar('services-left')); ?>
								
								<button type="button" class="btn1 btn-md btn-default" data-toggle="modal" data-target="#myModal1"> More Info</button>	                		
		                		<!-- start of modal -->
							    <div id="myModal1" class="modal fade">
							        <div class="modal-dialog">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							               
							                </div>
							                <div class="modal-body">
												<?php if (dynamic_sidebar('services-modal-left')); ?>
							                </div>
							                <div class="modal-footer">
								
												<a class="contactModal" href="#contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
												<a class="fbModal" href="<?php print get_option('staticAge_facebook'); ?>">
													<img class="icon-fb" src="<?php print IMAGES; ?>/mediaBtn-fb.png">
												</a>	
												<a class="phoneModal" href="#contact"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a>
							                </div>
							            </div> <!-- .modal-content -->
							        </div> <!-- .modal-dialog -->
							    </div> <!-- .modal .fade -->
	                		</div> <!-- .col-xs-12 .col-md-4 .services-widget -->
                		
	                		<div class="col-xs-12 col-md-4 services-widget">
								<figure class="img-rounded service-img" >
									<?php 							
										if (class_exists('MultiPostThumbnails')) : 						
											MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-service-image');
										endif;							
									?>							
								</figure>	
														
								<?php if (dynamic_sidebar('services-center')); ?>
								<button type="button" class="btn1 btn-md btn-default" data-toggle="modal" data-target="#myModal2"> More Info</button>

	                		    <!-- Modal HTML -->
							    <div id="myModal2" class="modal fade">
							        <div class="modal-dialog">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							                    
							                </div>
							                <div class="modal-body">
												<?php if (dynamic_sidebar('services-modal-center')); ?>
							                </div>
							                <div class="modal-footer">								
												<a class="contactModal" href="#contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
												<a class="fbModal" href="<?php print get_option('staticAge_facebook'); ?>">
													<img class="icon-fb" src="<?php print IMAGES; ?>/mediaBtn-fb.png">	
												<a class="phoneModal" href="#contact"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a>
							                </div>								            
						                </div><!-- .modal-content -->
							        </div><!-- .modal-dialog -->
							    </div> <!-- .modal .fade -->
                		</div> <!-- .col-xs-12 .col-md-4 .services-widget -->
                		
                		<div class="col-xs-12 col-md-4 services-widget">
								<figure class="img-rounded service-img" >
									<?php 							
										if (class_exists('MultiPostThumbnails')) : 						
											MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-service-image');
										endif;							
									?>							
								</figure>	
								<?php if (dynamic_sidebar('services-right')); ?>
							<button type="button" class="btn1 btn-md btn-default" data-toggle="modal" data-target="#myModal3"> More Info</button>
                		    <!-- Modal HTML -->
						    <div id="myModal3" class="modal fade">
						        <div class="modal-dialog">
						            <div class="modal-content">
						                <div class="modal-header">
						                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                  
						                </div>
						                <div class="modal-body">
						                  <?php if (dynamic_sidebar('services-modal-right')); ?>
						              
						                </div>
						                <div class="modal-footer">
							
											<a class="contactModal" href="#contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
												<a class="fbModal" href="<?php print get_option('staticAge_facebook'); ?>">
													<img class="icon-fb" src="<?php print IMAGES; ?>/mediaBtn-fb.png">	
											<a class="phoneModal" href="#contact"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a>
						                </div>							            
						            </div> <!-- .modal-content -->
						        </div> <!-- .modal-dialog -->
						    </div> <!-- .modal .fade -->
                		</div> <!-- .col-xs-12 .col-md-4 .services-widget3 -->	
					</div> <!-- .row -->             		
        		</div> <!-- .col-xs-12 .service-widget-background -->                 		
            </div> <!-- .col-xs-10 .col-xs-offset-1 .serviceInfo -->  
	    </section> <!-- .container-fluid .intro-section -->
<?php get_footer(); ?>