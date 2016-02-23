<?php
/**
 * @file
 * Code for the UHC Course Hierarchy module.
 *
 * @license GPL, or GNU General Public License, version 3
 * @license http://opensource.org/licenses/GPL-3.0
 */

/**
 * Override of theme_breadcrumb().
 *
 * Adapts breadcrumbs from styleguide.
 * @see http://universityofhelsinki.github.io/Styleguide/#section-6-5
 */
function hy_base_theme_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumbs">';
    foreach ($breadcrumb as $breadcrumb_item) {
      $output .= '<span class="breadcrumbs__item">' . $breadcrumb_item . ' </span>';
      $output .= '<span class="breadcrumbs__divider">/</span>';
    }
    $output .= '</div>';
    return $output;
  }
}
