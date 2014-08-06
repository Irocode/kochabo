<?php namespace App\Controllers\Admin;
use BaseController;
use Deliverytimes;
use Address;
use AddressNoPrimaryKey;
use Order;
use OrderAddress;
use OrderItems;
use OrderStatusHistory;
use Products;
use Users;
use List_Kundengruppe;
use Deliveryzipcode;
use Logisticianmanager;
use CustomersGroups;
use Newsletter;
use Ingredients;
use Recipe;
use Recipeingredient;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
class CalendarweekController extends BaseController

{
    public function __construct(Recipeingredient $calendarweek)

    {
        View::share('active', 'modules');
        $this->calendarweek = $calendarweek;     

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       // $calendarweek = $this->calendarweek->paginate(null, true);
        return View::make('backend.calendarweek.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.calendarweek.create');
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
            $this->calendarweek->create(Input::all());
            Notification::success('Adresse wurde hinzugefügt');
            return Redirect::route('admin.calendarweek.index');
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
        $calendarweek = $this->calendarweek->find($id);
        return View::make('backend.calendarweek.show', compact('calendarweek'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $calendarweek = AddressNoPrimaryKey::find($id);
        // $calendarweek = $this->calendarweek->find($id);
        return View::make('backend.calendarweek.edit', compact('calendarweek'));
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
            $this->calendarweek->update($id, Input::all());
            Notification::success('Adresse wurde geändert');
            return Redirect::back();
            // return Redirect::route('admin.calendarweek.index');
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
        $this->calendarweek->destroy($id);
        Notification::success('Adresse wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\AddressController@index');
    }
    public function confirmDestroy($id)
    {
        $calendarweek = $this->calendarweek->find($id);
        return View::make('backend.calendarweek.confirm-destroy', compact('calendarweek'));
    }
    public function togglePublish($id)
    {
        return $this->calendarweek->togglePublish($id);
    }
}


