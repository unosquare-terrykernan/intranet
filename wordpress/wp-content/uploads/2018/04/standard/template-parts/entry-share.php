<span class="entry-share clear">
 
	<a class="twitter social-twitter" href="https://twitter.com/intent/tweet?text=<?php echo urlencode( esc_attr( get_the_title( get_the_ID() ) ) ); ?>&amp;url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-twitter-white.png'; ?>" alt="Twitter"><span><?php esc_html_e('Tweet on Twitter', 'standard'); ?></span></a>

	<a class="facebook social-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-facebook-white.png'; ?>" alt="Facebook"><span><?php esc_html_e('Share on Facebook', 'standard'); ?></span></a>

	<a class="google-plus social-google-plus" href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-google-plus-white.png'; ?>" alt="Google+"><span>Google+</span></a>

	<a class="pinterest social-pinterest" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink( get_the_ID() ) ); ?>&amp;media=<?php echo urlencode( wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-pinterest-white.png'; ?>" alt="Pinterest"><span>Pinterest</span></a>

</span><!-- .entry-share -->
