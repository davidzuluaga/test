<?php
namespace Drupal\test_user\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class UserRegistrationForm extends FormBase {


    public function getFormId()
    {
        return 'test_user_registration_form';
    }

    /**
     *
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['#redirect'] = FALSE;

        $form['test_user_registration']['document'] = [
            '#type' => 'textfield',
            '#required' => TRUE,
        ];

        return $form;
    }

    /**
     *
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {}

}