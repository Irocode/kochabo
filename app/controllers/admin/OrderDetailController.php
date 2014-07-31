<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use OrderDetail;
use OrderAddress;
use OrderItems;
use Sefa\Exceptions\Validation\ValidationException;
class OrderDetailController extends BaseController

{ 
    public function __construct(OrderDetail $order_detail)
    {
        View::share('active', 'modules');       
        $this->order_detail = $order_detail; 
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $order = $this->order_detail->find($id);
        $order_address = $this->order_detail->find($id);
      //  $order_items = $this->order_detail->find($id)->order_items;
        $order_address = OrderDetail::find($id)->orderaddress;
        $order_items = OrderDetail::find($id)->orderitems;
        $order_status_history = $this->order_detail->find($id)->orderstatushistory;      
      return View::make('backend.order.edit', compact('order', 'order_address', 'order_items', 'order_status_history'));
    }
}


