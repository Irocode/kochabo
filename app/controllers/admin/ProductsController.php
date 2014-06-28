<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\PhotoGallery\PhotoGalleryRepository as PhotoGallery;
use Sefa\Repositories\Products\ProductsRepository as Products;
use Sefa\Exceptions\Validation\ValidationException;
class ProductsController extends BaseController {
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
				$attributes = ['title' => 'Photo Gallery Products', 'content' => 'nix', 'is_published' => false];
				try
								{
								$this->products->create(Input::all());
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
				try
								{
								$this->products->update($id, Input::all());
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


