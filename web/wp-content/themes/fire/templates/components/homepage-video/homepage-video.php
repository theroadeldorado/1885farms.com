

<?php
  $copy = get_sub_field('copy');

  $section->add_classes([
    ''
  ]);
?>

<?php $section->start(); ?>
<div class="relative w-screen h-screen bg-black">
  <div class="h-full full">
    <video
      class="object-cover w-full h-full opacity-80"
      poster="<?php echo get_stylesheet_directory_uri(). '/assets/media/images/poster.jpg' ?>"
      autoplay muted loop
    >
      <source src="<?php echo get_stylesheet_directory_uri(). '/assets/media/videos/the-barn.webm' ?>" type="video/webm">
      <source src="<?php echo get_stylesheet_directory_uri(). '/assets/media/videos/the-barn.mp4' ?>" type="video/mp4">
    </video>
  </div>
  <span class="absolute z-10 w-64 h-auto text-white transform -translate-x-1/2 -translate-y-1/2 md:w-112 top-1/2 left-1/2">
    <?php include(get_template_directory() . '/assets/media/svgs/hero.svg'); ?>
  <span>
</div>
<?php $section->end(); ?>
