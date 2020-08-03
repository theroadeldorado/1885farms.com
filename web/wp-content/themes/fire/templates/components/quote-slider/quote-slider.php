<?php
  $title = get_sub_field('title');
  $slider_items = get_sub_field('quotes');

  $section->add_classes([
    'bg-secondary-700',
  ]);
?>

<?php $section->start(); ?>

  <div class="relative pb-24 pt-18 md:pt-24 md:pb-40">

    <?php if ($title) : ?>
      <div class="container" data-text-theme="light">
        <h2 class="mb-12 italic font-light text-center text-white normal-case section-title balance-text"><?php print $title; ?></h2>
      </div>
    <?php endif; ?>

    <?php if( have_rows('quotes') ):?>
      <ul class="flex pb-3 pl-6 pr-6 -mb-3 overflow-hidden overflow-x-auto md:pr-0 md:pl-20 md:pl-40 quote-slider__track" data-element="track">

      <?php
      while ( have_rows('quotes') ) : the_row();?>
        <li class="flex items-center justify-center flex-shrink-0 quote-slider__slide" data-element="item">
            <a
              href="<?php the_permalink(); ?>"
              class="relative flex flex-col items-center w-full h-full py-5 text-center no-underline transition-shadow duration-300 md:flex-row hover:shadow-brand"
            >
              <div class="text-black text-body">
                <div class="relative italic font-medium text-accent-500">
                  “<?php the_sub_field('quote'); ?>”
                </div>
                <div class="mt-4 font-bold text-accent-500"> - <?php the_sub_field('author');?></div>
              </div>
            </a>
          </li>
      <?php
    endwhile;?>

    </ul>
    <?php
    endif; ?>


    <div class="container mt-12">
      <div class="flex items-center justify-center">
        <button role="button" class="relative z-10 flex flex-col items-center justify-center mx-8 font-mono font-bold text-white duration-200 transform scale-100 text-18 hover:scale-110 hover:text-accent-500" data-element="prev">
          <span class="transform rotate-180">
            <?php include(get_template_directory() . '/assets/media/svgs/icon--arrow--large.svg'); ?>
          </span>
        </button>
        <button role="button" class="relative z-10 flex flex-col items-center justify-center mx-8 font-mono font-bold text-white duration-200 transform scale-100 text-18 hover:scale-110 hover:text-accent-500" data-element="next">
          <span>
            <?php  get_template_part('assets/media/svgs/inline', 'arrow--large.svg');?>
            <?php include(get_template_directory() . '/assets/media/svgs/icon--arrow--large.svg'); ?>
          </span>
        </button>
      </div>
    </div>

  </div>


<?php $section->end(); ?>
