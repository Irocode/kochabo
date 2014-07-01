<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\OrderItems\OrderItemsRepository as OrderItems;
use Sefa\Exceptions\Validation\ValidationException;
class OrderItemsController extends BaseController

{
    protected $order_items;
    public function __construct(OrderItems $order_items)

    {
        $this->order_items = $order_items;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $order_items = $this->order_items->paginate(null, true);
        return View::make('backend.order_items.index', compact('order_items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.order_items.create');
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
            $this->order_items->create(Input::all());
            Notification::success('Bestellung wurde hinzugefügt');
            return Redirect::route('admin.order_items.index');
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
        $order_items = $this->order_items->find($id);
        return View::make('backend.order_items.show', compact('order_items'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $order_items = $this->order_items->find($id);
        $order_items_status_history = $this->order_items->find($id)->order_items_status_history;
        $order_items_address = $this->order_items->find($id)->order_items_address;
        return View::make('backend.order_items.edit', compact('order_items', 'order_items_address'));
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
            $this->order_items->update($id, Input::all());
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
        $this->order_items->destroy($id);
        Notification::success('Bestellung wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\Order_ItemsController@index');
    }
    public function confirmDestroy($id)

    {
        $order_items = $this->order_items->find($id);
        return View::make('backend.order_items.confirm-destroy', compact('order_items'));
    }
    public function togglePublish($id)

    {
        return $this->order_items->togglePublish($id);
    }
}


