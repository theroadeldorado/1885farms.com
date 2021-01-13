<?php
  $columns = get_sub_field('columns');
  $title = get_sub_field('title');

  if($columns === '1'):
    $grid_cols = 'md:grid-cols-1';
  elseif($columns === '2'):
    $grid_cols = 'md:grid-cols-2';
  elseif($columns === '3'):
    $grid_cols = 'md:grid-cols-3';
  else:
    $grid_cols = 'md:grid-cols-4';
  endif;

  $section->add_classes([
    'relative bg-white overflow-hidden'
  ]);
?>

<?php $section->start(); ?>

  <div class="container py-12 container-small">
    <?php if($title):?>
      <h2 class="mb-12 italic font-normal tracking-tight text-center normal-case text-48 text-secondary-500" data-aos='fade-up'><?php echo $title;?></h2>
    <?php endif; ?>
    <?php
    if( have_rows('list_items') ):
      echo '<div class="grid grid-cols-2 '.$grid_cols.' gap-8 row-gap-2 mx-auto mb-4 list">';
        while ( have_rows('list_items') ) : the_row(); ?>
          <div class="flex list-item" data-aos='fade-left'>
            <span class="mr-2 transform scale-90 text-accent-500">
              <?php include(get_template_directory() . '/assets/media/svgs/icon--flower.svg'); ?>
            </span>
            <?php the_sub_field("list_item");?>
          </div>
        <?php
        endwhile;
       echo '</div>';
    endif; ?>
  </div>
  <div
    role="img"
    aria-label="Background Splatter"
    class="absolute bottom-0 w-full h-64 transform -translate-x-1/2 translate-y-12 bg-cover left-1/2 lozad"
    data-background-image="<?php echo get_stylesheet_directory_uri(). '/assets/media/images/splatter.png' ?>"
  >
  </div>

<?php $section->end(); ?>
