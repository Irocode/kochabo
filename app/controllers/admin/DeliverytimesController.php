<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Deliverytimes\DeliverytimesRepository as Deliverytimes;
use Sefa\Repositories\Logisticianmanager\LogisticianmanagerRepository as Logisticianmanager;
use Sefa\Exceptions\Validation\ValidationException;
class DeliverytimesController extends BaseController

{
    protected $deliverytimes;
    protected $logisticianmanager;
    public function __construct(Deliverytimes $deliverytimes, Logisticianmanager $logisticianmanager)

    {
        View::share('active', 'modules');
        $this->deliverytimes = $deliverytimes;
        $this->logisticianmanager = $logisticianmanager;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $deliverytimes = $this->deliverytimes->paginate(null, true);
        return View::make('backend.deliverytimes.index', compact('deliverytimes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.deliverytimes.create');
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
            $this->deliverytimes->create(Input::all());
            Notification::success('Zeit wurde hinzugefügt');
            return Redirect::back();
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
        $deliverytimes = $this->deliverytimes->find($id);
        return View::make('backend.deliverytimes.show', compact('deliverytimes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $deliverytimes = $this->deliverytimes->find($id);
        return View::make('backend.edit_deliverytimes.edit', compact('deliverytimes'));
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
            $this->deliverytimes->update($id, Input::all());
            Notification::success('Zeit wurde geändert');
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
     * @param  int $id, user_id
     * @return Response
     */
    public function destroy($id)

    {
        $user_id = Input::get('user_id');
        $this->deliverytimes->destroy($id);
        // Notification::warning('Zeit wurde gelöscht');
        return Redirect::route('admin.logisticianmanager.group_sefa_free', array(
            $user_id
        ));
    }
    public function confirmDestroy($id)

    {
        $deliverytimes = $this->deliverytimes->find($id);
        return View::make('backend.deliverytimes.confirm-destroy', compact('deliverytimes'));
    }
    public function lieferzeiten_update($id)

    {
        $this->deliverytimes->update($id, Input::all());
        return $this->deliverytimes->lieferzeiten_update($id);
    }
}


