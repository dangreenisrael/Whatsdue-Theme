<?php
/**
 * @file
 * Theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */



function whatsdue_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
//  if (isset($form_id)) {
//    return;
//  }
//

  // Advanced settings.
//  $form['whatsdue'] = array(
//    '#type' => 'details',
//    '#title' => t('WhatsDue'),
//    '#group' => 'bootstrap',
//  );
//  $form['instant_vertical_tabs'] = array(
//    '#type' => 'vertical_tabs',
//    '#prefix' => '<h2><small>' . t('Bootstrap Clean Blog settings') . '</small></h2>',
//  );
//

//  $form['whatsdue']['header'] = array(
//    '#type' => 'fieldset',
//    '#title' => t('Site header'),
//    '#group' => 'instant_vertical_tabs',
//  );
//
//  $article_fields = \Drupal::entityManager()->getFieldDefinitions('node', 'article');
//  $image_fields = array();
//
//  if (!empty($article_fields)) {
//    foreach ($article_fields as $field_name => $field) {
//
//      if ($field->getType() !== 'image') {
//        unset($article_fields[$field_name]);
//      }
//      else {
//        $image_fields[$field_name] = $field->getLabel();
//      }
//    }
//  }

}
