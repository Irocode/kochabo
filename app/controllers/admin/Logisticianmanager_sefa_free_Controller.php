<?php namespace App\Controllers\Admin;
use BaseController;
use Deliverytimes;
use Deliveryzipcode;
use Logisticianmanager;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
class Logisticianmanager_sefa_free_Controller extends BaseController {
public function __construct(Logisticianmanager $logisticianmanager  ) {
View::share('active', 'modules');
$this->logisticianmanager = $logisticianmanager;

}


/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

				{
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function group($id)

				{
				// Bezeihung Many Belongs
				$logisticianmanager = Logisticianmanager::find($id);
				$deliveryzipcode = Logisticianmanager::find($id)->deliveryzipcode;
				$deliverytimes = Logisticianmanager::find($id)->deliverytimes;
				return View::make('backend.logisticianmanager.group_sefa_free', compact('logisticianmanager', 'deliveryzipcode', 'deliverytimes'));
				}
public function group_assign($id)

				{
				// $logisticianmanager = Logisticianmanager::with('deliveryzipcode')->get();
				// Alle holen und damit anzeigen
				//
				$logisticianmanager = Logisticianmanager::find($id);
				$deliveryzipcode = Logisticianmanager::find($id)->deliveryzipcode;
				$logisticianmanager_all = Logisticianmanager::all();
				$deliveryzipcode_all_nulls = Deliveryzipcode::where('user_id', '=', 0)->get();
				return View::make('backend.deliveryassign.group_sefa_free', compact('logisticianmanager', 'deliveryzipcode', 'logisticianmanager_all', 'deliveryzipcode_all_nulls'));
				}
// deliveryassign AJAX CALL
public function zip_repository_update()

				{
				$id = Deliveryzipcode::find(Input::get('id'));
				$deliveryzipcode = Deliveryzipcode::find(Input::get('id'));
				$deliveryzipcode->user_id = Input::get('user_id');
				$deliveryzipcode->save();
				return $id;
				// return View::make('backend.ajax.ajax_calls.deliveryassign.draggable', compact('logisticianmanager','deliveryzipcode','deliveryzipcodeall'));
				}
// deliveryassign AJAX CALL
public function zip_logistiker_update()

				{
				$id = Deliveryzipcode::find(Input::get('id'));
				$deliveryzipcode = Deliveryzipcode::find(Input::get('id'));
				$deliveryzipcode->user_id = '0';
				$deliveryzipcode->save();
				return $id;
				}
// AJAX Calls-> deliverycalendar Ende

/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()

				{
				}
/**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
public function store()

				{
				}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function edit($id)

				{
				}
/**
 * Update the specified resource in storage.
 *
 * @param  int $id
 * @return Response
 */
public function update($id)

				{
				}
/**
 * Remove the specified resource from storage.
 *
 * @param  int $id
 * @return Response
 */
public function destroy($id)

				{
				}
}


