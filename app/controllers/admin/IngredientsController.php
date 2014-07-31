<?php namespace App\Controllers\Admin;
use BaseController;
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
     

// Image New Start
   try
        {
            
       $input = Input::all();
    
    //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
    if (Input::hasFile('imagex')){

       $file = Input::file('imagex');
       $name = $file->getClientOriginalName();
       $image = Image::make(Input::file('imagex')->getRealPath())->resize(200, 200);
       $image->save(public_path() . '/filemanager/userfiles/' . $input['imagex']->getClientOriginalName());
       $input1['imagex'] = $name;

       // Upload nehmen und in DB speichern.
       $path=public_path() . '/filemanager/userfiles/' . $input1['imagex'];
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
       $input1['imagex'] = $base64;
    }  
        else {
           $input1= array('imagex' => 'data:image/png;base64,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 ');
             }


$input_all = (array_merge($input, $input1));
      // $attributes = ['title' => 'Photo Gallery Products', 'content' => 'nix', 'is_published' => false];
     $this->ingredients->create($input_all);


           // $this->ingredients->create(Input::all());
            Notification::success('Zutat wurde hinzugefügt');


          
 $modal = Input::get('modal');
 $name = Input::get('name');
 $recipeid = Input::get('recipeid');
 //$lastInsertedId = Input::get('lastInsertedId');
 $lastInsertedId = Session::get('lastInsertedId');
//var_dump($lastInsertedId);

            if ($modal == 'yes')
            {      
              
           //   var_dump($lastInsertedId);
                
                   return Redirect::to("/admin/recipe/" . $recipeid . "/edit?name=$name&idzt=$lastInsertedId#zielanker_speichern");  
            }
            else
            {
                return Redirect::route('admin.ingredients.index');
            }            
        }
        catch(ValidationException $e)
        {


           #zielanker_speichern


            
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
       // Image New Start
   try
        {
            
       $input = Input::all();

    
    //Anfrage ob Bild vorhanden wenn ja dann erstelle ein Upload 200x200px 
    if (Input::hasFile('imagex')){

       $file = Input::file('imagex');
       $name = $file->getClientOriginalName();
       $image = Image::make(Input::file('imagex')->getRealPath())->resize(200, 200);
       $image->save(public_path() . '/filemanager/userfiles/' . $input['imagex']->getClientOriginalName());
       $input1['imagex'] = $name;

       // Upload nehmen und in DB speichern.
       $path=public_path() . '/filemanager/userfiles/' . $input1['imagex'];
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
       $input1['imagex'] = $base64;
    }  
        else {                 

          $hiddenupdateimagex = Input::get('hiddenupdateimagex');       
          $input1= array('imagex' => $hiddenupdateimagex);        

             }

         $input_all = (array_merge($input, $input1));
            //  $input_all = $input;
         $this->ingredients->update($id, $input_all);


           // $this->ingredients->update($id, Input::all());
            Notification::success('Zutat wurde geändert');
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
        Notification::success('Zutat wurde gelöscht');
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


