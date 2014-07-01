<?php namespace App\Controllers\Admin;
use BaseController;
use Redirect;
use View;
use Config;
use Input;
use Setting;
use Notification;
use List_Currency;
use Validator;
class List_CurrencyController extends BaseController

{
    protected $list_currency;
    public function __construct(List_Currency $list_currency)

    {
        View::share('active', 'modules');
        $this->list_currency = $list_currency;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $list_currency = $this->list_currency->paginate(10);
        return View::make('backend.lists.list_currency.index', compact('list_currency'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        return View::make('backend.lists.list_currency.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
        $rules = array(
            'bezeichnung' => 'required',
        );
        $validator = Validator::make(Input::all() , $rules);
        if ($validator->fails())
        {
            Notification::success('Neue Währung konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_currency.create')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neue Währung wurde hinzugefügt');
            $list_currency = new List_Currency;
            $list_currency->bezeichnung = Input::get('bezeichnung');
            $list_currency->save();
            return Redirect::route('admin.list_currency.index');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)

    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)

    {
        $list_currency = $this->list_currency->find($id);
        return View::make('backend.lists.list_currency.edit', compact('list_currency'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)

    {
        $rules = array(
            'bezeichnung' => 'required',
        );
        $validator = Validator::make(Input::all() , $rules);
        if ($validator->fails())
        {
            Notification::success('Neue Währung konnte nicht hinzugefügt werden');
            return Redirect::route('admin.list_currency.edit')->withErrors($validator)->withInput(Input::except('bezeichnung'));
        }
        else
        {
            Notification::success('Neue Währung wurde hinzugefügt');
            $list_currency = List_Currency::find($id);
            $list_currency->bezeichnung = Input::get('bezeichnung');
            $list_currency->save();
            return Redirect::route('admin.list_currency.index');
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
        $list_currency = List_Currency::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $this->list_currency->destroy($id);
        Notification::success('Währung wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\List_CurrencyController@index');
    }
    public function confirmDestroy($id)

    {
        $list_currency = List_Currency::where('id', '>', 1)->orderBy('bezeichnung', 'DESC')->get();
        $list_currency = $this->list_currency->find($id);
        return View::make('backend.lists.list_currency.confirm-destroy', compact('list_currency'));
    }
}


