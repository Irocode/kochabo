<?php

use Sefa\Repositories\Login\LoginRepository as Login;

class LoginController extends BaseController {

    protected $login;

    public function __construct(Login $login) {

        $this->login = $login;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $login = $this->login->paginate();
        return View::make('frontend.login.form', compact('login'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $login = $this->login->find($id);
        return View::make('frontend.login.show', compact('login'));
    }
}