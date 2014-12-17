<?php
/**
 * @package Regular
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-meta">
						<?php regular_posted_on(); ?>
					</div><!-- .entry-meta -->

	<div class="entry-content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'regular' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php regular_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
