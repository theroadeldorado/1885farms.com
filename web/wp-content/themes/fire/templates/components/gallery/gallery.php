<?php
  $title = get_sub_field('title');
  $gallery = get_sub_field('gallery');

  $section->add_classes([
    'relative bg-white overflow-hidden'
  ]);
?>

<?php $section->start(); ?>
  <div class="container">
    <h2 class="my-12 italic font-normal tracking-tight text-center normal-case text-48 text-secondary-500"><?php echo $title;?></h2>
    <?php
    if( $gallery ): ?>
      <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
        <?php
        foreach( $gallery as $image ):
          $image_alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);?>
          <div class="relative aspect-ratio-4/3">
            <img class="absolute object-cover w-full h-full" src="<?php print aq_resize($image['url'], 600, 600, true, true, true); ?>" alt="<?php print $image_alt; ?>">
          </div>
        <?php
        endforeach;?>
      </div>
    <?php
    endif;
    ?>
  </div>
  <div
    role="img"
    aria-label="Background Splatter"
    class="absolute bottom-0 w-full h-64 transform -translate-x-1/2 translate-y-12 bg-cover left-1/2 lozad"
    data-background-image="<?php echo get_stylesheet_directory_uri(). '/assets/media/images/splatter.png' ?>"
  >
  </div>
<?php $section->end(); ?>
