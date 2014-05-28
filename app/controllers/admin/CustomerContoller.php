<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Customer\CustomerRepository as Customer;
use Sefa\Exceptions\Validation\ValidationException;

class CustomerController extends BaseController {

    protected $customer;

    public function __construct(Customer $customer) {

        View::share('active', 'modules');
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $customer = $this->customer->paginate(null, true);
        return View::make('backend.customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return View::make('backend.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        try {
            $this->customer->create(Input::all());
            Notification::success('Neuer Kunde wurde hinzugefügt <br>Adress Tabelle wurde erstellt');
         
            return Redirect::route('admin.customer.index');
        } catch (ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {

        $customer = $this->customer->find($id);
        return View::make('backend.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {

        $customer = $this->customer->find($id);
        return View::make('backend.customer.edit', compact('customer'));
           // $footer = Footer::find($id);
           $listabostatus = Listabostatus::find(1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        try {
            $this->customer->update($id, Input::all());
            Notification::success('Kundendaten wurde geändert <br> Adress Tabelle wurde geändert' );
            return Redirect::route('admin.customer.index');
        } catch (ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {

        $this->customer->destroy($id);
        Notification::success('Kunde wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\CustomerController@index');
    }

    public function confirmDestroy($id) {

        $customer = $this->customer->find($id);
        return View::make('backend.customer.confirm-destroy', compact('customer'));
    }

    public function togglePublish($id) {

        return $this->customer->togglePublish($id);
    }


/**
     * Show the form for address the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function address($id) {       


        $ausgabenl = Address::find($id);

        $address = $this->address->find($id);
        return View::make('backend.customer.address', compact('address'));
    }

    



}
