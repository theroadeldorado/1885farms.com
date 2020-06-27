<?php
  $columns = get_sub_field('columns');
  $title = get_sub_field('title');
  $grid_cols = '';
  $grid_cols = $columns === '1' ? 'grid-cols-1' : '';
  $grid_cols = $columns === '2' ? 'grid-cols-2' : '';
  $grid_cols = $columns === '3' ? 'grid-cols-3' : '';
  $grid_cols = $columns === '4' ? 'grid-cols-4' : '';
  $section->add_classes([
    'relative bg-white'
  ]);
?>

<?php $section->start(); ?>
  <div class="container">
    <h2 class="my-12 italic font-normal tracking-tight text-center normal-case text-48 text-secondary-500"><?php echo $title;?></h2>
    <?php
    if( have_rows('list_items') ):
      echo '<div class="grid '.$grid_cols.' gap-8 row-gap-2 mx-auto mb-12 list max-w-800">';
        while ( have_rows('list_items') ) : the_row(); ?>
          <div class="flex list-item">
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
