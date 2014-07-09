<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Ingredients\IngredientsRepository as Ingredients;
use Sefa\Exceptions\Validation\ValidationException;
class IngredientsController extends BaseController

{
    protected $ingredients;
    public function __construct(Ingredients $ingredients)

    {
        View::share('active', 'modules');
        $this->ingredients = $ingredients;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $ingredients = $this->ingredients->paginate(null, true);
        return View::make('backend.ingredients.index', compact('ingredients'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.ingredients.create');
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
            $this->ingredients->create(Input::all());
            Notification::success('Rezept wurde hinzugefügt');
            return Redirect::route('admin.ingredients.index');
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
        $ingredients = $this->ingredients->find($id);
        return View::make('backend.ingredients.show', compact('ingredients'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $ingredients = $this->ingredients->find($id);
       
        
        return View::make('backend.ingredients.edit', compact('ingredients'));
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
            $this->ingredients->update($id, Input::all());
            Notification::success('Rezept wurde geändert');
            return Redirect::route('admin.ingredients.index');
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
        $this->ingredients->destroy($id);
        Notification::success('Rezept wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\IngredientsController@index');
    }
    public function confirmDestroy($id)

    {
        $ingredients = $this->ingredients->find($id);
        return View::make('backend.ingredients.confirm-destroy', compact('ingredients'));
    }
    public function togglePublish($id)

    {
        return $this->ingredients->togglePublish($id);
    }
}


