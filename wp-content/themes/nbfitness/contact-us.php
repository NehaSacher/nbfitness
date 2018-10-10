<?php 
/*
Template Name: Contact Us
*/
get_header(); 
?>
	<div class="container breadcrumbs_in_wrap">
		<div class="col breadcrumbs">
			<div class="row">
				<?php the_breadcrumb(); ?>
			</div>
		</div>
	</div>
	

    <div class="page-cont">
	    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	    <div class="container cont_in_wrap contact_wrap">
	    	<div class="row">
		    	<div class=" col-lg-8 col-sm-12">
		    		<div class="left-content">
		    			<?php the_content(); ?>
		    		</div>
		    	</div>
		        <div class=" col-lg-4 col-sm-12">
		        	<div class="right-cont contact_aside">
		        		<?php if ( is_active_sidebar( 'image_widget' ) ) : ?>
							<?php dynamic_sidebar( 'image_widget' ); ?>
						<?php endif; ?>
						
			        	<?php if ( is_active_sidebar( 'hours' ) ) : ?>
							<?php dynamic_sidebar( 'hours' ); ?>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'careers' ) ) : ?>
							<?php dynamic_sidebar( 'careers' ); ?>
						<?php endif; ?>
					</div>
		        </div>
	 		</div>
	    </div>
	    <?php endwhile;  endif; ?>
	   	<div class="container insta_in_wrap">
				<div class="row">
			    	<div class="col insta_wrap">
			    		<div class="converse">
			    			<h2>Join the conversation</h2>
			    			<ul class="social_li">
								<li>
									<a href="#">Facebook
										<i class="fab fa-facebook-f" aria-hidden="true"> </i>
									</a>
								</li>
								<li>
									<a href="#">Twitter
										<i class="fab fa-twitter" aria-hidden="true"> </i>
									</a>
								</li>
								<li>
									<a href="#">Instagram
										<i class="fab fa-instagram" aria-hidden="true"> </i>
									</a>
								</li>
			    			</ul>
			    		</div>
			    		<div class="insta_imgs">
				    		<?php echo do_shortcode('[iscwp-slider username="nbfitnessclub" limit="10" slidestoshow="4" dots="false" arrows="false" popup_gallery="false" show_caption="flase" popup="true" autoplay_interval="2000" gallery_height="285"]'); ?>
			    		</div>
			    	</div>
			    </div>
		</div>
    </div>


<?php get_footer(); ?>