<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' | ', true, 'right'); ?><?php  bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content" tabindex="1">Skip to content</a>
	<div class="wrapper">
		<header>
			<div class="header_wrap container-fluid">
				<div class="top_head  d-md-block">
					<div class="tp_headinner container">
						<div class="col">
							<div class="row">
								<div class="logo col-sm">
									<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/NBFitnessClubLogo.png" alt="Nb Fitness Club" longdesc="Nb Fitness Club Logo"/>
									</a></h1>
								</div>
								
								<div class="h_add col-sm  d-none d-lg-block">
									<?php if ( is_active_sidebar( 'head_address' ) ) : ?>
										<?php dynamic_sidebar( 'head_address' ); ?>
									<?php endif; ?>
								</div>
								<div class="h_tour col-sm  d-none d-lg-block">
									<a href="https://my.matterport1234567890.com/show/?m=cnkUMEVzEXd" target="_blank" class="tour_btn">Take Virtual Tour <i class="fas fa-caret-right" aria-hidden="true"></i></a>
								</div>
								<div class="hamburger">
									<span class="line l1"></span>
									<span class="line l2"></span>
									<span class="line l3"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<nav class="main_menu row d-none d-lg-block">
					<div class="container">
						<div class="row">
							<div class="col">
								<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'primary-menu' ) ); ?>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<?php if (is_front_page()) { ?>
			<div class="home_slider ">
				<div class="slider">
					<?php
					$images = acf_photo_gallery('slides', '37');
					if( count($images) ):
						foreach($images as $image):
							$id = $image['id'];
						$title = $image['title']; 
						$full_image_url= $image['full_image_url']; 
						$alt_text = get_post_meta($id , '_wp_attachment_image_alt', true);
						?>
						<img src="<?php echo $full_image_url; ?>" alt="<?php echo $alt_text; ?>" title="<?php echo $alt_text; ?>" longdesc="<?php echo $alt_text; ?>" >
						
						<?php 
						endforeach; 
						endif; 
						?>
					</div>
				</div>
				<?php } else {
					global $post;

					?>
					<div class="page_image">
						<div class="img_slide" style="background-image: url('<?php 
							if ( has_post_thumbnail( $post->ID ) ) {
								the_post_thumbnail_url($post->ID); 
							} else { echo get_template_directory_uri();?>/images/base_img.jpg <?php }
							?>');"></div	>
						</div>
						<?php 
					} ?>

				</header>

				<main id="content">





