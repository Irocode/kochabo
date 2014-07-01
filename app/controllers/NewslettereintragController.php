<?php
class NewslettereintragController extends BaseController

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
        return View::make('frontend.newsletter.create')->with('varibale_ausgabe', $varibale_ausgabe);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        // load the create form (app/views/varibale_ausgabe/create.blade.php)
        return View::make('frontend.newsletter.create');
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
            // 'first_name'       => 'required',
            // 'last_name' => 'required',
            'email' => 'required|email'
        );
        $validator = Validator::make(Input::all() , $rules);
        // process the login
        if ($validator->fails())
        {
            return Redirect::to('newslettereintrag')->withErrors($validator)->withInput(Input::except('password'));
        }
        else
        {
            $ausgabenl = new Newsletter;
            $ausgabenl->email = Input::get('email');
            $ausgabenl->code = Input::get('code');
            $ausgabenl->save();
            Session::flash('message', 'Dir wurde eine E-Mail geschickt. Bitte benutze den dortigen Aktivierungslink um deine 3 Rezpete zu erhalten.<br /><br />Dein KochAbo Team');
            Mail::send('frontend.newsletter.versand', array() , function ($message)
            {
                $email = Input::get('email');
                $code = Input::get('code');
                $message->to($email)->from('office@kochabo.com', 'KochAbo.com')->subject('KochAbo.at Aktivierung E-Mail Rezepte');
            });
            return Redirect::to('newslettereintrag');
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
        // $ausgabe = Users::find($id)->users ;
        // show the view and pass the ausgabenl to it
        return View::make('frontend.newsletter.show')->with('ausgabenl', $ausgabenl)->with('footer', $footer)->with('ausgabeuseralle', $ausgabeuseralle)->with('ausgabe', $ausgabe);
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
        $ausgabenl = Newsletter::find($code);
        // show the edit form and pass the ausgabenl
        return View::make('frontend.newsletter.edit')->with('ausgabenl', $ausgabenl);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $email
     * @return Response
     */
    public static function update()

    {
        // $email      = Input::get('email');
        $email = Input::get('email');
        $code = Input::get('code');
        //	 var_dump($email);
        // var_dump($code);
        // Wichtig abfangen mit Try ansonsten wird es geupdatet
        try
        {
            $ausgabenlx = Newsletter::where('code', '=', $code)->firstOrFail();
        }
        catch(IlluminateDatabaseEloquentModelNotFoundException $e)
        {
            $message = 'Invalid confirmation code.';
            return Redirect::to('start')->with('message', $message);
        }
        $codex = Input::get('code');
        $ausgabenlx->aktiviert = 'aktiviert';
        if (isset($codex))
        {
            echo "Erfolgreich aktiviert";
        }
        else
        {
            echo "leer";
        };
        $ausgabenlx->save();
        Session::flash('message', 'Du bist nun erfolgreich aktiviert und erhältst laufend unsere Rezepte solange du diese nicht wieder abbestellst.<br /><br />Dein KochAbo Team');
        return Redirect::to('newslettereintrag');
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


