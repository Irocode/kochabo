<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Footer\FooterRepository as Footer;
use Sefa\Exceptions\Validation\ValidationException;

class FooterController extends BaseController

{
    protected $footer;
    public function __construct(Footer $footer)
    {
        View::share('active', 'modules');
        $this->footer = $footer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $footer = $this->footer->paginate(null, true);
        return View::make('backend.footer.index', compact('footer'));
    }
    /**
     * Show the form for creating a footer resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.footer.create');
    }
    /**
     * Store a footerly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        try
        {
            $this->footer->create(Input::all());
            Notification::success('Footer wurde hinzugefügt');
            return Redirect::route('admin.footer.index');
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
        $footer = $this->footer->find($id);
        return View::make('backend.footer.show', compact('footer'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $footer = $this->footer->find($id);
        return View::make('backend.footer.edit', compact('footer'));
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
            $this->footer->update($id, Input::all());
            Notification::success('Footer wurde geupdatet');
            return Redirect::route('admin.footer.index');
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
        $this->footer->destroy($id);
        Notification::success('Footer wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\FooterController@index');
    }
    public function confirmDestroy($id)
    {
        $footer = $this->footer->find($id);
        return View::make('backend.footer.confirm-destroy', compact('footer'));
    }
    public function togglePublish($id)
    {
        return $this->footer->togglePublish($id);
    }
}


