<?php 
class UsernewadminController extends BaseController {
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
// get all the varibale_ausgabe
$varibale_ausgabe = Users::all();
// load the view and pass the varibale_ausgabe
return View::make('backend.userverwaltung.index')
->with('varibale_ausgabe', $varibale_ausgabe);
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
// load the create form (app/views/varibale_ausgabe/create.blade.php)
return View::make('backend.userverwaltung.create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store() {
$formData = array(
'first-name'       => Input::get('first_name'),
'last-name'        => Input::get('last_name'),
'email'            => Input::get('email'),
'password'         => Input::get('password'),
'confirm-password' => Input::get('confirm_password')
);
$rules = array(
'first-name'       => 'required|min:3',
'last-name'        => 'required|min:3',
'email'            => 'required|email|unique:users,email',
'password'         => 'required|min:4',
'confirm-password' => 'required|same:password'
);
$validation = Validator::make($formData, $rules);
if ($validation->fails()) {
return Redirect::action('App\Controllers\Admin\UserController@create')->withErrors($validation)->withInput();
}
$user = Sentry::createUser(array(
'email'      => $formData['email'],
'password'   => $formData['password'],
'first_name' => $formData['first-name'],
'last_name'  => $formData['last-name'],
'activated'  => 1,
));
$adminGroup = Sentry::findGroupById(1);
$user->addGroup($adminGroup);
Notification::success('Benutzer hinzugefügt');
return Redirect::action('App\Controllers\Admin\UserController@index');
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
// get the ausgabe
$ausgabe = Users::find($id);
// show the view and pass the ausgabe to it
return View::make('backend.userverwaltung.show')
->with('ausgabe', $ausgabe);
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
// get the ausgabe
$ausgabe = Users::find($id);
// show the edit form and pass the ausgabe
return View::make('backend.userverwaltung.edit')
->with('ausgabe', $ausgabe);
}
/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
// validate
// read more on validation at http://laravel.com/docs/validation
$rules = array(
'first_name'       => 'required',			
'last_name' => 'required',
'email'      => 'required|email'
);
$validator = Validator::make(Input::all(), $rules);
// process the login
if ($validator->fails()) {
return Redirect::to('admin/userverwaltung/' . $id . '/edit')
->withErrors($validator)
->withInput(Input::except('password'));
} else {
// store
$ausgabe = Users::find($id);
$ausgabe->first_name       = Input::get('first_name');
$ausgabe->email      = Input::get('email');
$ausgabe->last_name = Input::get('last_name');
$ausgabe->save();
// redirect
Session::flash('message', 'Update erfolgreich!');
return Redirect::to('admin/userverwaltung');
}
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
// delete
$ausgabe = Users::find($id);
$ausgabe->delete();
// redirect
Session::flash('message', 'Löschung erfolgreich');
return Redirect::to('admin/userverwaltung');
}
}