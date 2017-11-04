<?php
namespace Drupal\mcs_form_alter\Controller;
use Drupal\Core\Controller\ControllerBase;

class ThankU extends ControllerBase{
	public function rednderThankuPage(){
	return [
			'#theme' => 'thank_you',
			'#name' => 'Arshad Khan',
		];
	}
}