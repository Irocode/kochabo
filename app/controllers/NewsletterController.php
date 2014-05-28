<?php

class NewsletterController extends \BaseController {

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
		return View::make('newsletter.index')
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
		return View::make('newsletter.create');
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
			'first_name'       => 'required',			
			'last_name' => 'required',
			'email'      => 'required|email'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('newsletter/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$ausgabenl = new Newsletter;
			$ausgabenl->first_name       = Input::get('first_name');
			$ausgabenl->last_name = Input::get('last_name');
			$ausgabenl->email      = Input::get('email');
			
			$ausgabenl->save();

			// redirect
			Session::flash('message', 'Erfolgreich angelegt');
			return Redirect::to('newsletter');
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
		// get the ausgabenl
		$ausgabenl = Newsletter::find($id);
		$ausgabe = Users::find($id);
		$ausgabeuseralle = Users::paginate(2);
		$footer = Footer::find($id);
//$ausgabe = Users::find($id)->users ;

		// show the view and pass the ausgabenl to it

		

		return View::make('newsletter.show')
			->with('ausgabenl', $ausgabenl)
			->with('footer', $footer)

				->with('ausgabeuseralle', $ausgabeuseralle)
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
		// get the ausgabenl
		$ausgabenl = Newsletter::find($id);

		// show the edit form and pass the ausgabenl
		return View::make('newsletter.edit')
			->with('ausgabenl', $ausgabenl);
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

			'first_name'    => 'required',			
			'last_name' => 'required',
			'email'      => 'required|email'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('newsletter/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$ausgabenl = Newsletter::find($id);
			$ausgabenl->first_name       = Input::get('first_name');
			$ausgabenl->email      = Input::get('email');
			$ausgabenl->last_name = Input::get('last_name');
			$ausgabenl->save();

			// redirect
			Session::flash('message', 'Update erfolgreich!');
			return Redirect::to('newsletter');
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
		$ausgabenl = Newsletter::find($id);
		$ausgabenl->delete();

		// redirect
		Session::flash('message', 'Löschung erfolgreich');
		return Redirect::to('newsletter');
	}












}