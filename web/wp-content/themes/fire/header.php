<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fire
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="relative site">
  <header x-data="" class="fixed top-0 w-full site-header">
    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->

    <div class="container flex items-center justify-between my-4 text-white">
      <a
        :class="{ 'logo-active': isOpen }"
        class="flex-shrink-0 w-24 text-white lg:w-40"
        href="<?php echo esc_url( home_url( '/' ) ); ?>"
        rel="home"
      >
        <?php include(get_template_directory() . '/assets/media/svgs/logo.svg'); ?>
      </a>

      <nav class="" >
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'menu-1',
            'menu_id'         => 'primary-menu',
            'menu_class'      => 'list-none flex justify-end items-center',
            'list_item_class' => 'mx-4',
            'link_class'      => 'no-underline uppercase text-white text-14 hover:underline transform scale-100',
            )
          );
        ?>
      </nav>
    </div>

  </header>
