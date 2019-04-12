<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 *
 */

get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
  <?php

  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', 'single' );
    $myArgs = array(
      'post_type' => 'shots'
    );

    if ( get_field( 'date_taken' ) ) {
      echo '<p><strong>Date taken:  </strong>' . get_field( 'date_taken' ) . '</p>';
    }

    // End of the loop.
  endwhile;
  ?>


  </main><!-- .site-main -->

  <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
