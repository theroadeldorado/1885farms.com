<?php
  $gallery = get_sub_field('images');
  $copy = get_sub_field('copy');
  $bg_color = get_sub_field('background_color');
  $image_position = get_sub_field('image_position');


  $section->add_classes([
    '',
    $bg_color === 'blue' ? ' bg-secondary-500' : '',
    $bg_color === 'green' ? ' bg-primary-500' : '',
    $bg_color === 'pink' ? ' bg-accent-500' : '',
  ]);
?>

<?php $section->start(); ?>

  <div class="container flex <?php echo $image_position === 'right' ? '' : ' flex-row-reverse ';?> ">
    <div class="flex-shrink-0 w-1/2 py-12 text-white <?php echo $image_position === 'right' ? ' pr-12 ' : ' pl-12 ';?>">
      <?php echo $copy; ?>
    </div>
    <div class="<?php echo $image_position === 'right' ? ' break-container-right ' : ' break-container-left';?>">
      <?php
      if( $gallery ):
        foreach( $gallery as $image ):
          $image_alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);
        ?>
          <img src="<?php print aq_resize($image['url'], 1920, 600, true); ?>" alt="<?php echo $image_alt; ?>">
        <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>

<?php $section->end(); ?>
