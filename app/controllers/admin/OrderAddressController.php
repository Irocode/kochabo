<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;class OrderAddressController extends BaseController

{
    protected $order_address;
    public function __construct(OrderAddress $order_address)
    {
        View::share('active', 'modules');
        $this->order_address = $order_address;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $order_address = $this->order_address->paginate(null, true);
        return View::make('backend.order_address.index', compact('order_address'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.order_address.create');
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
            $this->order_address->create(Input::all());
            Notification::success('Bestellung wurde hinzugefügt');
            return Redirect::route('admin.order_address.index');
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
        $order_address = $this->order_address->find($id);
        return View::make('backend.order_address.show', compact('order_address'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $order_address = $this->order_address->find($id);
        $order_address_status_history = $this->order_address->find($id)->order_address_status_history;
        $order_address = $this->order_address->find($id)->order_address;
        return View::make('backend.order_address.edit', compact('order_address', 'order_address'));
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
            $this->order_address->update($id, Input::all());
            Notification::success('Bestellung wurde geändert');
            return Redirect::route('admin.customer.index');
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
        $this->order_address->destroy($id);
        Notification::success('Bestellung wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\OrderController@index');
    }
    public function confirmDestroy($id)
    {
        $order_address = $this->order_address->find($id);
        return View::make('backend.order_address.confirm-destroy', compact('order_address'));
    }
    public function togglePublish($id)
    {
        return $this->order_address->togglePublish($id);
    }
}

use Str;
use Notification;
use Sefa\Repositories\OrderAddress\OrderAddressRepository as OrderAddress;
use Sefa\Exceptions\Validation\ValidationException;
class OrderAddressController extends BaseController {
protected $order_address;
public function __construct(OrderAddress $order_address) {
View::share('active', 'modules');


$this->order_address = $order_address;

}
/**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()
				{
				$order_address = $this->order_address->paginate(null, true);
				return View::make('backend.order_address.index', compact('order_address'));
				}
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()
				{
				return View::make('backend.order_address.create');
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
								$this->order_address->create(Input::all());
								Notification::success('Bestellung wurde hinzugefügt');
								return Redirect::route('admin.order_address.index');
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
				$order_address = $this->order_address->find($id);
				return View::make('backend.order_address.show', compact('order_address'));
				}
/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return Response
 */
public function edit($id)
				{
				$order_address = $this->order_address->find($id);
				$order_address_status_history = $this->order_address->find($id)->order_address_status_history;
				$order_address = $this->order_address->find($id)->order_address;
				return View::make('backend.order_address.edit', compact('order_address', 'order_address'));
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
								$this->order_address->update($id, Input::all());
								Notification::success('Bestellung wurde geändert');
								return Redirect::route('admin.customer.index');
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
				$this->order_address->destroy($id);
				Notification::success('Bestellung wurde gelöscht');
				return Redirect::action('App\Controllers\Admin\OrderController@index');
				}
public function confirmDestroy($id)
				{
				$order_address = $this->order_address->find($id);
				return View::make('backend.order_address.confirm-destroy', compact('order_address'));
				}
public function togglePublish($id)
				{
				return $this->order_address->togglePublish($id);
				}
}


