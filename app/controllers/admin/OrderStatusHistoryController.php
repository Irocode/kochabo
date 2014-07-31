<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\OrderStatusHistory\OrderStatusHistoryRepository as OrderStatusHistory;
use Sefa\Exceptions\Validation\ValidationException;
class OrderStatusHistoryController extends BaseController

{
    protected $order_status_history;
    public function __construct(OrderStatusHistory $order_status_history)
    {
        $this->order_status_history = $order_status_history;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $order_status_history = $this->order_status_history->paginate(null, true);
        return View::make('backend.order_status_history.index', compact('order_status_history'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.order_status_history.create');
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
            $this->order_status_history->create(Input::all());
            Notification::success('Bestellung wurde hinzugefügt');
            return Redirect::route('admin.order_status_history.index');
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
        $order_status_history = $this->order_status_history->find($id);
        return View::make('backend.order_status_history.show', compact('order_status_history'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $order_status_history = $this->order_status_history->find($id);
        $order_status_history_status_history = $this->order_status_history->find($id)->order_status_history_status_history;
        $order_status_history_address = $this->order_status_history->find($id)->order_status_history_address;
        return View::make('backend.order_status_history.edit', compact('order_status_history', 'order_status_history_address'));
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
            $this->order_status_history->update($id, Input::all());
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
        $this->order_status_history->destroy($id);
        Notification::success('Bestellung wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\Order_ItemsController@index');
    }
    public function confirmDestroy($id)
    {
        $order_status_history = $this->order_status_history->find($id);
        return View::make('backend.order_status_history.confirm-destroy', compact('order_status_history'));
    }
    public function togglePublish($id)
    {
        return $this->order_status_history->togglePublish($id);
    }
}


