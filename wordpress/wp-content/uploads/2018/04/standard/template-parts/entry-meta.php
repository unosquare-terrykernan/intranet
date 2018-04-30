<div class="entry-meta">

	<span class="entry-author"><?php the_author_posts_link(); ?></span> 
	<span class="entry-date"><?php echo get_the_date('M d, Y'); ?></span>
	<span class="entry-comment"><?php comments_popup_link( __('0 Comments','standard'), __('1 Comment', 'standard'), __('% Comments', 'standard'), 'comments-link', __('comments off', 'standard'));?></span>

</div><!-- .entry-meta -->