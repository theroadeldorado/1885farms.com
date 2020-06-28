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
  <header
    x-data="toggleNav()"
    :class="{ ' class ': isOpen }"
    class="fixed top-0 z-50 w-full transition-all duration-300 site-header">
    <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->

    <div class="container flex items-center justify-between my-4 text-white">
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
        class="block lg:hidden"
        :class="{ '': isOpen }"
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

    <nav class="block mobile_nav lg:hidden bg-secondary-700"
      x-show="isOpen"
      x-transition:enter="opacity-0"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="opacity-100"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
    >
      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'menu-1',
          'menu_id'         => 'primary-menu',
          'menu_class'      => 'list-none flex flex-col justify-end items-end my-6',
          'list_item_class' => 'mx-6 my-4',
          'link_class'      => 'no-underline uppercase text-white text-20',
          )
        );
      ?>
    </nav>

    <script>
      const header = document.querySelector('.site-header');

      // document.addEventListener('scroll', () => {
      //   header.classList.add('bg-secondary-700', 'lg:bg-opacity-80', header.scrollTop > 200);
      // });

      function toggleNav() {
        return {
          isOpen: false,
          toggle() {
            this.isOpen = !this.isOpen;
          }
        }
      }
    </script>

  </header>
