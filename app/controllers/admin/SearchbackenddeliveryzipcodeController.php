<?php namespace App\Controllers\Admin;


use BaseController;
use View;
use LogViewer;
use Paginator;
use Deliveryzipcode;
use Input;
use Redirect;
use Validator;
use Response;
use Str;
use Notification;
use Searchbackenddeliveryzipcode;

use Sefa\Exceptions\Validation\ValidationException;

class SearchbackenddeliveryzipcodeController extends BaseController {





    public function index() {
        $keyword  = Input::get('keyword ');
       return View::make('backend.search.index')->with ('keyword',$keyword);  
    }




public function search() {  

$keyword = Input::get('keyword');




$deliveryzipcodes=Deliveryzipcode::where('zip', 'Like', '%'.$keyword.'%')->get();

Notification::success('Postleitzahl wurde gefunden');





  return View::make('backend.search.index')->with ('deliveryzipcodes',$deliveryzipcodes);  





}
  

}

/*
public function index() {

        
        return View::make('backend.search.index')->with ('keyword',$keyword);  
      
    }




public function search($keyword) {  

$keyword  = Input::get('keyword ');
$deliveryzipcodes=Deliveryzipcode::where('zip', 'LIKE', '%'.$keyword.'%')->get();
 return View::make('backend.search.index', compact('deliveryzipcodes'));  
Notification::success('Resultat gefunden!');

$html = View::make('backend.search.index', $keyword)->render();
return $this->deliveryzipcodes($html);

}


