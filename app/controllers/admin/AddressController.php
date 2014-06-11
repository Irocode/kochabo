<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Address\AddressRepository as Address;
use Sefa\Exceptions\Validation\ValidationException;
class AddressController extends BaseController {
protected $address;
public function __construct(Address $address) {
View::share('active', 'modules');
$this->address = $address;
}
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index() {
$address = $this->address->paginate(null, true);
return View::make('backend.address.index', compact('address'));
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create() {
return View::make('backend.address.create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store() {
try {
$this->address->create(Input::all());
Notification::success('Adresse wurde hinzugefügt');
return Redirect::route('admin.address.index');
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
	$address = $this->address->find($id);

return View::make('backend.address.show', compact('address'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int $id
* @return Response
*/
public function edit($id) {       
$address = $this->address->find($id);
return View::make('backend.address.edit', compact('address'))
;
}
/**
* Update the specified resource in storage.
*
* @param  int $id
* @return Response
*/
public function update($id) {
try {
$this->address->update($id, Input::all());
Notification::success('Adresse wurde geändert');
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
$this->address->destroy($id);
Notification::success('Adresse wurde gelöscht');
return Redirect::action('App\Controllers\Admin\AddressController@index');
}
public function confirmDestroy($id) {
$address = $this->address->find($id);
return View::make('backend.address.confirm-destroy', compact('address'));
}
public function togglePublish($id) {
return $this->address->togglePublish($id);
}
}