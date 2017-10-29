<?php

namespace  Drupal\mcs_form_alter\Controller;
use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;

class UserContctSubmit extends ControllerBase{
	public function save(){
		kint(\Drupal::request()->request->all());
		$build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
    );
		// Create node object with attached file.
$node = Node::create([
  'type'        => 'connect',
  'title'       => \Drupal::request()->request->get('email'),
  'field_full_name' => \Drupal::request()->request->get('username'),
    'field_company_name' => \Drupal::request()->request->get('company'), 
  'field_email_id' => \Drupal::request()->request->get('email'), 
  'field_m' => \Drupal::request()->request->get('password'), 
 
]);
$node->save();
  return new \Symfony\Component\HttpFoundation\RedirectResponse(\Drupal::url('<front>'));
 // don't send the response yourself inside controller and form.
//return;
  }
	
}