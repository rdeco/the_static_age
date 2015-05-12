	
		<!-- Footer Section -->	
	    <footer class="container-fluid navbar-fixed-bottom"> 
	        <div class="row">    			        
	            <div class="col-xs-12 footer">
	                <p class="footerText"> © <?php bloginfo('name'); ?> <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span> <?php echo date('Y'); ?> All Rights Reserved		                
	                </p>
		        </div>	<!-- .col-xs-12 .footer -->
	        </div> <!-- .row -->
	    </footer> <!-- .container-fluid -->
	    
	    <!-- twitter -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
		<!-- facebook --> 
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
		<?php wp_footer(); ?>
	</body>
</html> 