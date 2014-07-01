<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Abotyp;
use Validator;
class List_AbotypController extends BaseController

{
    protected $list_abotyp;
    public function __construct(List_Abotyp $list_abotyp)

    {
        View::share('active', 'modules');
        $this->list_abotyp = $list_abotyp;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $list_abotyp = $this->list_abotyp->paginate(10);
        return View::make('backend.lists.list_abotyp.index', compact('list_abotyp'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.lists.list_abotyp.create');
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
            return Redirect::route('admin.list_abotyp.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Abo Typ wurde hinzugefügt');
            $list_abotyp = new List_Abotyp;
            $list_abotyp->bezeichnung = Input::get('bezeichnung');
            $list_abotyp->save();
            return Redirect::route('admin.list_abotyp.index');
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
        $list_abotyp = $this->list_abotyp->find($id);
        return View::make('backend.lists.list_abotyp.edit', compact('list_abotyp'));
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
            return Redirect::route('admin.list_abotyp.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Abo Typ wurde hinzugefügt');
            $list_abotyp = List_Abotyp::find($id);
            $list_abotyp->bezeichnung = Input::get('bezeichnung');
            $list_abotyp->save();
            return Redirect::route('admin.list_abotyp.index');
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
        $list_abotyp = List_Abotyp::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_abotyp->destroy($id);
        Notification::success('Abo Typ wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_AbotypController@index');
    }
    public function confirmDestroy($id)

    {
        $list_abotyp = List_Abotyp::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_abotyp = $this->list_abotyp->find($id);
        return View::make('backend.lists.list_abotyp.confirm-destroy', compact('list_abotyp'));
    }
}


