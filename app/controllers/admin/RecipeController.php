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
           $input1= array('imagesmall' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAEWElEQVR4nO3d0W2bVRiAYQd1ABigvoAN6AiAvAAtG8AGIPm+RnQD2ADBALVgAyQ2KBdeADYot/bX6P1j4iYNfZ67YznOSdRXv0/Pf5yr5y8fv14B1/rgvicA7zKBQBAIBIFAEAgEgUAQCIRHS0/Ybg5XdzERuA+7/Tr3AV1BIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgPHrb32C3X388Hnp15kt8cjzYbg5/3W5GcHOuIBAEAkEgEAQCQSAQBAJBIBAEAkEgEAQCQSAQ3vq9WA/dbr/+fDz0zRh/eeZL/jTGPx4PtpvDn2e+3ondfv31eGjO99MzX/K7MT6Z/3Zz+GdhPt+Oh3448/vNe+/m1897/S56754rCASBQBAIBGuQ4T+8Zz7XXCM8G9//yfF46T30br/+bTw010y3NX/+r8b4yeqy5ppprjHulCsIBIFAEAiE934Ncs2Z+aU1x9yn+Ox4MPcFbrCm+XCM5z7AyXvya/Y5ltYcc99ivsc/cYM1zck+ypzPdnOY+zznutc1x+QKAkEgEAQC4b1fg6ze/H/3Jd8fD5buRdpuDi+Ox7v9emmN82yM5/zOne9c0yyZ81ta43wxxrddg/w+xk+PB0u/70tzBYEgEAgCgWANcv75iF+OB7v9+oJTWa1Wb+6LTOfO9+/jwT3M91wn+zB3veaYXEEgCASCQCAIBIJAIAgEgkAg2Ad583zH0r1H896gXy87nUVzvkv7Ih8dD+57X+GhcQWBIBAIAoFgDTLu/VmtVvMM+XRyXmK3X5+8p99uDvM8w4ndfj3vXZpnzE8+d2q7OczPnfp5jJfWIPPesZPzJDf43K35+vNzsU5+nqUz7w+NKwgEgUAQCISHsAZ5dTy4wHmG/Jyo3X49z3Av/T2KkzXMBeaXa4JrzrjPM+FzH2eO3+rv8//GFQSCQCAIBMJDWIPcqWve4897n56O8dzHONe8l+uPc754uzmcrEGu+ezeOd/b/v2QF2N81nwfGlcQCAKBIBAIV89fPn5dT9huDld3NRm4a7v9Ov/9u4JAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAeLT0hN1+/fouJgLvIlcQCAKBIBAIAoEgEAgCgSAQCP8CCraX+MMWoE0AAAAASUVORK5CYII=');
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
           $input2= array('imagemiddle' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAEWElEQVR4nO3d0W2bVRiAYQd1ABigvoAN6AiAvAAtG8AGIPm+RnQD2ADBALVgAyQ2KBdeADYot/bX6P1j4iYNfZ67YznOSdRXv0/Pf5yr5y8fv14B1/rgvicA7zKBQBAIBIFAEAgEgUAQCIRHS0/Ybg5XdzERuA+7/Tr3AV1BIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgPHrb32C3X388Hnp15kt8cjzYbg5/3W5GcHOuIBAEAkEgEAQCQSAQBAJBIBAEAkEgEAQCQSAQ3vq9WA/dbr/+fDz0zRh/eeZL/jTGPx4PtpvDn2e+3ondfv31eGjO99MzX/K7MT6Z/3Zz+GdhPt+Oh3448/vNe+/m1897/S56754rCASBQBAIBGuQ4T+8Zz7XXCM8G9//yfF46T30br/+bTw010y3NX/+r8b4yeqy5ppprjHulCsIBIFAEAiE934Ncs2Z+aU1x9yn+Ox4MPcFbrCm+XCM5z7AyXvya/Y5ltYcc99ivsc/cYM1zck+ypzPdnOY+zznutc1x+QKAkEgEAQC4b1fg6ze/H/3Jd8fD5buRdpuDi+Ox7v9emmN82yM5/zOne9c0yyZ81ta43wxxrddg/w+xk+PB0u/70tzBYEgEAgCgWANcv75iF+OB7v9+oJTWa1Wb+6LTOfO9+/jwT3M91wn+zB3veaYXEEgCASCQCAIBIJAIAgEgkAg2Ad583zH0r1H896gXy87nUVzvkv7Ih8dD+57X+GhcQWBIBAIAoFgDTLu/VmtVvMM+XRyXmK3X5+8p99uDvM8w4ndfj3vXZpnzE8+d2q7OczPnfp5jJfWIPPesZPzJDf43K35+vNzsU5+nqUz7w+NKwgEgUAQCISHsAZ5dTy4wHmG/Jyo3X49z3Av/T2KkzXMBeaXa4JrzrjPM+FzH2eO3+rv8//GFQSCQCAIBMJDWIPcqWve4897n56O8dzHONe8l+uPc754uzmcrEGu+ezeOd/b/v2QF2N81nwfGlcQCAKBIBAIV89fPn5dT9huDld3NRm4a7v9Ov/9u4JAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAeLT0hN1+/fouJgLvIlcQCAKBIBAIAoEgEAgCgSAQCP8CCraX+MMWoE0AAAAASUVORK5CYII=');
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
            $input3= array('imagebig' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAEWElEQVR4nO3d0W2bVRiAYQd1ABigvoAN6AiAvAAtG8AGIPm+RnQD2ADBALVgAyQ2KBdeADYot/bX6P1j4iYNfZ67YznOSdRXv0/Pf5yr5y8fv14B1/rgvicA7zKBQBAIBIFAEAgEgUAQCIRHS0/Ybg5XdzERuA+7/Tr3AV1BIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgPHrb32C3X388Hnp15kt8cjzYbg5/3W5GcHOuIBAEAkEgEAQCQSAQBAJBIBAEAkEgEAQCQSAQ3vq9WA/dbr/+fDz0zRh/eeZL/jTGPx4PtpvDn2e+3ondfv31eGjO99MzX/K7MT6Z/3Zz+GdhPt+Oh3448/vNe+/m1897/S56754rCASBQBAIBGuQ4T+8Zz7XXCM8G9//yfF46T30br/+bTw010y3NX/+r8b4yeqy5ppprjHulCsIBIFAEAiE934Ncs2Z+aU1x9yn+Ox4MPcFbrCm+XCM5z7AyXvya/Y5ltYcc99ivsc/cYM1zck+ypzPdnOY+zznutc1x+QKAkEgEAQC4b1fg6ze/H/3Jd8fD5buRdpuDi+Ox7v9emmN82yM5/zOne9c0yyZ81ta43wxxrddg/w+xk+PB0u/70tzBYEgEAgCgWANcv75iF+OB7v9+oJTWa1Wb+6LTOfO9+/jwT3M91wn+zB3veaYXEEgCASCQCAIBIJAIAgEgkAg2Ad583zH0r1H896gXy87nUVzvkv7Ih8dD+57X+GhcQWBIBAIAoFgDTLu/VmtVvMM+XRyXmK3X5+8p99uDvM8w4ndfj3vXZpnzE8+d2q7OczPnfp5jJfWIPPesZPzJDf43K35+vNzsU5+nqUz7w+NKwgEgUAQCISHsAZ5dTy4wHmG/Jyo3X49z3Av/T2KkzXMBeaXa4JrzrjPM+FzH2eO3+rv8//GFQSCQCAIBMJDWIPcqWve4897n56O8dzHONe8l+uPc754uzmcrEGu+ezeOd/b/v2QF2N81nwfGlcQCAKBIBAIV89fPn5dT9huDld3NRm4a7v9Ov/9u4JAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAeLT0hN1+/fouJgLvIlcQCAKBIBAIAoEgEAgCgSAQCP8CCraX+MMWoE0AAAAASUVORK5CYII=');
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


