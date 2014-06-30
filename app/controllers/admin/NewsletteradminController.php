<?php

class NewsletteradminController extends BaseController

				{
				/**
				 * Display a listing of the resource.
				 *
				 * @return Response
				 */
				public function index()

								{
								// get all the varibale_ausgabe
								$varibale_ausgabe = Newsletter::all();
								// load the view and pass the varibale_ausgabe
								return View::make('backend.newsletter.index')->with('varibale_ausgabe', $varibale_ausgabe);
								}
				/**
				 * Show the form for creating a new resource.
				 *
				 * @return Response
				 */
				public function create()

								{
								// load the create form (app/views/varibale_ausgabe/create.blade.php)
								return View::make('backend.newsletter.create');
								}
				/**
				 * Store a newly created resource in storage.
				 *
				 * @return Response
				 */
				public function store()

								{
								// validate
								// read more on validation at http://laravel.com/docs/validation
								$rules = array(
												'first_name' => 'required',
												'last_name' => 'required',
												'email' => 'required|email'
								);
								$validator = Validator::make(Input::all() , $rules);
								// process the login
								if ($validator->fails())
												{
												return Redirect::to('admin.newsletter.create')->withErrors($validator)->withInput(Input::except('password'));
												}
								  else
												{
												// store
												$ausgaben_adminnewsletter = new Newsletter;
												$ausgaben_adminnewsletter->first_name = Input::get('first_name');
												$ausgaben_adminnewsletter->last_name = Input::get('last_name');
												$ausgaben_adminnewsletter->email = Input::get('email');
												$ausgaben_adminnewsletter->save();
												// redirect
												Session::flash('message', 'Erfolgreich angelegt');
												return Redirect::to('admin.newsletter');
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
								// get the ausgaben_adminnewsletter
								$ausgaben_adminnewsletter = Newsletter::find($id);
								$ausgabe = Users::find($id);
								$ausgabeuseralle = Users::paginate(2);
								$footer = Footer::find($id);
								// $ausgabe = Users::find($id)->users ;
								// show the view and pass the ausgaben_adminnewsletter to it
								return View::make('backend.newsletter.show')->with('ausgaben_adminnewsletter', $ausgaben_adminnewsletter)->with('footer', $footer)->with('ausgabeuseralle', $ausgabeuseralle)->with('ausgabe', $ausgabe);
								}
				/**
				 * Show the form for editing the specified resource.
				 *
				 * @param  int  $id
				 * @return Response
				 */
				public function edit($id)

								{
								// get the ausgaben_adminnewsletter
								$ausgaben_adminnewsletter = Newsletter::find($id);
								// show the edit form and pass the ausgaben_adminnewsletter
								return View::make('backend.newsletter.edit')->with('ausgaben_adminnewsletter', $ausgaben_adminnewsletter);
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
												// 'first_name'    => 'required',
												// 'last_name' => 'required',
												'email' => 'required|email'
								);
								$validator = Validator::make(Input::all() , $rules);
								// process the login
								if ($validator->fails())
												{
												return Redirect::to('/admin/newsletter/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
												}
								  else
												{
												// store
												$ausgaben_adminnewsletter = Newsletter::find($id);
												$ausgaben_adminnewsletter->first_name = Input::get('first_name');
												$ausgaben_adminnewsletter->email = Input::get('email');
												$ausgaben_adminnewsletter->last_name = Input::get('last_name');
												$ausgaben_adminnewsletter->save();
												// redirect
												Session::flash('message', 'Update erfolgreich!');
												return Redirect::to('/admin/newsletter');
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
								$ausgabe = Newsletter::find($id);
								$ausgabe->delete();
								// redirect
								Notification::success('Löschung erfolgreich');
								return Redirect::to('admin/newsletter');
								}
				public function confirmDestroy($id)

								{
								$newsletter = Newsletter::find($id);
								return View::make('backend.newsletter.confirm-destroy', compact('newsletter'));
								}
			



				}


