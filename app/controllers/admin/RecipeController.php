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
use Ingredients;
use Notification;
use Recipeingredient;
use Sefa\Repositories\Recipe\RecipeRepository as Recipe;
use Sefa\Exceptions\Validation\ValidationException;
class RecipeController extends BaseController

{
    protected $recipe;
    public function __construct(Recipe $recipe, Recipeingredient $recipe_ingredient)

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

    /*
    public function create()

    {  
        


        $recipe_ingredient = Recipe_ingredient::all();
        return View::make('backend.recipe.create', compact('recipe_ingredient'));
    }
*/




public function create()

    {

        $attributes = ['title' => 'Neuer Titel', 'imagesmall' => 'data:image/png;base64,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','imagemiddle' => 'data:image/png;base64,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','imagebig' => 'data:image/png;base64,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', 'is_published' => false];
        try
        {
            $id = $this->recipe->create($attributes); 
             return Redirect::to("/admin/recipe/" . $id . "/edit");
              
        }
        catch(ValidationException $e)
        {
        }
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

            
       $input = Input::all();
    
    //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
    if (Input::hasFile('imagesmall')){

       $file = Input::file('imagesmall');
       $name = $file->getClientOriginalName();
       $image = Image::make(Input::file('imagesmall')->getRealPath())->resize(200, 200);
       $image->save(public_path() . '/filemanager/userfiles/' . $input['imagesmall']->getClientOriginalName());
       $input1['imagesmall'] = $name;

       // Upload nehmen und in DB speichern.
       $path=public_path() . '/filemanager/userfiles/' . $input1['imagesmall'];
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
       $input1['imagesmall'] = $base64;
    }  
        else {
           $input1= array('imagesmall' => 'data:image/png;base64,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 ');
             }


     //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
    if (Input::hasFile('imagemiddle')){
       $file2 = Input::file('imagemiddle');
       $name2 = $file2->getClientOriginalName();
       $image2 = Image::make(Input::file('imagemiddle')->getRealPath())->resize(200, 200);
       $image2->save(public_path() . '/filemanager/userfiles/' . $input['imagemiddle']->getClientOriginalName());
       $input2['imagemiddle'] = $name2; 

       // Upload nehmen und in DB speichern.
       $path2=public_path() . '/filemanager/userfiles/' . $input2['imagemiddle'];
       $type = pathinfo($path2, PATHINFO_EXTENSION);
       $data2 = file_get_contents($path2);
       $base642 = 'data:image/' . $type . ';base64,' . base64_encode($data2);
       $input2['imagemiddle'] = $base642;  
     }
        else {
           $input2= array('imagemiddle' => 'data:image/png;base64,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 ');
             }

       //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
     if (Input::hasFile('imagebig')){
       $file3 = Input::file('imagebig');       
       $name3 = $file3->getClientOriginalName();       
       $image3 = Image::make(Input::file('imagebig')->getRealPath())->resize(200, 200);
       $image3->save(public_path() . '/filemanager/userfiles/' . $input['imagebig']->getClientOriginalName());
       $input3['imagebig'] = $name3;

       // Upload nehmen und in DB speichern.
       $path3=public_path() . '/filemanager/userfiles/' . $input3['imagebig'];
       $type = pathinfo($path3, PATHINFO_EXTENSION);
       $data3 = file_get_contents($path3);
       $base643 = 'data:image/' . $type . ';base64,' . base64_encode($data3);
       $input3['imagebig'] = $base643;
      } 
        else {
            $input3= array('imagebig' => 'data:image/png;base64,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 ');
             }



//Merger all inputs
$input_all = (array_merge($input, $input1, $input2, $input3));
$this->recipe->create($input_all);

// Image New END            

//var_dump($input2);
          

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


        
   // $recipe_ingredient = Ingredients::join('recipe_ingredient','recipe_ingredient.ingredient_id','=','ingredients.id')


 $recipe_ingredient = Recipeingredient::join('ingredients','ingredients.id','=','recipe_ingredient.ingredient_id')






->get([
   
    'ingredients.name',  

'recipe_ingredient.id',
        
        'recipe_ingredient.ingredient_id',
        'recipe_ingredient.recipe_id',        
        'recipe_ingredient.delivery',               
        'recipe_ingredient.amount_2_persons',   
        'recipe_ingredient.amount_4_persons',    
        'recipe_ingredient.amount_6_persons' ,
        'recipe_ingredient.einheit',   
        'recipe_ingredient.delivery',


    ]);    

       
        //$recipe_ingredient = Recipeingredient::where('recipe_id', '=', $id)->orderBy('id', 'DESC')->get();
        $ingredients = Ingredients::where('id', '>', 0)->orderBy('id', 'DESC')->get();
        $recipe = $this->recipe->find($id);
        
      //  $recipe_ingredient = $this->recipe->find($id)->recipe_ingredient;
        
        return View::make('backend.recipe.edit', compact('recipe','recipe_ingredient','ingredients' ));
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

            
       $input = Input::all();
    
    //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
    if (Input::hasFile('imagesmall')){

       $file = Input::file('imagesmall');
       $name = $file->getClientOriginalName();
       $image = Image::make(Input::file('imagesmall')->getRealPath())->resize(200, 200);
       $image->save(public_path() . '/filemanager/userfiles/' . $input['imagesmall']->getClientOriginalName());
       $input1['imagesmall'] = $name;

       // Upload nehmen und in DB speichern.
       $path=public_path() . '/filemanager/userfiles/' . $input1['imagesmall'];
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
       $input1['imagesmall'] = $base64;
    }  
        else {

          $hiddenupdateimagesmall = Input::get('hiddenupdateimagesmall');       
          $input1= array('imagesmall' => $hiddenupdateimagesmall);      

             }


     //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
    if (Input::hasFile('imagemiddle')){
       $file2 = Input::file('imagemiddle');
       $name2 = $file2->getClientOriginalName();
       $image2 = Image::make(Input::file('imagemiddle')->getRealPath())->resize(200, 200);
       $image2->save(public_path() . '/filemanager/userfiles/' . $input['imagemiddle']->getClientOriginalName());
       $input2['imagemiddle'] = $name2; 

       // Upload nehmen und in DB speichern.
       $path2=public_path() . '/filemanager/userfiles/' . $input2['imagemiddle'];
       $type = pathinfo($path2, PATHINFO_EXTENSION);
       $data2 = file_get_contents($path2);
       $base642 = 'data:image/' . $type . ';base64,' . base64_encode($data2);
       $input2['imagemiddle'] = $base642;  
     }
        else {
             $hiddenupdateimagemiddle = Input::get('hiddenupdateimagemiddle');       
             $input2= array('imagemiddle' => $hiddenupdateimagemiddle);  
           
             }

       //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
     if (Input::hasFile('imagebig')){
       $file3 = Input::file('imagebig');       
       $name3 = $file3->getClientOriginalName();       
       $image3 = Image::make(Input::file('imagebig')->getRealPath())->resize(200, 200);
       $image3->save(public_path() . '/filemanager/userfiles/' . $input['imagebig']->getClientOriginalName());
       $input3['imagebig'] = $name3;

       // Upload nehmen und in DB speichern.
       $path3=public_path() . '/filemanager/userfiles/' . $input3['imagebig'];
       $type = pathinfo($path3, PATHINFO_EXTENSION);
       $data3 = file_get_contents($path3);
       $base643 = 'data:image/' . $type . ';base64,' . base64_encode($data3);
       $input3['imagebig'] = $base643;
      } 
        else {

             $hiddenupdateimagebig = Input::get('hiddenupdateimagebig');       
             $input3= array('imagebig' => $hiddenupdateimagebig);  
             }



//Merger all inputs
$input_all = (array_merge($input, $input1, $input2, $input3));



   $this->recipe->update($id, $input_all);

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


