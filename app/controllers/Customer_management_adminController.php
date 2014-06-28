<?php 
class Customer_management_adminController extends BaseController

				{
				public function __construct(Address $address, Order $order)

								{
								$this->address = $address;
								$this->order = $order;
								}
				/**
				 * Display a listing of the resource.
				 *
				 * @return Response
				 */
				public function index()

								{
								// get all the varibale_ausgabe
								$users = Users::all();
								// load the view and pass the varibale_ausgabe
								return View::make('backend.customer_management.index')->with('users', $users);
								}
				/**
				 * Show the form for creating a new resource.
				 *
				 * @return Response
				 */
				public function create()

								{
								// load the create form (app/views/varibale_ausgabe/create.blade.php)
								$day = List_Day::lists('bezeichnung', 'bezeichnung');
								$month = List_Month::lists('bezeichnung', 'bezeichnung');
								$gender = List_Gender::lists('bezeichnung', 'bezeichnung');
								return View::make('backend.customer_management.create')->with('month', $month)->with('gender', $gender)->with('day', $day);
								}
				/**
				 * Store a newly created resource in storage.
				 *
				 * @return Response
				 */
				public function store()

								{
								$formData = array(
												'gender' => Input::get('gender') ,
												'first_name' => Input::get('first_name') ,
												'last_name' => Input::get('last_name') ,
												'email' => Input::get('email') ,
												'telephone' => Input::get('telephone') ,
												'password' => Input::get('password') ,
												'confirm-password' => Input::get('confirm_password')
								);
								$rules = array(
												'first_name' => 'required|min:3',
												'last_name' => 'required|min:3',
												'telephone' => 'required|min:3',
												'email' => 'required|email|unique:users,email',
												'password' => 'required|min:4',
												'confirm-password' => 'required|same:password'
								);
								$validation = Validator::make($formData, $rules);
								if ($validation->fails())
												{
												return Redirect::action('App\Controllers\Admin\UserController@create')->withErrors($validation)->withInput();
												}
								$user = Sentry::createUser(array(
												'gender' => $formData['gender'],
												'email' => $formData['email'],
												'telephone' => $formData['telephone'],
												'password' => $formData['password'],
												'first_name' => $formData['first-name'],
												'last_name' => $formData['last-name'],
												'activated' => 1,
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
								return View::make('backend.customer_management.show')->with('ausgabe', $ausgabe);
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
								// show the edit form and pass the ausgabe
								// $order = Order::all();
								$ausgabe = Users::find($id);
								$order = Users::find($id)->order;
								$address = Users::find($id)->address;
								return View::make('backend.customer_management.edit', compact('ausgabe', 'order', 'address'));
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
												'first_name' => 'required',
												'last_name' => 'required',
												'email' => 'required|email',
												'telephone' => 'required'
								);
								$validator = Validator::make(Input::all() , $rules);
								// process the login
								if ($validator->fails())
												{
												return Redirect::to('admin/customer_management/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
												}
								  else
												{
												// store
												$ausgabe = Users::find($id);
												$ausgabe->first_name = Input::get('first_name');
												$ausgabe->gender = Input::get('gender');
												$datumumwandeln = Input::get('date_of_birth');
												$datumumwandelnready = date("Y-m-d", strtotime($datumumwandeln));
												$ausgabe->date_of_birth = $datumumwandelnready;
												// var_dump($datumumwandelnready);
												$ausgabe->email = Input::get('email');
												$ausgabe->last_name = Input::get('last_name');
												$ausgabe->telephone = Input::get('telephone');
												$ausgabe->save();
												// redirect
												Notification::success('Update erfolgreich');
												return Redirect::to('admin/customer_management');
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
								Notification::success('Löschung erfolgreich');
								return Redirect::to('admin/customer_management');
								}
				public function confirmDestroy($id)

								{
								$customer_management = Users::find($id);
								return View::make('backend.customer_management.confirm-destroy', compact('customer_management'));
								}
				}


