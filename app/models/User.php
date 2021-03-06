<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//class User extends \Cartalyst\Sentry\Users\Eloquent\User implements UserInterface, RemindableInterface {

class Users extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public function order()
	{
		return $this->hasMany ('Order', 'customercustomer_id')->orderBy('customercustomer_id', 'ASC');
	}

    public function address()
	{
		return $this->hasMany ('Address', 'customercustomer_id')->orderBy('customercustomer_id', 'ASC');
	}

public function customersgroups()
	{
		return $this->hasMany ('CustomersGroups', 'customers_groups_id')->orderBy('customers_groups_id', 'ASC');
	}



}
