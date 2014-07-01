<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Offer\OfferRepository as Offer;
use Sefa\Exceptions\Validation\ValidationException;

class OfferController extends BaseController

{
    protected $offer;
    public function __construct(Offer $offer)

    {
        View::share('active', 'modules');
        $this->offer = $offer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $offer = $this->offer->paginate(null, true);
        return View::make('backend.offer.index', compact('offer'));
    }
    /**
     * Show the form for creating a offer resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.offer.create');
    }
    /**
     * Store a offerly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
        try
        {
            $this->offer->create(Input::all());
            Notification::success('Angebot wurde hinzugefügt');
            return Redirect::route('admin.offer.index');
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
        $offer = $this->offer->find($id);
        return View::make('backend.offer.show', compact('offer'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
        $offer = $this->offer->find($id);
        return View::make('backend.offer.edit', compact('offer'));
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
            $this->offer->update($id, Input::all());
            Notification::success('Angebot wurde geupdatet');
            return Redirect::route('admin.offer.index');
        }
        catch(ValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)

    {
        $this->offer->destroy($id);
        Notification::success('Angebot wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\OfferController@index');
    }
    public function confirmDestroy($id)

    {
        $offer = $this->offer->find($id);
        return View::make('backend.offer.confirm-destroy', compact('offer'));
    }
    public function togglePublish($id)

    {
        return $this->offer->togglePublish($id);
    }
}


