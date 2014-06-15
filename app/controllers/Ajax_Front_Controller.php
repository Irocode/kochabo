<?php

class Ajax_Front_Controller extends \BaseController {
public function __construct(Deliveryzipcode $deliveryzipcode  ) {
View::share('active', 'modules');

$this->deliveryzipcode = $deliveryzipcode;

}


// AJAX Call-> Postleitzahl Check Start
public function postleitzahl_check() { 

$deliveryzipcode = Deliveryzipcode::where('id', '>', 1)->orderBy('id', 'DESC')->get();
return View::make('frontend.checkout.data', compact('deliveryzipcode'));
}
// AJAX Call->  Postleitzahl Check  END

}
