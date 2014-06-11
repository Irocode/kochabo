<?php namespace App\Controllers\Admin;
use BaseController;
use Deliverytimes;
use Customer;
use Address;
use Order;
use Products;
use Users;
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
public function __construct(Order $order,Users $users, Logisticianmanager $logisticianmanager, Customer $customer,  Address $address, Deliveryzipcode $deliveryzipcode, Products $products  ) {
View::share('active', 'modules');
$this->logisticianmanager = $logisticianmanager;
$this->customer = $customer;
$this->address = $address;
$this->products = $products;
$this->deliveryzipcode = $deliveryzipcode;
$this->users = $users;
$this->order = $order;
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
public function getDatatable_address($id) { 
$address = Address::where('customercustomer_id', '=', $id)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.address.data', compact('address'));
}
// AJAX Call-> Index Address SHOW END
// AJAX Call-> Index Address (ALLE) INDEX Start
public function getDatatable_address_all() { 
$address = Address::where('customercustomer_id', '>', 0)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.address.data', compact('address'));
}
// AJAX Call-> Index Address INDEX END


// AJAX Call-> Index products INDEX Start
public function getDatatable_products() { 
$products = Products::where('id', '>', 1)->orderBy('id', 'DESC')->get();
return View::make('backend.products.data', compact('products'));
}
// AJAX Call-> Index products INDEX END

// AJAX Call-> Index Deliveryzipcode INDEX Start
public function getDatatable_deliveryzipcode() { 
$deliveryzipcode = Deliveryzipcode::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.deliveryzipcode.data', compact('deliveryzipcode'));
}
// AJAX Call-> Index Deliveryzipcode INDEX END

// AJAX Call-> Index Order INDEX Start
public function getDatatable_order() { 
$order = Order::where('order_id', '>', 0)->orderBy('updated_at', 'DESC')->get();
return View::make('backend.order.data', compact('order'));
}
// AJAX Call-> Index Order INDEX END


// AJAX Call-> Index Address INDEX Start
public function getDatatable_customer_management() { 
$users = Users::where('id', '>', 1)->orderBy('id', 'DESC')->get();
return View::make('backend.customer_management.data', compact('users'));
}
// AJAX Call-> Index Address INDEX END

}
