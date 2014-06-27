<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use OrderDetail;
use OrderAddress;
use Sefa\Exceptions\Validation\ValidationException;
class OrderDetailController extends BaseController {
protected $order_detail_detail;
public function __construct(OrderDetail $order_detail, OrderAddress $order_address) {
View::share('active', 'modules');
$this->order_detail = $order_detail;
$this->order_address = $order_address;

}
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index() {
$order_detail = $this->order_detail->paginate(null, true);
return View::make('backend.order_detail.index', compact('order_detail'));
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create() {
return View::make('backend.order_detail.create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store() {
try {
$this->order_detail->create(Input::all());
Notification::success('Bestellung wurde hinzugefügt');
return Redirect::route('admin.order_detail.index');
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
	$order_detail = $this->order_detail->find($id);

return View::make('backend.order_detail.show', compact('order_detail'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int $id
* @return Response
*/
public function group($id) { 
$order = $this->order_detail->find($id);
$order_address = $this->order_detail->find($id)->order_address;
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
$this->order_detail->update($id, Input::all());
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
$this->order_detail->destroy($id);
Notification::success('Bestellung wurde gelöscht');
return Redirect::action('App\Controllers\Admin\OrderController@index');
}
public function confirmDestroy($id) {
$order_detail = $this->order_detail->find($id);
return View::make('backend.order_detail.confirm-destroy', compact('order_detail'));
}
public function togglePublish($id) {
return $this->order_detail->togglePublish($id);
}
}