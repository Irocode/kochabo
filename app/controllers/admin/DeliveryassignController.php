<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Logisticianmanager;
use Deliverytimes;
use Str;
use Notification;
use Sefa\Repositories\Deliveryassign\DeliveryassignRepository as Deliveryassign;
use Sefa\Exceptions\Validation\ValidationException;
class DeliveryassignController extends BaseController {
protected $deliveryassign;
public function __construct(Deliveryassign $deliveryassign, Logisticianmanager $logisticianmanager, Deliverytimes $deliverytimes) {
View::share('active', 'modules');
$this->deliveryassign = $deliveryassign;
$this->logisticianmanager = $logisticianmanager;
$this->deliverytimes = $deliverytimes;
}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

				{
				$deliveryassign = $this->deliveryassign->paginate(null, true);
				return View::make('backend.deliveryassign.index', compact('deliveryassign'));
				}
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()

				{
				return View::make('backend.deliveryassign.create');
				}
/**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
public function store()

				{
				try
								{
								$this->deliveryassign->create(Input::all());
								Notification::success('Logistiker Postleitzahl  wurde hinzugefügt');
								return Redirect::route('admin.deliveryassign.index');
								}
				catch(ValidationException $e)
								{
								return Redirect::back()->withInput()->withErrors($e->getErrors());
								}
				}
/**
 * Display the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function show($id)

				{
				$deliveryassign = $this->deliveryassign->find($id);
				return View::make('backend.deliveryassign.show', compact('deliveryassign'));
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function edit($id)

				{
				$logisticianmanager = Logisticianmanager::find($id);
				$deliveryzipcode = Logisticianmanager::find($id)->deliveryzipcode;
				return View::make('backend.deliveryassign.edit', compact('deliveryzipcode, logisticianmanager'));
				}
/**
 * Update the specified resource in storage.
 *
 * @param  int $id
 * @return Response
 */
public function update($id)

				{
				try
								{
								$this->deliveryassign->update($id, Input::all());
								Notification::success('Logistiker Postleitzahl wurde geändert');
								return Redirect::route('admin.customer.index');
								}
				catch(ValidationException $e)
								{
								return Redirect::back()->withInput()->withErrors($e->getErrors());
								}
				}
/**
 * Remove the specified resource from storage.
 *
 * @param  int $id
 * @return Response
 */
public function destroy($id)

				{
				$this->deliveryassign->destroy($id);
				Notification::success('Logistiker Postleitzahl wurde gelöscht');
				return Redirect::action('App\Controllers\Admin\DeliveryassignController@index');
				}
public function confirmDestroy($id)

				{
				$deliveryassign = $this->deliveryassign->find($id);
				return View::make('backend.deliveryassign.confirm-destroy', compact('deliveryassign'));
				}
public function togglePublish($id)

				{
				return $this->deliveryassign->togglePublish($id);
				}
}


