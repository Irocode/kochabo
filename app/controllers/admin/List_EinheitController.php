<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Einheit;
use Validator;
class List_EinheitController extends BaseController

{
    protected $list_einheit;
    public function __construct(List_Einheit $list_einheit)
    {
        View::share('active', 'modules');
        $this->list_einheit = $list_einheit;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $list_einheit = $this->list_einheit->paginate(10);
        return View::make('backend.lists.list_einheit.index', compact('list_einheit'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.lists.list_einheit.create');
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
            Notification::success('Neue Einheit konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_einheit.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neue Einheit wurde hinzugefügt');
            $list_einheit = new List_Einheit;
            $list_einheit->bezeichnung = Input::get('bezeichnung');
            $list_einheit->save();
            return Redirect::route('admin.list_einheit.index');
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
        $list_einheit = $this->list_einheit->find($id);
        return View::make('backend.lists.list_einheit.edit', compact('list_einheit'));
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
            Notification::success('Neue Einheit konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_einheit.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neue Einheit wurde hinzugefügt');
            $list_einheit = List_Einheit::find($id);
            $list_einheit->bezeichnung = Input::get('bezeichnung');
            $list_einheit->save();
            return Redirect::route('admin.list_einheit.index');
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
        $list_einheit = List_Einheit::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_einheit->destroy($id);
        Notification::success('Einheit wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_EinheitController@index');
    }
    public function confirmDestroy($id)
    {
        $list_einheit = List_Einheit::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_einheit = $this->list_einheit->find($id);
        return View::make('backend.lists.list_einheit.confirm-destroy', compact('list_einheit'));
    }
}


