<?php 

/*

Template Name: Membership

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



<div class="page-cont pt_pgcont membership">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="container cont_in_wrap">

			<div class="row">

				<div class="col member">

					<div class="left-content">

						<?php the_content(); ?>

					</div>

				</div>

			</div>

		</div>

	<?php endwhile;  wp_reset_postdata(); endif; ?>



	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="container cont_in_wrap membership_content">

			<div class="row">

				<div class=" col-lg-6 col-sm-12">

					<div class="left-content">

						<div class="content">

							<?php the_field('membership_options'); ?>

						</div>



					</div>

				</div>

				<div class=" col-lg-6 col-sm-12">

					<div class="right-cont">

						<?php if ( is_active_sidebar( 'membership' ) ) : ?>

							<?php dynamic_sidebar( 'membership' ); ?>

						<?php endif; ?>

					</div>

				</div>

			</div>

		</div>

	<?php endwhile;  wp_reset_postdata(); endif; ?>





	<div class="container rules_wrap">

		<div class="row ">

			<div class="col">

			<div class="left-content">

				<div class="rules">



					<?php the_field('membership_rules'); ?>

				</div>

				</div>

			</div>

		</div>

	</div>



<div class="container home_gal_in_wrap">

	<div class="row ">

		<div class="col home_gallery">

			<span class="prevbtn arrw"> <i class="fa fa-angle-left" aria-hidden="true"></i> </span>

			<div class="owl-carousel">

				<?php

				$the_query = new WP_Query( 

					array( 

						'post_type' => 'gallery', 

						'posts_per_page' => -1, 

						'order' => 'DESC'

						) 

					); 

					?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 

						$thumbnail_id = get_post_thumbnail_id( $post->ID );

						$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

						$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

						$caption = $thumbnail_image[0]->post_excerpt;



						?>

						<div class="item">

							<?php the_post_thumbnail( array(400,280), array( 'longdesc' => get_the_title() ) );   ?>

							<div class="overlay">

								<div class="img_info">

									<span class="desc">

										<?php the_content(); ?>

									</span>

									<a href="<?php the_post_thumbnail_url(); ?>" data-imagelightbox="home-gal" class="gal_links eng_gal" data-ilb2-caption="<?php echo $caption; ?>">ENLARGE GALLERY</a>

									<a href="https://my.matterport.com/show/?m=cnkUMEVzEXd" target="_blank" class="gal_links take_tour">TAKE TOUR</a>

								</div>

							</div>

						</div>

					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>

			</div>

			<span class="nextbtn arrw"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>

		</div>

	</div>

</div>



	<div class="container testi_in_wrap">

		<div class="row">

			<div class="col testimonials_wrap">

				<div class="row">

					<?php

					$the_query = new WP_Query( 

						array( 

							'post_type' => 'testimonials', 

							'posts_per_page' => 2, 

							'order' => 'DESC'

							) 

						); 

						?>

						<?php if ( $the_query->have_posts() ) : ?>

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<div class="testi_block col-sm-12 col-lg-6">

									<div class="quote"><i class="fas fa-quote-left" aria-hidden="true"></i></div>

									<div class="testi_cont">

										<?php the_content();?>

									</div>

									<div class="cust_name_loc">

										<span class="name_loc">

											<strong> <?php the_field('name'); ?>,</strong>

											<?php the_field('location'); ?> 

										</span>

									</div>

								</div>





							<?php endwhile; ?>



							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php get_footer(); ?>