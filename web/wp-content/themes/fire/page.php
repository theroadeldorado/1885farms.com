<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fire
 */

get_header();

?>

  <main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
      the_post();
        $image_url = get_the_post_thumbnail_url();
        $image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
        ?>

        <div
          role="img"
          aria-label="<?php print $image_alt; ?>"
          class="bg-center bg-cover lozad"
          data-background-image="<?php print aq_resize($image_url, 540, 360, true); ?>"
        >
          <h1 class="py-32 text-center text-white uppercase"><?php the_title();?></h1>
        </div>

      <?php get_template_part( 'templates/content', 'page' );

    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->

<?php
get_footer();
