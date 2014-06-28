<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Logisticianmanager\LogisticianmanagerRepository as Logisticianmanager;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\Category\CategoryRepository as Category;
use Sefa\Repositories\Article\ArticleRepository as Article;
use Sefa\Repositories\Deliverytimes\DeliverytimesRepository as Deliverytimes;
class LogisticianmanagerController extends BaseController {
protected $logisticianmanager;
protected $category;
protected $article;
protected $deliverytimes;
public function __construct(Deliverytimes $deliverytimes, Logisticianmanager $logisticianmanager,  Category $category, Article $article) {
View::share('active', 'modules');
$this->logisticianmanager = $logisticianmanager;
$this->category = $category;
$this->article = $article;
$this->deliverytimes = $deliverytimes;
}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

				{
				// return Datatables::of(Logisticianmanager::select(array('id', 'name')))->make();
				/*
				return Datatable::collection(Logisticianmanager::all(array('id','name')))
				->showColumns('id', 'name')
				->searchColumns('name')
				->orderColumns('id','name')
				->make();
				*/
				$logisticianmanager = $this->logisticianmanager->paginate(null, true);
				return View::make('backend.logisticianmanager.index', compact('logisticianmanager'));
				}
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()

				{
				return View::make('backend.logisticianmanager.create');
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
								$this->logisticianmanager->create(Input::all());
								Notification::success('Logistiker wurde hinzugefügt');
								return Redirect::route('admin.logisticianmanager.index');
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
				$logisticianmanager = $this->logisticianmanager->find($id);
				$deliverytimes = $this->logisticianmanager->find(10)->deliverytimes;
				return View::make('backend.logisticianmanager.show', compact('$deliverytimes', 'user', 'logisticianmanager', 'categories'));
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function edit($id)

				{
				$logisticianmanager = $this->logisticianmanager->find($id);
				return View::make('backend.logisticianmanager.edit', compact('logisticianmanager'));
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
								$this->logisticianmanager->update($id, Input::all());
								Notification::success('Logistiker wurde geändert');
								return Redirect::back();
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
				$this->logisticianmanager->destroy($id);
				Notification::success('Kunde wurde gelöscht');
				return Redirect::action('App\Controllers\Admin\LogisticianmanagerController@index');
				}
public function confirmDestroy($id)

				{
				$logisticianmanager = $this->logisticianmanager->find($id);
				return View::make('backend.logisticianmanager.confirm-destroy', compact('logisticianmanager'));
				}
public function togglePublish($id)

				{
				return $this->logisticianmanager->togglePublish($id);
				}
/**
 * Show the form for address the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function lieferzeiten_update($id)

				{
				$this->deliverytimes->update($id, Input::all());
				return $this->deliverytimes->lieferzeiten_update($id);
				}
}


