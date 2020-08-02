<?php
  $title = get_sub_field('title');
  $slider_items = get_sub_field('quotes');

  $section->add_classes([
    '',
  ]);
?>

<?php $section->start(); ?>

  <div class="relative pb-24 pt-18 md:pt-24 md:pb-40">

    <?php if ($title) : ?>
      <div class="container" data-text-theme="light">
        <h2 class="mb-20 text-center section-title"><?php print $title; ?></h2>
      </div>
    <?php endif; ?>

    <?php if ($slider_items) : ?>
      <ul class="flex pb-3 pl-6 pr-6 -mb-3 overflow-hidden overflow-x-auto md:pr-0 md:pl-20 md:pl-40 posts-slider__track" data-element="track">
        <?php foreach ($slider_items as $key => $item) : ?>
          <?php
            $id = $item->ID;
          ?>
          <li class="flex items-center flex-shrink-0 posts-slider__slide" data-element="item">
            <a
              href="<?php echo get_permalink($id); ?>"
              class="relative flex flex-col items-center w-full h-full p-5 no-underline transition-shadow duration-300 bg-white md:flex-row hover:shadow-brand"
            >

              <div class="text-black text-body"><?php echo get_the_title($id); ?></div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="container mt-12">
      <div class="flex items-center justify-center">
        <button role="button" class="relative z-10 flex flex-col items-center justify-center mx-8 font-mono font-bold text-white duration-200 transform scale-100 text-18 hover:scale-110 hover:text-accent-pink-500" data-element="prev">
          <span class="transform rotate-180">
            <?php  get_template_part('assets/media/svgs/inline', 'arrow--large.svg');?>
          </span>
        </button>
        <button role="button" class="relative z-10 flex flex-col items-center justify-center mx-8 font-mono font-bold text-white duration-200 transform scale-100 text-18 hover:scale-110 hover:text-accent-pink-500" data-element="next">
          <span>
            <?php  get_template_part('assets/media/svgs/inline', 'arrow--large.svg');?>
          </span>
        </button>
      </div>
    </div>

  </div>


<?php $section->end(); ?>
