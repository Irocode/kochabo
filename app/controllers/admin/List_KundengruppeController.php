<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Kundengruppe;
use Validator;
class List_KundengruppeController extends BaseController

{
    protected $list_kundengruppe;
    public function __construct(List_Kundengruppe $list_kundengruppe)
    {
        View::share('active', 'modules');
        $this->list_kundengruppe = $list_kundengruppe;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $list_kundengruppe = $this->list_kundengruppe->paginate(10);
        return View::make('backend.lists.list_kundengruppe.index', compact('list_kundengruppe'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.lists.list_kundengruppe.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'groupname' => 'required',
        );
        $validator = Validator::make(Input::all() , $rules);
        if ($validator->fails())
        {
            Notification::success('Neue Kundengruppe konte nicht hinzugefügt werden');
            return Redirect::route('admin.list_kundengruppe.create')->withErrors($validator)->withInput(Input::except('groupname'));
        }
        else
        {
            Notification::success('Neue Kundengruppe wurde hinzugefügt');
            $list_kundengruppe = new List_Abotyp;
            $list_kundengruppe->groupname = Input::get('groupname');
            $list_kundengruppe->save();
            return Redirect::route('admin.list_kundengruppe.index');
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
        $list_kundengruppe = $this->list_kundengruppe->find($id);
        return View::make('backend.lists.list_kundengruppe.edit', compact('list_kundengruppe'));
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
            'groupname' => 'required',
        );
        $validator = Validator::make(Input::all() , $rules);
        if ($validator->fails())
        {
            Notification::success('Neue Kundengruppe konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_kundengruppe.edit')->withErrors($validator)->withInput(Input::except('groupname'));
        }
        else
        {
            Notification::success('Neue Kundengruppe wurde hinzugefügt');
            $list_kundengruppe = List_Abotyp::find($id);
            $list_kundengruppe->groupname = Input::get('groupname');
            $list_kundengruppe->save();
            return Redirect::route('admin.list_kundengruppe.index');
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
        $list_kundengruppe = List_Abotyp::where('customers_groups_id', '>', 1)->orderBy('groupname', 'DESC')->get();
        $this->list_kundengruppe->destroy($id);
        Notification::success('Neue Kundengruppe wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_AbotypController@index');
    }
    public function confirmDestroy($id)
    {
        $list_kundengruppe = List_Abotyp::where('customers_groups_id', '>', 1)->orderBy('groupname', 'DESC')->get();
        $list_kundengruppe = $this->list_kundengruppe->find($id);
        return View::make('backend.lists.list_kundengruppe.confirm-destroy', compact('list_kundengruppe'));
    }
}


