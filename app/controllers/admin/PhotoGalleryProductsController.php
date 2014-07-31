<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use File;
use Image;
use Notification;
use Config;
use Products;
use Sefa\Repositories\PhotoGallery\PhotoGalleryRepository as PhotoGallery;
use Sefa\Exceptions\Validation\ValidationException;

class PhotoGalleryProductsController extends BaseController

{
    protected $photoGallery;
    protected $products;
    public function __construct(PhotoGallery $photoGallery, Products $products)

    {
        View::share('active', 'modules');
        $this->photoGallery = $photoGallery;
        $this->products = $products;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photo_galleries = $this->photoGallery->paginate();
        return View::make('backend.photo_gallery.index', compact('photo_galleries'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $attributes = ['title' => 'Photo Gallery Title', 'content' => 'Photo Gallery Content', 'is_published' => false];
        try
        {
            $id = $this->photoGallery->create($attributes);
            return Redirect::to("/admin/photo_gallery/" . $id . "/edit");
        }
        catch(ValidationException $e)
        {
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
        $photo_gallery = $this->photoGallery->find($id);
        return View::make('backend.photo_gallery.show', compact('photo_gallery'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $pruefe_anlegen = Input::get('anlegen');
        // var_dump($pruefe_anlegen);
        if ($pruefe_anlegen == 'ja')
        {
            // Anlegen Ja in Products
            $products = $this->products->find($id);
            $products->picangelegt = 'ja';
            $products->save();
            // var_dump($id);
            $attributes = ['id' => $id, 'title' => 'Anlage_von_Products', 'content' => 'Products Photo Gallery', 'is_published' => false];
            $id = $this->photoGallery->create($attributes);
            // var_dump('passt');
            $photoGallery = $this->photoGallery->find($id);
            $products = $this->products->find($id);
            $products->photo_galleries_id = $id;
            $products->save();
            $photo_gallery = $this->photoGallery->find($id);
            return View::make('backend.photo_gallery.edit_products', compact('photo_gallery'));
        }
        else
        {
        
            $photoGallery = $this->photoGallery->find($id);
        
            */
            $photo_gallery = $this->photoGallery->find($id);
            return View::make('backend.photo_gallery.edit_products', compact('photo_gallery'));
        }
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
            $this->photoGallery->update($id, Input::all());
            Notification::success('Foto wurde erstellt');
            return Redirect::route('admin.photo_gallery.index');
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
        $this->photoGallery->destroy($id);
        Notification::success('Photo gallery was successfully deleted');
        return Redirect::action('App\Controllers\Admin\PhotoGalleryController@index');
    }
    public function confirmDestroy($id)
    {
        $photo_gallery = $this->photoGallery->find($id);
        return View::make('backend.photo_gallery.confirm-destroy', compact('photo_gallery'));
    }
    public function togglePublish($id)
    {
        return $this->photoGallery->togglePublish($id);
    }
    public function upload($id)
    {
        try
        {
            $this->photoGallery->upload($id, Input::file());
            return Response::json('success', 200);
        }
        catch(ValidationException $e)
        {
            return Response::json('error: ' . $e->getErrors() , 400);
        }
    }
    public function deleteImage()
    {
        return $this->photoGallery->deletePhoto(Input::get('file'));
    }
}


