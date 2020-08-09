<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fire
 */

?>

  <footer class="relative">
    <div
      role="img"
      aria-label="<?php echo $image_alt; ?>"
      class="absolute inset-0 bg-center bg-cover lozad -z-1"
      data-background-image="<?php echo get_stylesheet_directory_uri().'/assets/media/images/footer-bg.jpg';?>"
    ></div>
    <span class="absolute z-0 block object-cover w-full h-full overflow-hidden opacity-10 md:opacity-50"><?php include(get_template_directory() . '/assets/media/svgs/map.svg'); ?></span>
    <div class="absolute inset-0 z-0 hidden w-full h-full md:block gradient-white"></div>

    <div class="container relative z-10 pt-12 pb-4">
      <h2 class="heading-fancy text-primary-500">Call to schedule a visit</h2>
      <a class="inline-block mt-4 no-underline text-18 md:text-24 hover:underline" href="tel:3305242276">330-524-BARN</a><br>
      <div class="w-24 my-4 md:my-8 bg-primary-500 bg-opacity-30 h-2px"></div>
      <a class="inline-block no-underline md:mb-4 text-18 md:text-24 hover:underline" href="mailto:richville5553@gmail.com">richville5553@gmail.com</a><br>
      <a class="inline-block no-underline text-18 md:text-24 hover:underline" target="_blank" href="https://www.google.com/maps/place/5553+Richville+Dr+SW,+Navarre,+OH+44662/data=!4m2!3m1!1s0x8836d916bcd54fe5:0xb20ab591ec920848?sa=X&ved=2ahUKEwiq69fl2a3qAhXKZs0KHcH3ADoQ8gEwAHoECAsQAQ">5553 Richville Dr. SW Navarre, OH 44662</a>
      <div class="mt-8 text-12"><?php echo '©'.the_date('Y').' '; _e('1885 Farms', 'fire'); ?></div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
