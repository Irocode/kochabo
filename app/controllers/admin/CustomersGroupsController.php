<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Users;
use List_Janein;
use Notification;
use Sefa\Repositories\CustomersGroups\CustomersGroupsRepository as CustomersGroups;
use Sefa\Exceptions\Validation\ValidationException;
class CustomersGroupsController extends BaseController

{
    protected $customers_groups;
    public function __construct(CustomersGroups $customers_groups,  Users $users)

    {
        View::share('active', 'modules');
        $this->customers_groups = $customers_groups;
        $this->users = $users;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $customers_groups = $this->customers_groups->paginate(null, true);
        return View::make('backend.customers_groups.index', compact('customers_groups'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        $janein = List_Janein::lists('bezeichnung', 'bezeichnung');
        $janeinwert = List_Janein::lists('wert', 'wert');
     
        return View::make('backend.customers_groups.create')->with('janein', $janein)->with('janeinwert', $janeinwert);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
        try
        {
            $this->customers_groups->create(Input::all());
            Notification::success('Gruppe wurde hinzugefügt');
            return Redirect::route('admin.customers_groups.index');
        }
        catch(ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)

    {
        $customers_groups = $this->customers_groups->find($id);
        return View::make('backend.customers_groups.show', compact('customers_groups'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {



        $customers_groups = $this->customers_groups->find($id);
        return View::make('backend.customers_groups.edit', compact('customers_groups'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)

    {
        try
        {
            $this->customers_groups->update($id, Input::all());
            Notification::success('Gruppe wurde geändert');
            //return Redirect::back();
             return Redirect::route('admin.customers_groups.index');
        }
        catch(ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
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
        $this->customers_groups->destroy($id);
        Notification::success('Gruppe wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\CustomersGroupsController@index');
    }
    public function confirmDestroy($id)

    {
        $customers_groups = $this->customers_groups->find($id);
        return View::make('backend.customers_groups.confirm-destroy', compact('customers_groups'));
    }
    public function togglePublish($id)

    {
        return $this->customers_groups->togglePublish($id);
    }
}


