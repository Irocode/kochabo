<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Recipeingredient\RecipeingredientRepository as Recipeingredient;
use Sefa\Exceptions\Validation\ValidationException;
class Recipe_ingredientController extends BaseController

{
    protected $recipe_ingredient;
    public function __construct(Recipe_ingredient $recipe_ingredient)

    {
        View::share('active', 'modules');
        $this->recipe_ingredient = $recipe_ingredient;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $recipe_ingredient = $this->recipe_ingredient->paginate(null, true);
        return View::make('backend.recipe_ingredient.index', compact('recipe_ingredient'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.recipe_ingredient.create');
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
            $this->recipe_ingredient->create(Input::all());
            Notification::success('Rezept wurde hinzugefügt');
            return Redirect::route('admin.recipe_ingredient.index');
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
        $recipe_ingredient = $this->recipe_ingredient->find($id);
        return View::make('backend.recipe_ingredient.show', compact('recipe_ingredient'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $recipe_ingredient = $this->recipe_ingredient->find($id);
       
        
        return View::make('backend.recipe_ingredient.edit', compact('recipe_ingredient'));
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
            $this->recipe_ingredient->update($id, Input::all());
            Notification::success('Rezept wurde geändert');
            return Redirect::route('admin.recipe_ingredient.index');
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
        $this->recipe_ingredient->destroy($id);
        Notification::success('Rezept wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\Recipe_ingredientController@index');
    }
    public function confirmDestroy($id)

    {
        $recipe_ingredient = $this->recipe_ingredient->find($id);
        return View::make('backend.recipe_ingredient.confirm-destroy', compact('recipe_ingredient'));
    }
    public function togglePublish($id)

    {
        return $this->recipe_ingredient->togglePublish($id);
    }
}


