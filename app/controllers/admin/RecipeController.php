<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Image;
use File;
use Validator;
use Response;
use Str;
use Notification;
use Recipe_ingredient;
use Sefa\Repositories\Recipe\RecipeRepository as Recipe;
use Sefa\Exceptions\Validation\ValidationException;
class RecipeController extends BaseController

{
    protected $recipe;
    public function __construct(Recipe $recipe, Recipe_ingredient $recipe_ingredient)

    {
        View::share('active', 'modules');
        $this->recipe = $recipe;
        $this->recipe_ingredient = $recipe_ingredient;
      
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
            
        


        $recipe_ingredient = Recipe_ingredient::all();
        return View::make('backend.recipe.create', compact('recipe_ingredient'));
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

// Image New Start

            //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px
$input = Input::all();

    //if (Input::hasFile('imagesmall')){

       $file = Input::file('imagesmall');
       $file2 = Input::file('imagemiddle');
       $file3 = Input::file('imagebig');
       $name = $file->getClientOriginalName();
       $name2 = $file2->getClientOriginalName();
       $name3 = $file3->getClientOriginalName();

       $image = Image::make(Input::file('imagesmall')->getRealPath())->resize(200, 200);
       $image->save(public_path() . '/filemanager/userfiles/' . $input['imagesmall']->getClientOriginalName());
       $image2 = Image::make(Input::file('imagemiddle')->getRealPath())->resize(200, 200);
       $image2->save(public_path() . '/filemanager/userfiles/' . $input['imagemiddle']->getClientOriginalName());
       $image3 = Image::make(Input::file('imagebig')->getRealPath())->resize(200, 200);
       $image3->save(public_path() . '/filemanager/userfiles/' . $input['imagebig']->getClientOriginalName());
       
       $input['imagesmall'] = $name;
       $input2['imagemiddle'] = $name2;
       $input3['imagebig'] = $name3;

// Upload nehmen und in DB speichern.
$path=public_path() . '/filemanager/userfiles/' . $input['imagesmall'];
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
$input['imagesmall'] = $base64;


$path2=public_path() . '/filemanager/userfiles/' . $input2['imagemiddle'];
$type = pathinfo($path2, PATHINFO_EXTENSION);
$data2 = file_get_contents($path2);
$base642 = 'data:image/' . $type . ';base64,' . base64_encode($data2);
$input2['imagemiddle'] = $base642;


$path3=public_path() . '/filemanager/userfiles/' . $input3['imagebig'];
$type = pathinfo($path3, PATHINFO_EXTENSION);
$data3 = file_get_contents($path3);
$base643 = 'data:image/' . $type . ';base64,' . base64_encode($data3);
$input3['imagebig'] = $base643;


//Merger all inputs
$input_all = (array_merge($input, $input2, $input3));

  // }

   $this->recipe->create($input_all);

// Image New END            


          

         //   $this->recipe->create(Input::all());
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
        
        $recipe_ingredient = $this->recipe->find($id)->recipe_ingredient;
        
        return View::make('backend.recipe.edit', compact('recipe','recipe_ingredient'));
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
            // Image New Start

            //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px
$input = Input::all();

    //if (Input::hasFile('imagesmall')){

       $file = Input::file('imagesmall');
       $file2 = Input::file('imagemiddle');
       $file3 = Input::file('imagebig');
       $name = $file->getClientOriginalName();
       $name2 = $file2->getClientOriginalName();
       $name3 = $file3->getClientOriginalName();

       $image = Image::make(Input::file('imagesmall')->getRealPath())->resize(200, 200);
       $image->save(public_path() . '/filemanager/userfiles/' . $input['imagesmall']->getClientOriginalName());
       $image2 = Image::make(Input::file('imagemiddle')->getRealPath())->resize(200, 200);
       $image2->save(public_path() . '/filemanager/userfiles/' . $input['imagemiddle']->getClientOriginalName());
       $image3 = Image::make(Input::file('imagebig')->getRealPath())->resize(200, 200);
       $image3->save(public_path() . '/filemanager/userfiles/' . $input['imagebig']->getClientOriginalName());
       
       $input['imagesmall'] = $name;
       $input2['imagemiddle'] = $name2;
       $input3['imagebig'] = $name3;

// Upload nehmen und in DB speichern.
$path=public_path() . '/filemanager/userfiles/' . $input['imagesmall'];
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
$input['imagesmall'] = $base64;


$path2=public_path() . '/filemanager/userfiles/' . $input2['imagemiddle'];
$type = pathinfo($path2, PATHINFO_EXTENSION);
$data2 = file_get_contents($path2);
$base642 = 'data:image/' . $type . ';base64,' . base64_encode($data2);
$input2['imagemiddle'] = $base642;


$path3=public_path() . '/filemanager/userfiles/' . $input3['imagebig'];
$type = pathinfo($path3, PATHINFO_EXTENSION);
$data3 = file_get_contents($path3);
$base643 = 'data:image/' . $type . ';base64,' . base64_encode($data3);
$input3['imagebig'] = $base643;


//Merger all inputs
$input_all = (array_merge($input, $input2, $input3));

  // }

   $this->recipe->create($input_all);

// Image New END            
          //  $this->recipe->update($id, Input::all());
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


