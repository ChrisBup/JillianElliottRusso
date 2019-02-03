<?php
/**
 * Template Name: Homepage
 *
 * The is a custom template for the homepage.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

get_header( 'homepage' );

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper wrapper__home-hero" id="page-wrapper" style="background-image: url('<?php bloginfo('url'); ?>/wp-content/uploads/2019/01/IMG_1592.jpg');">

  <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

    <div class="row">

      <!-- Do the left sidebar check -->
      <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

      <main class="site-main site-main__homepage" id="main">

        <!-- <?php while ( have_posts() ) : the_post(); ?>

          <div class="home-hero-content">
            <h1 class="home-hero-content__title"></h1>
            <?php the_content(); ?>
          </div>

        <?php endwhile; // end of the loop. ?> -->

      </main><!-- #main -->

      <!-- Do the right sidebar check -->
      <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer( 'homepage' ); ?>
