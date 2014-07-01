<?php namespace App\Controllers\Admin;
use BaseController;
use Calendar;
use Deliveryzipcode;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
class Calendar_sefa_free_Controller extends BaseController

{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        return View::make('backend.deliverycalendar.index', compact('logisticianmanager', 'deliveryzipcode', 'deliveryzipcodeall'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index_get()

    {
        return Response::json(Calendar::orderBy('id')->get());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
        $calendar = new Calendar;
        $calendar->start = Input::get('start');
        $calendar->end = Input::get('endx');
        $calendar->title = Input::get('title');
        $calendar->save();
        // return 'create';
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function edit($id)

    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update()

    {
        $calendar = Calendar::find(Input::get('id'));
        $calendar->start = Input::get('start');
        $calendar->end = Input::get('end');
        $calendar->title = Input::get('title');
        $calendar->save();
        //  return $calendar;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy()

    {
        $calendar = Calendar::find(Input::get('id'));
        $calendar->delete();
        // return 'delete';
    }
}


