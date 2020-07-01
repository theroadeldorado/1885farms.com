<?php
  $title = get_sub_field('title');
  $gallery = get_sub_field('gallery');

  $section->add_classes([
    'relative bg-white overflow-hidden'
  ]);
?>

<?php $section->start(); ?>
  <div class="container">
    <h2 class="mt-12 mb-6 italic font-normal tracking-tight text-center normal-case text-48 text-secondary-500"><?php echo $title;?></h2>
    <?php
    if( $gallery ): ?>
      <div class="grid grid-cols-2 gap-4 py-6 md:grid-cols-4">
        <?php
        foreach( $gallery as $image ):
          $image_alt = get_post_meta($image['ID'] , '_wp_attachment_image_alt', true);?>
          <div class="relative transition-all duration-300 transform scale-100 aspect-ratio-square hover:shadow-800 hover:scale-105">
            <a class="absolute object-cover w-full h-full" href="<?php print aq_resize($image['url'], 1200, 800, true); ?>" data-fancybox="<?php echo $title;?>" <?php echo $image['caption'] ? 'data-caption="'.$image['caption'].'"' : '' ; ?>>
              <img src="<?php print aq_resize($image['url'], 600, 600, true, true, true); ?>" alt="<?php print $image_alt; ?>">
            </a>

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
    class="absolute bottom-0 w-full h-64 transform -translate-x-1/2 translate-y-12 bg-cover left-1/2 lozad -z-1"
    data-background-image="<?php echo get_stylesheet_directory_uri(). '/assets/media/images/splatter.png' ?>"
  >
  </div>
<?php $section->end(); ?>
