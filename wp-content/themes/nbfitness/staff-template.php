<?php 
/*
Template Name: Staff
*/
get_header(); 
?>

	<div class="container breadcrumbs_in_wrap">
		<div class="col breadcrumbs">
			<div class="row">
				<?php the_breadcrumb(); ?>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia quod, aliquid veritatis dolor fugit laboriosam laudantium a magnam debitis neque labore facere provident veniam beatae excepturi molestiae, similique totam nobis.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat culpa odit exercitationem officia, eaque, temporibus veritatis deserunt delectus quam praesentium molestiae ea consequuntur optio nam eius laborum illo, a blanditiis.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla tenetur rerum minima explicabo beatae similique totam sapiente, harum adipisci doloribus odio perspiciatis commodi illum laudantium ipsa iure saepe, perferendis, voluptates.</p>
			</div>
		</div>
	</div>
		

	    <div class="page-cont">
		    <?php
				$the_query = new WP_Query( 
					array( 
						'post_type' => 'staff_members', 
						'posts_per_page' => -1, 
						'order' => 'DESC'
					) 
				); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<div class="container cont_in_wrap">
					<div class="row">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post();  
							$pos = get_field('position');
							$pt_pos = "Personal Trainer";

						?>
						
					    	<div class=" col-lg-6 col-sm-12 staff_wrap">
					    		<div class="staff_inner">
					    			<div class="staff_image">
					    				<?php the_post_thumbnail(array(513, 301));  ?>
					    				<?php if ($pos == $pt_pos) { ?>
						    				<h2><?php the_field('position'); ?></h2>
						    			<?php } ?>
					    			</div>
					    			<div class="staff_details">
					    				<span class="staff_name"><?php the_title(); ?>.</span>
					    				<span class="staff_pos"><?php the_field('position'); ?></span>
					    				<div class="staff_lists">
					    					<ul>
					    						<li>
					    							<strong>Favorite Post-workout Food of Trainer:</strong> <?php the_field('favorite_post-workout_food'); ?>
					    						</li>
					    						<li>
					    							<strong>Hobbies of Trainer:</strong> <?php the_field('hobbies'); ?>
					    						</li>
					    						<li>
					    							<strong>Fun Fact:</strong> <?php the_field('fun_fact'); ?>
					    						</li>
					    						<li>
					    							<strong>Words to Live By:</strong> <?php echo staff_words(); ?>
					    						</li>
					    					</ul>
					    				</div>
					    				<?php if ($pos == $pt_pos) { ?>
					    					<a href="<?php get_site_url();?>/personal-training" class="learn_more">Learn More About <?php the_title(); ?> </a>
					    				<?php } ?>
					    			</div>
					    		</div>
					    	</div>
				    	<?php endwhile; ?> 
			    	</div>
		    	</div>
		    	<?php wp_reset_postdata(); ?>
			<?php endif; ?>
	    </div>

<?php get_footer(); ?>