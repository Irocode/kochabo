<?php

class UsernewNerdController extends \BaseController {

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
		return View::make('ordner.index')
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
		return View::make('ordner.create');
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
			return Redirect::to('ordner/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$ausgabe = new Users;
			$ausgabe->first_name       = Input::get('first_name');
			$ausgabe->last_name = Input::get('last_name');
			$ausgabe->email      = Input::get('email');
			
			$ausgabe->save();

			// redirect
			Session::flash('message', 'Erfolgreich angelegt');
			return Redirect::to('ordner');
		}
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store_bestellung()
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
			return Redirect::to('meinkontoregistrierung')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$ausgabe = new Users;
			$ausgabe->first_name       = Input::get('first_name');
			$ausgabe->last_name = Input::get('last_name');
			$ausgabe->email      = Input::get('email');
			
			$ausgabe->save();

			// redirect
			Session::flash('message', 'Erfolgreich angelegt');
			return Redirect::to('meinkontoregistrierung');
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
		// get the ausgabe
		$ausgabe = Users::find($id);

		// show the view and pass the ausgabe to it

		

		return View::make('ordner.show')
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
		return View::make('ordner.edit')
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
			return Redirect::to('ordner/' . $id . '/edit')
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
			return Redirect::to('ordner');
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
		return Redirect::to('ordner');
	}






public function getIndex()
{
    // Grab all the customers
    $newsletter = Newsletter::orderBy('created_at', 'DESC')->paginate(10);
    // Show the page
    return View::make('textx/index', compact('newsletter'));
}





}