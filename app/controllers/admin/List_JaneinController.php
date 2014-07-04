<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Janein;
use Validator;
class List_JaneinController extends BaseController

{
    protected $list_janein;
    public function __construct(List_Janein $list_janein)

    {
        View::share('active', 'modules');
        $this->list_janein = $list_janein;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $list_janein = $this->list_janein->paginate(10);
        return View::make('backend.lists.list_janein.index', compact('list_janein'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.lists.list_janein.create');
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
            Notification::success('Neuer Abo Typ konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_janein.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Abo Typ wurde hinzugefügt');
            $list_janein = new List_Janein;
            $list_janein->bezeichnung = Input::get('bezeichnung');
            $list_janein->save();
            return Redirect::route('admin.list_janein.index');
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
        $list_janein = $this->list_janein->find($id);
        return View::make('backend.lists.list_janein.edit', compact('list_janein'));
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
            Notification::success('Neuer Abo Typ konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_janein.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Abo Typ wurde hinzugefügt');
            $list_janein = List_Janein::find($id);
            $list_janein->bezeichnung = Input::get('bezeichnung');
            $list_janein->save();
            return Redirect::route('admin.list_janein.index');
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
        $list_janein = List_Janein::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_janein->destroy($id);
        Notification::success('Abo Typ wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_AbotypController@index');
    }
    public function confirmDestroy($id)

    {
        $list_janein = List_Janein::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_janein = $this->list_janein->find($id);
        return View::make('backend.lists.list_janein.confirm-destroy', compact('list_janein'));
    }
}


