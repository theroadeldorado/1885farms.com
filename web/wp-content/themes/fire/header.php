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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

  <link rel="apple-touch-icon" sizes="57x57" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/favicon-16x16.png">
<link rel="manifest" href="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://1885farms.com/wp-content/themes/fire/assets/media/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="relative site">
  <header
    x-data="toggleNav()"
    class="fixed top-0 z-50 w-full site-header">
    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->

    <div class="container z-40 flex items-center justify-between py-4 text-white" :class="{ ' show-nav ': isOpen }">
      <a
        class="flex-shrink-0 w-24 text-white lg:w-40"
        href="<?php echo esc_url( home_url( '/' ) ); ?>"
        rel="home"
      >
        <?php include(get_template_directory() . '/assets/media/svgs/logo.svg'); ?>
      </a>

      <button
        @click="toggle()"
        type="button"
        class="block transform lg:hidden focus:outline-none "
        :class="{ 'rotate-90 ': isOpen }"
      >
        <svg x-show="!isOpen" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="relative w-8 h-8"><path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"></path></svg>
        <svg x-show="isOpen" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="relative w-8 h-8"><path fill="#fff" d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"></path></svg>
      </button>

      <nav class="hidden desktop_nav lg:block" >
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'menu-1',
            'menu_id'         => 'primary-menu',
            'menu_class'      => 'list-none flex justify-end items-center',
            'list_item_class' => 'mx-4',
            'link_class'      => 'no-underline uppercase text-white text-16 transform scale-100 duration-200 block hover:scale-110',
            )
          );
        ?>
      </nav>
    </div>

    <nav class="z-30 block origin-top mobile_nav lg:hidden bg-secondary-700"
      x-show="isOpen"
      @click.away="isOpen = false"
      x-transition:enter="transform transition ease-out duration-100"
      x-transition:enter-start="-translate-y-8 transform opacity-0"
      x-transition:enter-end="transform translate-y-0 opacity-100"
      x-transition:leave="transition ease-out duration-100"
      x-transition:leave-start="transform translate-y-0 opacity-100"
      x-transition:leave-end="transform transform -translate-y-8 opacity-0"
    >
      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'menu-1',
          'menu_id'         => 'primary-menu',
          'menu_class'      => 'list-none flex flex-col justify-end items-end py-6',
          'list_item_class' => 'mx-6 my-4',
          'link_class'      => 'no-underline uppercase text-white text-20',
          )
        );
      ?>
    </nav>

    <script>
      function toggleNav() {
        const firstSection = document.querySelector('.section--1');
        const header = document.querySelector('.site-header');
        const switchAt = firstSection.offsetHeight - header.offsetHeight;


        document.addEventListener('scroll', () => {
          if(window.scrollY > switchAt){
            header.classList.add('bg-secondary-700', 'lg:bg-opacity-80');
          } else {
            header.classList.remove('bg-secondary-700', 'lg:bg-opacity-80');
          }
        });

        return {
          isOpen: false,
          toggle() {
            this.isOpen = !this.isOpen;
          }
        }
      }
    </script>

  </header>
