<?php if (get_theme_mod('featured-content-on', 'true') == true ) { ?>

<?php		

	$args = array(
	'post_type'      => 'post',
	'posts_per_page' => '3',
    'meta_query' => array(
        array(
            'key'   => 'is_featured',
            'value' => 'true'
        	)
    	)				
	);

	// The Query
	$the_query = new WP_Query( $args );

	$i = 1;

	if ( $the_query->have_posts() && (!get_query_var('paged')) ) {	

?>

<div id="featured-content">

	<ul class="bxslider">	

	<?php
		// The Loop
		while ( $the_query->have_posts() ) : $the_query->the_post();
	?>	

	<li class="featured-slide hentry">

		<a class="thumbnail-link" href="<?php the_permalink(); ?>">
			
			<div class="thumbnail-wrap">
				<?php 
				if ( has_post_thumbnail() && ( get_the_post_thumbnail() != null ) ) {
					the_post_thumbnail('post_thumb');  
				} else {
					echo '<img src="' . get_template_directory_uri() . '/assets/img/no-featured.png" alt="" />';
				}
				?>
			</div><!-- .thumbnail-wrap -->
			<div class="gradient">
			</div>
		</a>

		<div class="entry-header clear">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div><!-- .entry-header -->

		<div class="entry-category">
			<?php standard_first_category(); ?>
		</div>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<span class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Continue Reading &raquo;', 'standard'); ?></a></span>
		</div><!-- .entry-summary -->

	</li><!-- .featured-slide .hentry -->


	<?php

		$i++;
		endwhile;
	?>

	</ul><!-- .bxslider -->

	</div><!-- #featured-content -->

	<?php
		} elseif  ( !$the_query->have_posts() && (!get_query_var('paged')) ) { // else has no featured posts
	?>


	<?php
		} //end if has featured posts
		wp_reset_postdata();				
	?>

	<?php } ?>