<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Recipe\RecipeRepository as Recipe;
use Sefa\Exceptions\Validation\ValidationException;
class RecipeController extends BaseController

{
    protected $recipe;
    public function __construct(Recipe $recipe)

    {
        View::share('active', 'modules');
        $this->recipe = $recipe;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $recipe = $this->recipe->paginate(null, true);
        return View::make('backend.recipe.index', compact('recipe'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.recipe.create');
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
            $this->recipe->create(Input::all());
            Notification::success('Rezept wurde hinzugefügt');
            return Redirect::route('admin.recipe.index');
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
        $recipe = $this->recipe->find($id);
        return View::make('backend.recipe.show', compact('recipe'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $recipe = $this->recipe->find($id);
       
        
        return View::make('backend.recipe.edit', compact('recipe'));
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
            $this->recipe->update($id, Input::all());
            Notification::success('Rezept wurde geändert');
            return Redirect::route('admin.recipe.index');
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
        $this->recipe->destroy($id);
        Notification::success('Rezept wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\RecipeController@index');
    }
    public function confirmDestroy($id)

    {
        $recipe = $this->recipe->find($id);
        return View::make('backend.recipe.confirm-destroy', compact('recipe'));
    }
    public function togglePublish($id)

    {
        return $this->recipe->togglePublish($id);
    }
}


