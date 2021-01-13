<?php

/**
 * Title: Fire Section
 * Description: Builds out common functionality for our sections automatically via a few function calls
 *
 * @param Int $count The loop index in the flexible field
 * @param String $type The section type in ACF
 */
class Fire_Section {
  public function __construct($count, $type) {
    $this->count = $count;
    $type = str_replace('_', '-', $type);
    $this->type = $type;

    // Sets default classes
    $this->classes = [
      $type,
      'section',
      'section--' . $type,
      'section--' . $count,
    ];

    $this->padding = get_sub_field('padding');
  }

  /**
   * The section's ID, defaults to to `section-#`
   *
   * @return String
   */
  public function id() {
    $id = get_sub_field('id') ? get_sub_field('id') : 'section-' . $this->count;
    return sanitize_html_class($id);
  }

  /**
   * Attach additional classes to the section
   *
   * @param Array $classes Additional classes to attach
   */
  public function add_classes($classes) {
    foreach ($classes as $key => $class) {
      $this->classes[] = $class;
    }
  }

  /**
   * Builds the section's beginning markup and attaches custom gaps
   *
   * @return String
   */
  public function start() {
    $start_markup = '';
    $classes = implode(' ', $this->classes);

    // Attach custom gaps
    $start_markup .= $this::gaps()['custom_top'];

    $start_markup .= "
      <section
        id='{$this->id()}'
        class='{$classes} {$this::gaps()['classes']}'
        data-fire-component='{$this->type}'
      >
    ";

    return print $start_markup;
  }

  /**
   * Builds the section's ending markup and attaches custom gaps
   *
   * @return String
   */
  public function end() {
    $end_markup = '';
    $end_markup .= '</section>';

     // Attach custom gaps
    $end_markup .= $this::gaps()['custom_bottom'];

    return print $end_markup;
  }

  /**
   * Builds the section's gap classes and custom gap markup
   *
   * @return Array
   */
  private function gaps() {
    $gap_classes = '';

    // Grab gap field
    $padding_top = $this->padding['top'];
    $padding_bottom = $this->padding['bottom'];

    $gaps = array(
      'top' => array(
        'desktop' => 'mt-gap-' . $padding_top['desktop'],
        'tablet' => 'mdd:mt-gap-' . $padding_top['tablet'],
        'mobile' => 'smd:mt-gap-'  . $padding_top['mobile'],
      ),
      'bottom' => array(
        'desktop' => 'mb-gap-' . $padding_bottom['desktop'],
        'tablet' => 'mdd:mb-gap-' . $padding_bottom['tablet'],
        'mobile' => 'smd:mb-gap-' . $padding_bottom['mobile'],
      ),
    );

    $custom = array(
      'top' => array(
        'desktop' => $padding_top['desktop_custom'],
        'tablet' => $padding_top['tablet_custom'],
        'mobile' => $padding_top['mobile_custom'],
      ),
      'bottom' => array(
        'desktop' => $padding_bottom['desktop_custom'],
        'tablet' => $padding_bottom['tablet_custom'],
        'mobile' => $padding_bottom['mobile_custom'],
      ),
    );

    // Top classes
    if ($gaps['top']['desktop'] && !$custom['top']['desktop']) {
      $gap_classes .= ' ' . $gaps['top']['desktop'];
    }
    if ($gaps['top']['tablet'] && !$custom['top']['tablet']) {
      $gap_classes .= ' ' . $gaps['top']['tablet'];
    }
    if ($gaps['top']['mobile'] && !$custom['top']['mobile']) {
      $gap_classes .= ' ' . $gaps['top']['mobile'];
    }

    // Bottom classes
    if ($gaps['bottom']['desktop'] && !$custom['bottom']['desktop']) {
      $gap_classes .= ' ' . $gaps['bottom']['desktop'];
    }
    if ($gaps['bottom']['tablet'] && !$custom['bottom']['tablet']) {
      $gap_classes .= ' ' . $gaps['bottom']['tablet'];
    }
    if ($gaps['bottom']['mobile'] && !$custom['bottom']['mobile']) {
      $gap_classes .= ' ' . $gaps['bottom']['mobile'];
    }


    // Custom Gaps
    $custom_markup_top = '';
    if ($custom['top']['desktop']) {
      $custom_markup_top .= '<div class="hidden lg:block" aria-hidden="true" style="margin-top: '.number_format((int)$custom['top']['desktop'], 0, '', '').'px;"></div>';
    }
    if ($custom['top']['tablet']) {
      $custom_markup_top .= '<div class="hidden md:block lg:hidden" aria-hidden="true" style="margin-top: '.number_format((int)$custom['top']['tablet'], 0, '', '').'px;"></div>';
    }
    if ($custom['top']['mobile']) {
      $custom_markup_top .= '<div class="sm:hidden" aria-hidden="true" style="margin-top: '.number_format((int)$custom['top']['mobile'], 0, '', '').'px;"></div>';
    }

    $custom_markup_bottom = '';
    if ($custom['bottom']['desktop']) {
      $custom_markup_bottom .= '<div class="hidden lg:block" aria-hidden="true" style="margin-bottom: '.number_format((int)$custom['bottom']['desktop'], 0, '', '').'px;"></div>';
    }
    if ($custom['bottom']['tablet']) {
      $custom_markup_bottom .= '<div class="hidden md:block lg:hidden" aria-hidden="true" style="margin-bottom: '.number_format((int)$custom['bottom']['tablet'], 0, '', '').'px;"></div>';
    }
    if ($custom['bottom']['mobile']) {
      $custom_markup_bottom .= '<div class="sm:hidden" aria-hidden="true" style="margin-bottom: '.number_format((int)$custom['bottom']['mobile'], 0, '', '').'px;"></div>';
    }

    return [
      'classes' => $gap_classes,
      'custom_top' => $custom_markup_top,
      'custom_bottom' => $custom_markup_bottom
    ];
  }
}

?>
