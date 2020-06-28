<?php
  $image = get_sub_field('image');
  $image_alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);

  $title = get_sub_field('title') ? get_sub_field('title') : get_the_title();

  $section->add_classes([
    'bg-black'
  ]);
?>

<?php $section->start(); ?>

  <div class="relative">
    <div class="relative z-10 flex flex-col items-center justify-center py-32 text-center">
      <h1 class="text-white uppercase"><?php echo $title; ?></h1>
    </div>
    <div
      role="img"
      aria-label="<?php echo $image_alt; ?>"
      class="absolute inset-0 bg-center bg-cover lozad opacity-70"
      data-background-image="<?php echo aq_resize($image['url'], 1920, 600, true, true, true); ?>"
    ></div>
  </div>

<?php $section->end(); ?>
