<?php

use Sefa\Repositories\Obstbox\ObstboxRepository as Obstbox;

class ObstboxController extends BaseController

{
    protected $obstbox;
    public function __construct(Obstbox $obstbox, Products $products)

    {
        $this->obstbox = $obstbox;
        $this->products = $products;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $obstbox = $this->obstbox->paginate();
        $products = Products::all();
        // $products_grosse_obst_box = Products::find(83)->products;
        $products_grosse_obst_box = Products::where('id', '=', 83)->get();
        $products_kleine_obst_box = Products::where('id', '=', 84)->get();
        return View::make('frontend.obstbox.index', compact('obstbox', 'products', 'products_grosse_obst_box', 'products_kleine_obst_box'));
    }
    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null)

    {
        $obstbox = $this->obstbox->find($id);
        return View::make('frontend.obstbox.show', compact('obstbox'));
    }
    // Test loginabfrage
    public function login_query()

    {
        $obstbox = $this->obstbox->paginate();
        return View::make('frontend.obstbox.login_query', compact('obstbox'));
    }
}

