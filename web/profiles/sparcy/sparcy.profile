<?php

/**
 * @file
 * Sparcy installation profile.
 */

use Drupal\Core\Form\FormStateInterface;

define('SITE_UUID', '65f9c21a-d0ec-4089-86de-9d7d15ac074d');

/**
 * Implements hook_form_FORM_ID_alter().
 */
function sparcy_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
  $form['#submit'][] = 'sparcy_form_install_configure_submit';
}

/**
 * Submission handler for post processes.
 */
function sparcy_form_install_configure_submit($form, FormStateInterface $form_state) {
  // Set up the site uuid to make sure config import works on any instance.
  $config_factory = \Drupal::configFactory();
  $config_factory->getEditable('system.site')->set('uuid', SITE_UUID)->save();
  // Flush all persistent caches, reset all variables,
  // and rebuild all data structures.
  drupal_flush_all_caches();
}
