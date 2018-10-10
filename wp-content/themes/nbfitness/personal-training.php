<?php 
/*
Template Name: Personal Training
*/
get_header(); 
global $post;
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


<div class="page-cont pt_pgcont">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="container cont_in_wrap">
			<div class="row">
				<div class="col-sm-12 left-content">
					<?php the_content(); ?>	
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-lg-6">
					<?php if ( is_active_sidebar( 'rates_pt' ) ) : ?>
						<?php dynamic_sidebar( 'rates_pt' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 col-lg-6">
					<?php if ( is_active_sidebar( 'rates' ) ) : ?>
						<?php dynamic_sidebar( 'rates' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile;  wp_reset_postdata(); endif; ?>

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

			<div class="container pt_wrap">
				<div class="row ">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post();  
					$pos = get_field('position');
					$pt_pos = "Personal Trainer";
					?>
					<?php if ($pos == $pt_pos) { ?>
					<div class="col-md-12 pt_inner">
						<div class="row">
							<div class=" col-lg-6 col-sm-12">
								<div class="left-content">
									<h4><?php the_title(); ?></h4>
									<?php the_content(); ?>
								</div>
							</div>
							<div class=" col-lg-6 col-sm-12">
								<div class="right-cont">
									<div class="staff_image pt_gallery">
										<?php
										$images = acf_photo_gallery('pt_gallery', $post->ID);
										if( count($images) ){ ?>
										<div class="owl-carousel">
											<?php	foreach($images as $image):
											$id = $image['id'];
											$title = $image['title']; 
											$full_image_url= $image['full_image_url']; 
											$alt_text = $image['title']; 
											$imageDescription = $image; 
											?>
											<div class="item">
													<img src="<?php echo $full_image_url; ?>" alt="<?php echo $alt_text; ?>" title="<?php echo $alt_text; ?>" longdesc="<?php echo $alt_text; ?>" >
													<div class="overlay">
														<div class="img_info">
															<span class="desc"><?php echo $image['caption']; ?></span>
															<strong><a href="<?php echo $full_image_url; ?>" data-imagelightbox="<?php echo $post->ID; ?>" data-ilb2-caption="<?php echo $image['caption']; ?>" class="pinktext">ENLARGE GALLERIES</a></strong>
														</div>
													</div>
											</div>
										<?php endforeach; ?>
									</div>
									<?php } else { ?>
									<?php the_post_thumbnail(array(513, 341));  ?>
									<?php }  ?>
									<?php if ($pos == $pt_pos) { ?>
									<h2><?php the_field('position'); ?></h2>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			<?php endwhile; ?> 
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>

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