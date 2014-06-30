<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

//class User extends \Cartalyst\Sentry\Users\Eloquent\User implements UserInterface, RemindableInterface {

class Throttle extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'throttle';



}
