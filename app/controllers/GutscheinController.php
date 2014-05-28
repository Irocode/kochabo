<?php

use Sefa\Repositories\Gutschein\GutscheinRepository as Gutschein;

class GutscheinController extends BaseController {

    protected $gutschein;

    public function __construct(Gutschein $gutschein) {

        $this->gutschein = $gutschein;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $gutschein = $this->gutschein->paginate();
        return View::make('frontend.gutschein.index', compact('gutschein'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $gutschein = $this->gutschein->find($id);
        return View::make('frontend.gutschein.show', compact('gutschein'));
    }
}