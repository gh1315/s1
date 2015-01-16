<?php
function theme_custom_template($variables) {
  $output = '<div class="custom-template-wrapper">';
  $output .=    '<div class="body">';
  $output .=      $variables['body'];
  $output .=    '</div>';
  $output .=    '<div class="title">';
  $output .=      $variables['title'];
  $output .=    '</div>';
  $output .= '</div>';
  return $output;
}
?>