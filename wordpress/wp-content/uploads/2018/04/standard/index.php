<?php get_header(); ?>

	<div id="primary" class="content-area clear">	

		<?php get_template_part('template-parts/content', 'featured'); ?>
			
		<main id="main" class="site-main clear">

			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
				if ($paged > 1) {
			?>
			<div class="breadcrumbs clear">
				<h1>
					<?php _e( 'Latest Posts', 'standard' ); ?>
					<?php echo '('. $paged.'/'. $wp_query->max_num_pages . ')'; ?>
				</h1>	
			</div><!-- .breadcrumbs -->

			<?php 
				}
			?>

			<div id="recent-content" class="content-magazine">

				<?php

				if ( have_posts() ) :	
				
				$i = 1;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part('template-parts/content', 'magazine');

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; 

				?>

			</div><!-- #recent-content -->		

		</main><!-- .site-main -->

		<?php get_template_part( 'template-parts/pagination', '' ); ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
