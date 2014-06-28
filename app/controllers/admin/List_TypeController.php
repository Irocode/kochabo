<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Type;
use Validator;
class List_TypeController extends BaseController {
protected $list_type;
public function __construct(List_Type $list_type) {
View::share('active', 'modules');
$this->list_type = $list_type;
}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

				{
				$list_type = $this->list_type->paginate(10);
				return View::make('backend.lists.list_type.index', compact('list_type'));
				}
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()

				{
				return View::make('backend.lists.list_type.create');
				}
/**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
public function store()

				{
				$rules = array(
								'bezeichnung' => 'required',
				);
				$validator = Validator::make(Input::all() , $rules);
				if ($validator->fails())
								{
								Notification::success('Neuer Typ konnte nicht hinzugefügt werden');
								return Redirect::route('admin.list_type.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
								}
				  else
								{
								Notification::success('Neuer Typ wurde hinzugefügt');
								$list_type = new List_Type;
								$list_type->bezeichnung = Input::get('bezeichnung');
								$list_type->save();
								return Redirect::route('admin.list_type.index');
								}
				}
/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return Response
 */
public function show($id)

				{
				//
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return Response
 */
public function edit($id)

				{
				$list_type = $this->list_type->find($id);
				return View::make('backend.lists.list_type.edit', compact('list_type'));
				}
/**
 * Update the specified resource in storage.
 *
 * @param  int  $id
 * @return Response
 */
public function update($id)

				{
				$rules = array(
								'bezeichnung' => 'required',
				);
				$validator = Validator::make(Input::all() , $rules);
				if ($validator->fails())
								{
								Notification::success('Neuer Typ konnte nicht hinzugefügt werden');
								return Redirect::route('admin.list_type.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
								}
				  else
								{
								Notification::success('Neuer Typ wurde hinzugefügt');
								$list_type = List_Type::find($id);
								$list_type->bezeichnung = Input::get('bezeichnung');
								$list_type->save();
								return Redirect::route('admin.list_type.index');
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
				$list_type = List_Type::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
				$this->list_type->destroy($id);
				Notification::success('Typ wurde gelöscht');
				return Redirect::action('App\Controllers\Admin\List_TypeController@index');
				}
public function confirmDestroy($id)

				{
				$list_type = List_Type::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
				$list_type = $this->list_type->find($id);
				return View::make('backend.lists.list_type.confirm-destroy', compact('list_type'));
				}
}


