<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Searchbackenddeliveryzipcode;
use Notification;
use Sefa\Repositories\Deliveryzipcode\DeliveryzipcodeRepository as Deliveryzipcode;
use Sefa\Repositories\Logisticianmanager\LogisticianmanagerRepository as Logisticianmanager;
use Sefa\Exceptions\Validation\ValidationException;
class DeliveryzipcodeController extends BaseController {
protected $deliveryzipcode;
protected $logisticianmanager;
public function __construct(Deliveryzipcode $deliveryzipcode, Logisticianmanager $logisticianmanager) {
View::share('active', 'modules');
$this->deliveryzipcode = $deliveryzipcode;
$this->logisticianmanager = $logisticianmanager;
}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

				{
				$deliveryzipcode = $this->deliveryzipcode->paginate(150, true);
				return View::make('backend.deliveryzipcode.index', compact('deliveryzipcode'));
				}
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()

				{
				return View::make('backend.deliveryzipcode.create');
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
								$this->deliveryzipcode->create(Input::all());
								$zip = Input::get('zip');
								// Notification::warning($zip);
								// Notification::success('Postleitzahl wurde hinzugefügt');
								return Redirect::back();
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
				$deliveryzipcode = $this->deliveryzipcode->find($id);
				return View::make('backend.deliveryzipcode.show', compact('deliveryzipcode'));
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function edit($id)

				{
				$deliveryzipcode = $this->deliveryzipcode->find($id);
				return View::make('backend.deliveryzipcode.edit', compact('deliveryzipcode'));
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
								$this->deliveryzipcode->update($id, Input::all());
								Notification::success('Postleitzahl wurde geändert');
								return Redirect::route('admin.deliveryzipcode.index');
								}
				catch(ValidationException $e)
								{
								return Redirect::back()->withInput()->withErrors($e->getErrors());
								}
				}
/**
 * Remove the specified resource from storage.
 *
 * @param  int $id, user_id
 * @return Response
 */
public function destroy($id)

				{
				$this->deliveryzipcode->destroy($id);
				Notification::success('Postleitzahl wurde gelöscht');
				return Redirect::action('App\Controllers\Admin\DeliveryzipcodeController@index');
				// return View::make('backend.logisticianmanager.edit', compact('deliveryzipcode'))
				// $user_id=186;
				// Mit Anker gesetzt
				return Redirect::route('admin.edit_deliveryzipcode.index', array(
								$user_id
				));
				// return Redirect::to('logisticianmanager_sefa_free_Controller@edit', array($id->id));
				// return Redirect::action('Logisticianmanager_sefa_free_Controller@index', array($id->id));
				}
public function confirmDestroy($id)

				{
				$deliveryzipcode = $this->deliveryzipcode->find($id);
				return View::make('backend.deliveryzipcode.confirm-destroy', compact('deliveryzipcode'));
				}
public function lieferPostleitzahlen_update($id)

				{
				$this->deliveryzipcode->update($id, Input::all());
				return $this->deliveryzipcode->lieferPostleitzahlen_update($id);
				}
}


