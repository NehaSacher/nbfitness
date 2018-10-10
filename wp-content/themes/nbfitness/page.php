<?php get_header(); ?>
	
<div class="col breadcrumbs">
		<div class="row">
			<?php the_breadcrumb(); ?>
		</div>
	</div>
	

    <div class="page-cont">
	    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	    	<div class="row">
		    	<div class=" col-md-8 col-sm-12">
		    		<div class="left-content">
		    			<?php the_content(); ?>
		    		</div>
		    	</div>
		        <div class=" col-md-4 col-sm-12">
		        	<div class="right-cont">
		        		
					</div>
		        </div>
	 		</div>
	    <?php endwhile;  endif; ?>

	   

	    <div class="row">
	    	<div class="col insta_wrap">
	    		<div class="converse">
	    			<h2>Join the conversation</h2>
	    			<ul class="social_li">
						<li>
							<a href="#">
								<i class="fab fa-facebook-f" aria-hidden="true"> </i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter" aria-hidden="true"> </i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram" aria-hidden="true"> </i>
							</a>
						</li>
	    			</ul>
	    		</div>
	    		<div class="insta_imgs">
		    		<ul>
		    			<li>
		    				<img src="<?php echo get_template_directory_uri(); ?>/images/insta_03.jpg" alt="Nb Fitness Gym" longdesc="Nb Fitness Gym" />
		    			</li>
		    			<li>
		    				<img src="<?php echo get_template_directory_uri(); ?>/images/insta_05.jpg" alt="Girl taking selfie in gym" longdesc="Girl taking selfie in gym"/>
		    			</li>
		    			<li>
		    				<img src="<?php echo get_template_directory_uri(); ?>/images/insta_07.jpg" alt="Boy working out " longdesc="Boy working out " />
		    			</li>
		    			<li>
		    				<img src="<?php echo get_template_directory_uri(); ?>/images/insta_09.jpg" alt="Guys playing at Gym" longdesc="Guys playing at Gym"/>
		    			</li>
		    		</ul>
	    		</div>
	    	</div>
	    </div>
    </div>


<?php get_footer(); ?>