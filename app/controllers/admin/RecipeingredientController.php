<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Recipe;
use Notification;
use Sefa\Repositories\Recipeingredient\RecipeingredientRepository as Recipeingredient;
use Sefa\Exceptions\Validation\ValidationException;
class RecipeingredientController extends BaseController

{
    protected $recipe_ingredient;
    public function __construct(Recipeingredient $recipe_ingredient, Recipe $recipe)

    {
        View::share('active', 'modules');
        $this->recipe_ingredient = $recipe_ingredient;
         $this->recipe = $recipe;
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $recipe_ingredient = $this->recipe_ingredient->paginate(null, true);
        return View::make('backend.recipeingredient.index', compact('recipe_ingredient'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.recipeingredient.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
    if (isset($_GET["recipeid"])) {
    $recipeid = $_GET["recipeid"];
    
}
        try
        {
            $this->recipe_ingredient->create(Input::all());
            Notification::success('Zutat wurde hinzugefügt');
            return Redirect::to("/admin/recipe/" . $recipeid . "/edit#zielanker_speichern");           


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
        return View::make('backend.recipeingredient.show', compact('recipe_ingredient'));
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
       
        
        return View::make('backend.recipeingredient.edit', compact('recipe_ingredient'));
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
            return Redirect::route('admin.recipeingredient.index');
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

       
if (isset($_GET["recipeid"])) {
    $recipeid = $_GET["recipeid"];

}



        $this->recipe_ingredient->destroy($id);
        Notification::success('Zutat wurde gelöscht');

           return Redirect::to("/admin/recipe/" . $recipeid . "/edit#zielanker_loeschen");


       
    }
    public function confirmDestroy($id)

    {
        $recipe_ingredient = $this->recipe_ingredient->find($id);
        return View::make('backend.recipeingredient.confirm-destroy', compact('recipe_ingredient'));
    }
    public function togglePublish($id)

    {
        return $this->recipe_ingredient->togglePublish($id);
    }



       public function zutaten_update($id)

    {
        $this->recipe_ingredient->update($id, Input::all());
        return $this->recipe_ingredient->zutaten_update($id);
    }
    
}


