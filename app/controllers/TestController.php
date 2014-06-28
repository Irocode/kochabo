<?php



class TestController extends BaseController { 

    public function __construct(Tag $tag) {


    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id) {

      
$logisticianmanager=Logisticianmanager::find($id);
$deliverytimes= Logisticianmanager::find($id)->deliverytimes;

        return View::make('frontend.test.edit', compact('logisticianmanager','deliverytimes'));
    }
}
