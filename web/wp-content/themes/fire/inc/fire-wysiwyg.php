<?php
  /*
  * Adds custom css styles for wysiwyg editor
  */
  function plugin_mce_css( $mce_css ) {
    if ( !empty( $mce_css ) ) {
      $mce_css = '/wp-content/themes/fire/dist/styles.css';
      return $mce_css;
    }
  }
  add_filter( 'mce_css', 'plugin_mce_css' );

  /*
  * Adds container to MCE body class attr
  */
  function wpse_128380_tinymce_body_class( $mce ) {
    $mce['body_class'] .= ' container';

    return $mce;
  }
  add_filter( 'tiny_mce_before_init', 'wpse_128380_tinymce_body_class' );


  /*
  * adds Formats dropdown to basic and full wysiwyg toolbars
  */
  function fire_custom_toolbar($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
  }
  add_filter('mce_buttons_2', 'fire_custom_toolbar');

  /*
  * Defines custom format options
  */
  function custom_format_styles($config) {
    $temp_array = array(
      array(
        'title' => 'Font Style Presets',
        'items' => array(
          array(
            'title' => 'Heading Cursive',
            'selector' => 'p, a, h1, h2, h3, h4, h5, h6, li, span',
            'classes' => 'heading-fancy'
          ),
        ),
      ),
      array(
        'title' => 'Buttons',
        'items' => array(
          array(
            'title' => 'Pink',
            'selector' => 'a',
            'classes' => 'button button-accent'
          ),
          array(
            'title' => 'Green',
            'selector' => 'a',
            'classes' => 'button button-primary'
          ),
          array(
            'title' => 'Blue',
            'selector' => 'a',
            'classes' => 'button button-secondary'
          ),
          array(
            'title' => 'Pink Outlined',
            'selector' => 'a',
            'classes' => 'button button-accent button-accent-outlined'
          ),
          array(
            'title' => 'Green Outlined',
            'selector' => 'a',
            'classes' => 'button button-primary button-primary-outlined'
          ),
          array(
            'title' => 'Blue Outlined',
            'selector' => 'a',
            'classes' => 'button button-secondary button-secondary-outlined'
          ),
        ),
      ),
      array(
        'title' => 'Border Bottom',
        'selector' => 'p, a, h1, h2, h3, h4, h5, h6, li, span',
        'classes' => 'border-bottom'
      ),
      array(
        'title' => 'Balance Text',
        'selector' => 'p, a, h1, h2, h3, h4, h5, h6, li, span',
        'classes' => 'balance-text'
      ),

    );
    $config['style_formats'] = json_encode( $temp_array );
    return $config;
  }
  add_filter('tiny_mce_before_init', 'custom_format_styles');

  function wpse33318_tiny_mce_before_init( $mce_init ) {
    $mce_init['cache_suffix'] = 'v='.time();

    return $mce_init;
  }
  add_filter( 'tiny_mce_before_init', 'wpse33318_tiny_mce_before_init' );

?>
