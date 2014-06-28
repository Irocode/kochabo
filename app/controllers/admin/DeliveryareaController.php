<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Deliveryarea\DeliveryareaRepository as Deliveryarea;
use Sefa\Exceptions\Validation\ValidationException;
class DeliveryareaController extends BaseController {
protected $deliveryarea;
public function __construct(Deliveryarea $deliveryarea) {
View::share('active', 'modules');
$this->deliveryarea = $deliveryarea;
}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

				{
				$deliveryarea = $this->deliveryarea->paginate(null, true);
				return View::make('backend.deliveryarea.index', compact('deliveryarea'));
				}
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()

				{
				return View::make('backend.deliveryarea.create');
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
								$this->deliveryarea->create(Input::all());
								Notification::success('Gebiet wurde hinzugefügt');
								return Redirect::route('admin.deliveryarea.index');
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
				$deliveryarea = $this->deliveryarea->find($id);
				return View::make('backend.deliveryarea.show', compact('deliveryarea'));
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function edit($id)

				{
				$deliveryarea = $this->deliveryarea->find($id);
				return View::make('backend.deliveryarea.edit', compact('deliveryarea'));
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
								$this->deliveryarea->update($id, Input::all());
								Notification::success('Gebiet wurde geändert');
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
				$this->deliveryarea->destroy($id);
				Notification::success('Gebiet wurde gelöscht');
				return Redirect::action('App\Controllers\Admin\DeliveryareaController@index');
				}
public function confirmDestroy($id)

				{
				$deliveryarea = $this->deliveryarea->find($id);
				return View::make('backend.deliveryarea.confirm-destroy', compact('deliveryarea'));
				}
public function togglePublish($id)

				{
				return $this->deliveryarea->togglePublish($id);
				}
}


