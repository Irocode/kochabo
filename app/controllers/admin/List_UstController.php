<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Ust;
use Validator;
class List_UstController extends BaseController

{
    protected $list_ust;
    public function __construct(List_Ust $list_ust)
    {
        View::share('active', 'modules');
        $this->list_ust = $list_ust;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $list_ust = $this->list_ust->paginate(10);
        return View::make('backend.lists.list_ust.index', compact('list_ust'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.lists.list_ust.create');
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
            Notification::success('Neuer Steurstatz konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_ust.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Steurstatz wurde hinzugefügt');
            $list_ust = new List_Ust;
            $list_ust->bezeichnung = Input::get('bezeichnung');
            $list_ust->save();
            return Redirect::route('admin.list_ust.index');
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
        $list_ust = $this->list_ust->find($id);
        return View::make('backend.lists.list_ust.edit', compact('list_ust'));
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
            Notification::success('Neuer Steurstatz konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_ust.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neuer Steurstatz wurde hinzugefügt');
            $list_ust = List_Ust::find($id);
            $list_ust->bezeichnung = Input::get('bezeichnung');
            $list_ust->save();
            return Redirect::route('admin.list_ust.index');
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
        $list_ust = List_Ust::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_ust->destroy($id);
        Notification::success('Steurstatz wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_UstController@index');
    }
    public function confirmDestroy($id)
    {
        $list_ust = List_Ust::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_ust = $this->list_ust->find($id);
        return View::make('backend.lists.list_ust.confirm-destroy', compact('list_ust'));
    }
}


