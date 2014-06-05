<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Recipe_type;
use Validator;
class List_Recipe_typeController extends BaseController {
protected $list_recipe_type;
public function __construct(List_Recipe_type $list_recipe_type) {
View::share('active', 'modules');
$this->list_recipe_type = $list_recipe_type;
}
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{ 

$list_recipe_type = $this->list_recipe_type->paginate(10);
return View::make('backend.lists.list_recipe_type.index', compact('list_recipe_type'));
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
return View::make('backend.lists.list_recipe_type.create');
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
$validator = Validator::make(Input::all(), $rules);
if ($validator->fails()) {
Notification::success('Neues Rezept Typ konnte nicht hinzugefügt werden');
return Redirect::route('admin.list_recipe_type.create')
->withErrors($validator)
->withInput(Input::except('bezeichnung'));
} 
else {
Notification::success('Neues Rezept Typ wurde hinzugefügt');
	$list_recipe_type = new List_Recipe_type;
	$list_recipe_type->bezeichnung = Input::get('bezeichnung');
	$list_recipe_type->save();
return Redirect::route('admin.list_recipe_type.index');
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
$list_recipe_type = $this->list_recipe_type->find($id);
return View::make('backend.lists.list_recipe_type.edit', compact('list_recipe_type'));
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
$validator = Validator::make(Input::all(), $rules);
if ($validator->fails()) {
Notification::success('Neuer Rezept Typ konnte nicht hinzugefügt werden');
return Redirect::route('admin.list_recipe_type.edit')
->withErrors($validator)
->withInput(Input::except('bezeichnung'));
} 
else {
Notification::success('Neuer Rezept Typ wurde hinzugefügt');
	$list_recipe_type = List_Recipe_type::find($id);
	$list_recipe_type->bezeichnung = Input::get('bezeichnung');
	$list_recipe_type->save();
return Redirect::route('admin.list_recipe_type.index');
}
}
/**
* Remove the specified resource from storage.
*
* @param  int $id
* @return Response
*/
public function destroy($id) {
$list_recipe_type= List_Recipe_type::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
$this->list_recipe_type->destroy($id);
Notification::success('Rezept Typ wurde gelöscht');
return Redirect::action('App\Controllers\Admin\List_Recipe_typeController@index');
}
public function confirmDestroy($id) {
$list_recipe_type= List_Recipe_type::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
$list_recipe_type = $this->list_recipe_type->find($id);
return View::make('backend.lists.list_recipe_type.confirm-destroy', compact('list_recipe_type'));
}
}