<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Bundesland;
use Validator;
class List_BundeslandController extends BaseController

{
    protected $list_bundesland;
    public function __construct(List_Bundesland $list_bundesland)

    {
        View::share('active', 'modules');
        $this->list_bundesland = $list_bundesland;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $list_bundesland = $this->list_bundesland->paginate(10);
        return View::make('backend.lists.list_bundesland.index', compact('list_bundesland'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.lists.list_bundesland.create');
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
            Notification::success('Neues Bundesland konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_bundesland.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neues Bundesland wurde hinzugefügt');
            $list_bundesland = new List_Bundesland;
            $list_bundesland->bezeichnung = Input::get('bezeichnung');
            $list_bundesland->save();
            return Redirect::route('admin.list_bundesland.index');
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
        $list_bundesland = $this->list_bundesland->find($id);
        return View::make('backend.lists.list_bundesland.edit', compact('list_bundesland'));
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
            Notification::success('Neues Bundesland konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_bundesland.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neues Bundesland wurde hinzugefügt');
            $list_bundesland = List_Bundesland::find($id);
            $list_bundesland->bezeichnung = Input::get('bezeichnung');
            $list_bundesland->save();
            return Redirect::route('admin.list_bundesland.index');
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
        $list_bundesland = List_Bundesland::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_bundesland->destroy($id);
        Notification::success('Bundesland wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_BundeslandController@index');
    }
    public function confirmDestroy($id)

    {
        $list_bundesland = List_Bundesland::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_bundesland = $this->list_bundesland->find($id);
        return View::make('backend.lists.list_bundesland.confirm-destroy', compact('list_bundesland'));
    }
}


