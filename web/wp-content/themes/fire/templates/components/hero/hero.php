<?php
  $image = get_sub_field('image');
  $image_alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);

  $copy = get_sub_field('copy');

  $section->add_classes([
    ''
  ]);
?>

<?php $section->start(); ?>

   <div
    role="img"
    aria-label="<?php echo $image_alt; ?>"
    class="bg-center bg-cover lozad"
    data-background-image="<?php echo aq_resize($image['url'], 1920, 600, true); ?>"
  >
    <div class="flex flex-col items-center justify-center py-32 text-center">
      <h1 class="text-white uppercase"><?php the_title();?></h1>
      <?php if($copy):?>
        <div class="mt-4 text-white text-20 heading-fancy">
          <?php echo $copy; ?>
        </div>
      <?php endif;?>
    </div>
  </div>

<?php $section->end(); ?>
