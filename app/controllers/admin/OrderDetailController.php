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

use OrderStatusHistory;
use Sefa\Exceptions\Validation\ValidationException;
class OrderDetailController extends BaseController

{
    protected $order_detail_detail;
    public function __construct(OrderDetail $order_detail, OrderAddress $order_address,  OrderStatusHistory $order_status_history)

    {
        View::share('active', 'modules');
       
        $this->order_detail = $order_detail;
        $this->order_address = $order_address;
  
        $this->order_status_history = $order_status_history;
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
    public function group($id)

    {
        $order = $this->order_detail->find($id);
        $order_address = $this->order_detail->find($id);
        //$order_items = $this->order_detail->find($id)->order_items;
         $order_items = OrderDetail::find($id)->order_items;
        $order_status_history = $this->order_detail->find($id)->order_status_history;






      var_dump($order_items);
        return View::make('backend.order.edit', compact('order', 'order_address', 'order_items', 'order_status_history'));
    }
}


