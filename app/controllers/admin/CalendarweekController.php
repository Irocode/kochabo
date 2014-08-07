<?php namespace App\Controllers\Admin;
use BaseController;
use Products;
use Ingredients;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Image;
use Session;
use File;
use Notification;
use Sefa\Repositories\Calendarweek\CalendarweekRepository as Calendarweek;
use Sefa\Exceptions\Validation\ValidationException;


class CalendarweekController extends BaseController

{
    public function __construct(Calendarweek $calendarweek, Products $products, Ingredients $ingredients)
    {
        View::share('active', 'modules');
        $this->calendarweek = $calendarweek;  
        $this->products = $products;   
        $this->ingredients = $ingredients;

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

       
       // return View::make('backend.calendarweek.show', compact('calendarweek'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //$calendarweek = Calendarweek::find($id);
       // $ingredients = $this->ingredients->find($id);
    $calendarweek = $this->calendarweek->find($id);

      $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
   
   // $products = $this->products->all(); 
       //var_dump($calendarweek );
    return View::make('backend.calendarweek.edit', compact('calendarweek','products'));
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


