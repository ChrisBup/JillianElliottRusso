<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>

<!-- loop-templates/content-single-recommendation.php -->

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">

    <?php the_title( '<h class="entry-title">', '</h>' ); ?>

  </header><!-- .entry-header -->

  <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

  <div class="entry-content">

    <?php the_content(); ?>

    <?php
    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        'after'  => '</div>',
      )
    );
    ?>

    <h3><a href="<?php echo get_post_type_archive_link('recommendation'); ?>">Back to Recommendations</a></h3>

  </div><!-- .entry-content -->

</article><!-- #post-## -->
