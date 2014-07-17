<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Image;
use File;
use Notification;
use Sefa\Repositories\PhotoGallery\PhotoGalleryRepository as PhotoGallery;
use Sefa\Repositories\Products\ProductsRepository as Products;
use Sefa\Exceptions\Validation\ValidationException;
class ProductsController extends BaseController

{
    protected $products;
    public function __construct(Products $products, PhotoGallery $photoGallery)

    {
        View::share('active', 'modules');
        $this->products = $products;
        $this->photoGallery = $photoGallery;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $products = $this->products->paginate(null, true);
        return View::make('backend.products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.products.create');
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
           $input1= array('imagex' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAEWElEQVR4nO3d0W2bVRiAYQd1ABigvoAN6AiAvAAtG8AGIPm+RnQD2ADBALVgAyQ2KBdeADYot/bX6P1j4iYNfZ67YznOSdRXv0/Pf5yr5y8fv14B1/rgvicA7zKBQBAIBIFAEAgEgUAQCIRHS0/Ybg5XdzERuA+7/Tr3AV1BIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgCASCQCAIBIJAIAgEgkAgPHrb32C3X388Hnp15kt8cjzYbg5/3W5GcHOuIBAEAkEgEAQCQSAQBAJBIBAEAkEgEAQCQSAQ3vq9WA/dbr/+fDz0zRh/eeZL/jTGPx4PtpvDn2e+3ondfv31eGjO99MzX/K7MT6Z/3Zz+GdhPt+Oh3448/vNe+/m1897/S56754rCASBQBAIBGuQ4T+8Zz7XXCM8G9//yfF46T30br/+bTw010y3NX/+r8b4yeqy5ppprjHulCsIBIFAEAiE934Ncs2Z+aU1x9yn+Ox4MPcFbrCm+XCM5z7AyXvya/Y5ltYcc99ivsc/cYM1zck+ypzPdnOY+zznutc1x+QKAkEgEAQC4b1fg6ze/H/3Jd8fD5buRdpuDi+Ox7v9emmN82yM5/zOne9c0yyZ81ta43wxxrddg/w+xk+PB0u/70tzBYEgEAgCgWANcv75iF+OB7v9+oJTWa1Wb+6LTOfO9+/jwT3M91wn+zB3veaYXEEgCASCQCAIBIJAIAgEgkAg2Ad583zH0r1H896gXy87nUVzvkv7Ih8dD+57X+GhcQWBIBAIAoFgDTLu/VmtVvMM+XRyXmK3X5+8p99uDvM8w4ndfj3vXZpnzE8+d2q7OczPnfp5jJfWIPPesZPzJDf43K35+vNzsU5+nqUz7w+NKwgEgUAQCISHsAZ5dTy4wHmG/Jyo3X49z3Av/T2KkzXMBeaXa4JrzrjPM+FzH2eO3+rv8//GFQSCQCAIBMJDWIPcqWve4897n56O8dzHONe8l+uPc754uzmcrEGu+ezeOd/b/v2QF2N81nwfGlcQCAKBIBAIV89fPn5dT9huDld3NRm4a7v9Ov/9u4JAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAEAgEgUAQCASBQBAIBIFAeLT0hN1+/fouJgLvIlcQCAKBIBAIAoEgEAgCgSAQCP8CCraX+MMWoE0AAAAASUVORK5CYII=');
             }


$input_all = (array_merge($input, $input1));
      // $attributes = ['title' => 'Photo Gallery Products', 'content' => 'nix', 'is_published' => false];
     $this->products->create($input_all);
          //  $this->products->create(Input::all());
            // $id = $this->photoGallery->create($attributes);
            Notification::success('Artikel wurde hinzugefügt');
            return Redirect::route('admin.products.index');
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
        $products = $this->products->find($id);
        return View::make('backend.products.show', compact('products'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $products = $this->products->find($id);
        return View::make('backend.products.edit', compact('products'));
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
         $this->products->update($id, $input_all);

            //$this->products->update($id, Input::all());
            Notification::success('Artikel wurde geändert');
            return Redirect::route('admin.products.index');
        }
        catch(ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id, user_id
     * @return Response
     */
    public function destroy($id)

    {
        $user_id = Input::get('user_id');
        $this->products->destroy($id);
        // Notification::warning('Artikel wurde gelöscht');
        return Redirect::route('admin.products.index', array(
            $user_id
        ));
    }
    public function confirmDestroy($id)

    {
        $products = $this->products->find($id);
        return View::make('backend.products.confirm-destroy', compact('products'));
    }
    public function lieferzeiten_update($id)

    {
        $this->products->update($id, Input::all());
        return $this->products->lieferzeiten_update($id);
    }
}


