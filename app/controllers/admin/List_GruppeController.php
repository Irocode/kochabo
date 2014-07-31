<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Gruppe;
use Validator;
class List_GruppeController extends BaseController

{
    protected $list_gruppe;
    public function __construct(List_Gruppe $list_gruppe)
    {
        View::share('active', 'modules');
        $this->list_gruppe = $list_gruppe;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $list_gruppe = $this->list_gruppe->paginate(10);
        return View::make('backend.lists.list_gruppe.index', compact('list_gruppe'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.lists.list_gruppe.create');
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
            Notification::success('Neue Gruppe konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_gruppe.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neue Gruppe wurde hinzugefügt');
            $list_gruppe = new List_Gruppe;
            $list_gruppe->bezeichnung = Input::get('bezeichnung');
            $list_gruppe->save();
            return Redirect::route('admin.list_gruppe.index');
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
        $list_gruppe = $this->list_gruppe->find($id);
        return View::make('backend.lists.list_gruppe.edit', compact('list_gruppe'));
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
            Notification::success('Neue Gruppe konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_gruppe.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neue Gruppe wurde hinzugefügt');
            $list_gruppe = List_Gruppe::find($id);
            $list_gruppe->bezeichnung = Input::get('bezeichnung');
            $list_gruppe->save();
            return Redirect::route('admin.list_gruppe.index');
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
        $list_gruppe = List_Gruppe::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_gruppe->destroy($id);
        Notification::success('Gruppe wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_GruppeController@index');
    }
    public function confirmDestroy($id)
    {
        $list_gruppe = List_Gruppe::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_gruppe = $this->list_gruppe->find($id);
        return View::make('backend.lists.list_gruppe.confirm-destroy', compact('list_gruppe'));
    }
}


