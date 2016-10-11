<?php

namespace Drupal\link\Plugin\migrate\field\d7;

use Drupal\link\Plugin\migrate\field\LinkField as D6LinkField;

/**
 * @MigrateField(
 *   id = "link_field",
 *   core = {7},
 *   type_map = {
 *     "link_field" = "link"
 *   }
 * )
 *
 * This plugin provides the exact same functionality as the Drupal 6 "link"
 * plugin with the exception that the plugin ID "link_field" is used in the
 * field type map.
 */
class LinkField extends D6LinkField {

  /**
   * {@inheritdoc}
   */
  public function getFieldWidgetMap() {
    // By default, use the plugin ID for the widget types.
    return ['link_field' => 'link_default'];
  }

}