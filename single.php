<?php
/**
 * The template for displaying all single posts.
 *
 * @package Regular
 */

get_header(); ?>

	<div id="primary" class="content-area">



		<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
			<div class="splash" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url('<?php echo $large_image_url[0] ?>')">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>
			<main id="main" class="site-main" role="main">
			<?php } else {
			?>
					<main id="main" class="site-main" role="main">
			<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			<?php } ?>


			<?php get_template_part( 'content', 'single' ); ?>


			<h3 class="center-lined"><span>Share This Article</span></h3>
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="addthis_sharing_toolbox"></div>


			<?php $orig_post = $post;
			global $post;
			$categories = get_the_category($post->ID);
			if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
			$args=array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=> 3, // Number of related posts that will be shown.
			'caller_get_posts'=>1
			);
			$my_query = new wp_query( $args );
			if( $my_query->have_posts() ) {
			echo '<div id="related_posts"><h3 class="center-lined"><span>Related Posts</span></h3><ul>';
			while( $my_query->have_posts() ) {
			$my_query->the_post(); ?>
			<li><div class="relatedthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
			<div class="relatedcontent">
			<h3 class="entry-title"><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php the_time('M j, Y') ?>
			</div>
			</li>
			<?php
			}
			echo '</ul></div>';
			}
			}
			$post = $orig_post;
			wp_reset_query(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

						<?php regular_post_nav(); ?>

			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5489c31f06c02aa6" async="async"></script>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
