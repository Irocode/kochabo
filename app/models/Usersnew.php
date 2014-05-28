<?php

class Usersxxx extends Eloquent
{

	protected $table = 'usersxxx';

	

//hasmany
public function addressx()
	{
		return $this->hasMany ('Address', 'user_idxxx');
	}

	

//hasone

	  public function address_onex()
     {
          return $this->hasone('Addressxx');
     }









}