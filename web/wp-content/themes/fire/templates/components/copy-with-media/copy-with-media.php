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

  <div class="container flex flex-wrap md:flex-no-wrap <?php echo $image_position === 'right' ? '' : ' flex-row-reverse ';?> ">
    <div class="flex-shrink-0 smd:order-2 w-full md:w-1/2 py-8 md:py-16 text-white <?php echo $image_position === 'right' ? ' pr-10 md:pr-16 ' : ' pr-10 md:pl-16 ';?>" <?php echo $image_position === 'right' ? "data-aos='fade-right'" : "data-aos='fade-left'" ;?>>
      <?php echo $copy; ?>
    </div>
    <div class="smd:-mx-4 smd:order-1 <?php echo $image_position === 'right' ? ' md:break-container-right ' : ' md:break-container-left';?>">
      <?php
      if( $gallery ): ?>
        <div class="relative w-full h-64 md:h-full md:w-1/2vw" data-element="slider">
          <?php foreach( $gallery as $image ):
            $image_alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);
          ?>
            <img class="w-full h-auto md:object-cover md:h-full" src="<?php print aq_resize($image['url'], 1200, 800, true, true, true); ?>" alt="<?php print $image_alt; ?>">
          <?php
          endforeach;?>
        </div>
      <?php
      endif;
      ?>
    </div>
  </div>

<?php $section->end(); ?>
