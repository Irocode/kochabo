<?php namespace App\Controllers\Admin;
use BaseController;
use Deliverytimes;
use Customer;
use Address;
use Products;
use Deliveryzipcode;
use Logisticianmanager;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
class AjaxController extends BaseController {
public function __construct(Logisticianmanager $logisticianmanager, Customer $customer,  Address $address, Deliveryzipcode $deliveryzipcode, Products $products  ) {
View::share('active', 'modules');
$this->logisticianmanager = $logisticianmanager;
$this->customer = $customer;
$this->address = $address;
$this->products = $products;
$this->deliveryzipcode = $deliveryzipcode;
}


// AJAX Call-> Index Logistmanager Start
public function getDatatable_logisticianmanager() { 
//return Logisticianmanager::all()->toArray('id','name', 'street','contactPerson','phone','email', JSON_PRETTY_PRINT); // Array dooh
	$logisticianmanager = Logisticianmanager::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
//$logisticianmanager=Logisticianmanager::all();
return View::make('backend.logisticianmanager.data', compact('logisticianmanager'));
//return View::make('backend.logisticianmanager.data');


}
// AJAX Call-> Index Logistmanager END

// AJAX Call-> Index Customer INDEX Start
public function getDatatable_customer() { 
$customer = Customer::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.customer.data', compact('customer'));
}
// AJAX Call-> Index Customer INDEX END

// AJAX Call-> Index Address INDEX Start
public function getDatatable_address() { 
$address = Address::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.address.data', compact('address'));
}
// AJAX Call-> Index Address INDEX END

// AJAX Call-> Index Address INDEX Start
public function getDatatable_products() { 
$products = Products::where('id', '>', 1)->orderBy('id', 'DESC')->get();
return View::make('backend.products.data', compact('products'));
}
// AJAX Call-> Index Address INDEX END

// AJAX Call-> Index Deliveryzipcode INDEX Start
public function getDatatable_deliveryzipcode() { 
$deliveryzipcode = Deliveryzipcode::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.deliveryzipcode.data', compact('deliveryzipcode'));
}
// AJAX Call-> Index Deliveryzipcode INDEX END




}
