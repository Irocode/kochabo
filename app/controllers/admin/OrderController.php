<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Order_Status_History;
use OrderAddress;
use Sefa\Repositories\Order\OrderRepository as Order;
use Sefa\Exceptions\Validation\ValidationException;
class OrderController extends BaseController {
protected $order;
public function __construct(Order $order, Order_Status_History $order_status_history,  OrderAddress $order_address) {
View::share('active', 'modules');
$this->order = $order;
$this->order_status_history = $order_status_history;

$this->order_address = $order_address;

}
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index() {
$order = $this->order->paginate(null, true);
return View::make('backend.order.index', compact('order'));
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create() {
return View::make('backend.order.create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store() {
try {
$this->order->create(Input::all());
Notification::success('Bestellung wurde hinzugefügt');
return Redirect::route('admin.order.index');
} catch (ValidationException $e) {
return Redirect::back()->withInput()->withErrors($e->getErrors());
}
}
/**
* Display the specified resource.
*
* @param  int $id
* @return Response
*/
public function show($id) {
	$order = $this->order->find($id);

return View::make('backend.order.show', compact('order'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int $id
* @return Response
*/
public function edit($id) {       
$order = $this->order->find($id);



$order_status_history = $this->order->find($id)->order_status_history;

$order_address = $this->order->find($id)->order_address;


return View::make('backend.order.edit', compact('order','order_address'));
}
/**
* Update the specified resource in storage.
*
* @param  int $id
* @return Response
*/
public function update($id) {
try {
$this->order->update($id, Input::all());
Notification::success('Bestellung wurde geändert');
return Redirect::route('admin.customer.index');
} catch (ValidationException $e) {
return Redirect::back()->withInput()->withErrors($e->getErrors());
}
}
/**
* Remove the specified resource from storage.
*
* @param  int $id
* @return Response
*/
public function destroy($id) {
$this->order->destroy($id);
Notification::success('Bestellung wurde gelöscht');
return Redirect::action('App\Controllers\Admin\OrderController@index');
}
public function confirmDestroy($id) {
$order = $this->order->find($id);
return View::make('backend.order.confirm-destroy', compact('order'));
}
public function togglePublish($id) {
return $this->order->togglePublish($id);
}
}