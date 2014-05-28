<?php

use Sefa\Repositories\Obstbox\ObstboxRepository as Obstbox;

class ObstboxController extends BaseController {

    protected $obstbox;

    public function __construct(Obstbox $obstbox) {

        $this->obstbox = $obstbox;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $obstbox = $this->obstbox->paginate();
        return View::make('frontend.obstbox.index', compact('obstbox'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $obstbox = $this->obstbox->find($id);
        return View::make('frontend.obstbox.show', compact('obstbox'));
    }
}