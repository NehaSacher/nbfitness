				
		</main>
	<footer>
		<div class="footer_wrap container-fluid">
			<div class="footer_top row">
				<div class="container">
					<div class="row">
								<div class="col-lg-6 col-sm-12 foot_col">
									<?php if ( is_active_sidebar( 'foot_col_1' ) ) : ?>
										<?php dynamic_sidebar( 'foot_col_1' ); ?>
									<?php endif; ?>
								</div>
								<div class="col-lg-auto col-sm-12 foot_col">
									<?php if ( is_active_sidebar( 'foot_col_2' ) ) : ?>
										<?php dynamic_sidebar( 'foot_col_2' ); ?>
									<?php endif; ?>
								</div>
								<div class="col-lg-auto col-sm-12 foot_col">
									<?php if ( is_active_sidebar( 'foot_col_3' ) ) : ?>
										<?php dynamic_sidebar( 'foot_col_3' ); ?>
									<?php endif; ?>
								</div>
					</div>
				</div>
			</div>
			<div class="footer_middle row">
				<div class="container">
						<?php if ( is_active_sidebar( 'foot_social' ) ) : ?>
							<?php dynamic_sidebar( 'foot_social' ); ?>
						<?php endif; ?>
				</div>
			</div>
			<div class="footer_bottom row">
				<div class="container">
						<div class="copyright">
							&copy; Copyright <?php//echo date(Y); ?>2018 <a href="#"> NB Fitness Club LLC.</a> <a href="http://localhost/nbfitness/privacy-policy/"> Privacy Policy</a>
						</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<div class="slidediv">
		<div class="resp_menu_container">
			<div class="resp_menu col-sm-12">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'primary-menu' ) ); ?>
			</div>
			<div class="resp_tour col-sm-12  ">
				<a href="https://my.matterport.com/show/?m=cnkUMEVzEXd" target="_blank" class="tour_btn">Take Virtual Tour <i class="fas fa-caret-right" aria-hidden="true"></i></a>
			</div>
			<div class="resp_add col-sm-12">
				<?php if ( is_active_sidebar( 'foot_col_2' ) ) : ?>
					<?php dynamic_sidebar( 'foot_col_2' ); ?>
				<?php endif; ?>
			</div>
			<div class="resp_social col-sm-12">
				<?php if ( is_active_sidebar( 'foot_social' ) ) : ?>
					<?php dynamic_sidebar( 'foot_social' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>
</body>
</html>