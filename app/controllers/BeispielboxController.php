<?php

use Sefa\Repositories\Beispielbox\BeispielboxRepository as Beispielbox;

class BeispielboxController extends BaseController {

    protected $beispielbox;

    public function __construct(Beispielbox $beispielbox) {

        $this->beispielbox = $beispielbox;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $beispielbox = $this->beispielbox->paginate();
        return View::make('frontend.beispielbox.index', compact('beispielbox'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $beispielbox = $this->beispielbox->find($id);
        return View::make('frontend.beispielbox.show', compact('beispielbox'));
    }
}