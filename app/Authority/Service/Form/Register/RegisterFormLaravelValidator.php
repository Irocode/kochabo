<?php namespace Authority\Service\Form\Register;

use Authority\Service\Validation\AbstractLaravelValidator;



class RegisterFormLaravelValidator extends AbstractLaravelValidator {
	
	/**
	 * Validation rules
	 *
	 * @var Array 
	 */
	protected $rules = array(
		'gender' => 'required', 
		
		'first_name' => 'required',
		'last_name' => 'required',
		'telephone' => 'numeric',
		'email' => 'required|min:4|max:52|email',
		'password' => 'required|min:6|confirmed',
		'password_confirmation' => 'required',		
     'day' => 'required',
    'month' => 'required',
	'year' => 'required',
	'check_yes' => 'accepted',



	
	);

	/**
	 * Custom Validation Messages
	 *
	 * @var Array 
	 */
	protected $messages = array(
		//'email.required' => 'An email address is required.'
	);
}