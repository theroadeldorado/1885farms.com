<?php
  $copy = get_sub_field('copy');

  $section->add_classes([
    ''
  ]);
?>

<?php $section->start(); ?>
  <div class="container py-14 container-small" data-aos='fade-up'>
    <?php echo $copy; ?>
  </div>
<?php $section->end(); ?>
