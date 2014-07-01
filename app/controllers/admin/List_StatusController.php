<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Status;
use Validator;
class List_StatusController extends BaseController

{
    protected $list_status;
    public function __construct(List_Status $list_status)

    {
        View::share('active', 'modules');
        $this->list_status = $list_status;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $list_status = $this->list_status->paginate(10);
        return View::make('backend.lists.list_status.index', compact('list_status'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.lists.list_status.create');
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
            return Redirect::route('admin.list_status.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Status wurde hinzugefügt');
            $list_status = new List_Status;
            $list_status->bezeichnung = Input::get('bezeichnung');
            $list_status->save();
            return Redirect::route('admin.list_status.index');
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
        $list_status = $this->list_status->find($id);
        return View::make('backend.lists.list_status.edit', compact('list_status'));
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
            Notification::success('Neuer Status konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_status.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Status Typ wurde hinzugefügt');
            $list_status = List_Status::find($id);
            $list_status->bezeichnung = Input::get('bezeichnung');
            $list_status->save();
            return Redirect::route('admin.list_status.index');
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
        $list_status = List_Status::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_status->destroy($id);
        Notification::success('Status wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_StatusController@index');
    }
    public function confirmDestroy($id)

    {
        $list_status = List_Status::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_status = $this->list_status->find($id);
        return View::make('backend.lists.list_status.confirm-destroy', compact('list_status'));
    }
}


