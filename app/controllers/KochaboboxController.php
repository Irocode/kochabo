<?php

use Sefa\Repositories\Kochabobox\KochaboboxRepository as Kochabobox;

class KochaboboxController extends BaseController {

    protected $kochabobox;

    public function __construct(Kochabobox $kochabobox) {

        $this->kochabobox = $kochabobox;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $kochabobox = $this->kochabobox->paginate();
        return View::make('frontend.kochabobox.index', compact('kochabobox'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $kochabobox = $this->kochabobox->find($id);
        return View::make('frontend.kochabobox.show', compact('kochabobox'));
    }
}