<?php
/**
 * @file
 * Contains \Drupal\amazing_forms\Form\ContributeForm.
 */

namespace Drupal\ip_locator_with_splash\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Contribute form.
 */
class IpLocatorConfigurationForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ip_locator_with_splash_ip_locator_configuration_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    # Delete all the files in imported_xml directory.

    /*$form['create_link'] = array(
      '#type' => 'link',
      '#title' => t('Add new website url'),
      '#href' => 'admin/config/system/ip-locator-configuration/create',
      '#attributes' => array('id' => 'ip-locator-create-link'),
    );
    // Count result.
    $count_nodes = db_query('SELECT id FROM {country_url_data}')->rowCount();
    if ($count_nodes > 0) {
      $form['ip_locator'] = array(
        '#type' => 'fieldset',
        '#title' => t('IP Locator Configuration'),
        '#description' => t('Allocate websites url according to their country code.'),
        '#collapsible' => TRUE,
        '#collapsed' => FALSE,
      );
      // Get all records.
      $sql = "Select * from {country_url_data}";
      $result = db_query($sql);
      foreach ($result as $val) {
        $form['ip_locator'][$val->country_code] = array(
          '#title' => check_plain($val->country_label),
          '#type' => 'textfield',
          '#default_value' => $val->website_url,
          '#required' => TRUE,
        );
        $id = $val->id;
        $form['ip_locator']['delete-' . $val->country_code] = array(
          '#type' => 'link',
          '#title' => t('Delete'),
          '#href' => 'admin/config/system/ip-locator-configuration/' . $id . '/delete',
          '#attributes' => array('id' => 'ip-locator-delete-link'),
        );
      }
    }
    else {
      $form['ip_locator_help'] = array(
        '#markup' => '<div class="ip-locator-help">No result found.</div>',
      );
    }
    $form['actions'] = array('#type' => 'actions');
    $form['actions']['submit'] = array('#type' => 'submit', '#value' => 'Update');*/
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }
}
