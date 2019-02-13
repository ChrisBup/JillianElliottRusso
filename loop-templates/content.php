<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!-- loop-templates/content.php -->

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<header class="entry-header">

		<?php if ('post' == get_post_type() && !is_category('exhibitions')) : ?>

			<div class="entry-meta">
				<?php custom_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

		<?php
		the_title(
			sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h4>'
		);
		?>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
