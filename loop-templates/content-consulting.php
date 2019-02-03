<?php
/**
 * Consulting page partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>

<!-- loop-templates/content-consulting.php -->

<?php if( have_rows('consulting_block') ): ?>

  <?php while( have_rows('consulting_block') ): the_row(); 

    // ACF vars
    $title = get_sub_field('consulting_block_title');
    $date = get_sub_field('consulting_block_date');
    $image = get_sub_field('consulting_block_image');

    ?>

    <article class="acf-block">

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

      <header class="entry-header acf-title">
        
        <div class="entry-meta">
          <span class="posted-on"><?php echo $date; ?></span>
        </div>
        
        <?php echo $title; ?>

      </header><!-- .entry-header -->

    </article>

  <?php endwhile; ?>

<?php endif; ?>