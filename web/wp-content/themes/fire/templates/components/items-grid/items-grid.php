<?php
  $section->add_classes([
    'py-24 container'
  ]);
?>

<?php $section->start(); ?>

  <?php
  if( have_rows('items') ):?>
    <div class="flex flex-wrap items-start justify-center">
      <?php
      while ( have_rows('items') ) : the_row();
        $image = get_sub_field('image');
        $text = get_sub_field('text'); ?>

        <div class="w-1/3 text-center">
          <div class="p-6">
            <?php if($image):?>
              <img class="mb-4 lozad" src="<?php echo aq_resize($image['url'], 800, 600, true, true, true); ?>" alt="<?php echo $image['alt'];?>">
            <?php endif; ?>
            <?php if($text):?>
              <h3 class="heading-fancy text-secondary-500 text-24 balance-text"><?php echo $text;?></h3>
            <?php endif; ?>
          </div>
        </div>
      <?php
      endwhile; ?>
    </div>
  <?php
  endif; ?>

<?php $section->end(); ?>
