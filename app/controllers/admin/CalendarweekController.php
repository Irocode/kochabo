<?php namespace App\Controllers\Admin;
use BaseController;
use Products;
use Recipe;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use calendarweekrecipestruktur;
use Image;
use Session;
use File;
use Notification;
use calendarweek;
//use Sefa\Repositories\Calendarweek\CalendarweekRepository as Calendarweek;
//use Sefa\Exceptions\Validation\ValidationException;


class CalendarweekController extends BaseController

{
    public function __construct(Calendarweek $calendarweek, Products $products, Recipe $recipe, Calendarweekrecipestruktur $calendarweekrecipestruktur)
    {
        View::share('active', 'modules');
        $this->calendarweek = $calendarweek;  
        $this->products = $products;   
        $this->recipe = $recipe;
        $this->calendarweekrecipestruktur = $calendarweekrecipestruktur;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       // $calendarweek = $this->calendarweek->paginate(null, true);
        return View::make('backend.calendarweek.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.calendarweek.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

       

        $data= Input::all();


//var_dump($data);
echo "<pre>"; 
echo print_r($data); 
echo "</pre>"; 


var_dump('<hr>');  
    

    $calendarweek = new Calendarweek;  
    $calendarweek->calendarweek = Input::get('calendarweek');
    $calendarweek->year = Input::get('year');  
    $calendarweek->save();
    $LastInsertId_calendarweek = $calendarweek->packetid;
    var_dump('<br>LASTINSERIDcalendarweek');
    var_dump($LastInsertId_calendarweek);


    $Calendarweekrecipestruktur = new Calendarweekrecipestruktur; 
    $Calendarweekrecipestruktur->packetid = $LastInsertId_calendarweek;  
    $Calendarweekrecipestruktur->save();
    $LastInsertId = $Calendarweekrecipestruktur->packetid;
    var_dump('<br>LASTINSERIDCalendarweekrecipestruktur');
    var_dump($LastInsertId);

var_dump('<hr>');  






  
foreach ($_REQUEST as $key2 => $value) {



/*
if  ($key2="_tocken") {$key3="86";} else {$key3=$key2;};
if  ($key2="imagex") {$key3="86";} else {$key3=$key2;};
if  ($key2="activated") {$key3="86";} else {$key3=$key2;};
if  ($key2="check_yes") {$key3="86";} else {$key3=$key2;};
if  ($key2="calendarweek") {$key3="86";} else {};
if  ($key2="year") {$key3="86";} else {};

*/



if ($key2 > 0) {



//echo (int)$key2;  echo"<br>";
echo (int)$key2;  echo"<br>";
$recipe=(int)$key2;

} else {};





if ($key2 > 0) {
$Calendarweekrecipestruktur = new Calendarweekrecipestruktur; 
$Calendarweekrecipestruktur->packetid = $LastInsertId_calendarweek; 
$Calendarweekrecipestruktur->productname = $key2;
$Lastproductname = $Calendarweekrecipestruktur->productname;
$Calendarweekrecipestruktur->productid = $key2;
$Calendarweekrecipestruktur->recipeid = $_REQUEST[$recipe]['a'];
$Calendarweekrecipestruktur->sorting = 1;
$Calendarweekrecipestruktur->save();
}
else {};

if ($key2 > 0) {
$Calendarweekrecipestruktur = new Calendarweekrecipestruktur; 
$Calendarweekrecipestruktur->packetid = $LastInsertId_calendarweek; 
$Calendarweekrecipestruktur->productname = $key2;
$Lastproductname = $Calendarweekrecipestruktur->productname;
$Calendarweekrecipestruktur->productid = $key2;
$Calendarweekrecipestruktur->recipeid = $_REQUEST[$recipe]['b'];
$Calendarweekrecipestruktur->sorting = 2;
$Calendarweekrecipestruktur->save();

}
else {};


if ($key2 > 0) {
$Calendarweekrecipestruktur = new Calendarweekrecipestruktur; 
$Calendarweekrecipestruktur->packetid = $LastInsertId_calendarweek; 
$Calendarweekrecipestruktur->productname = $key2;
$Lastproductname = $Calendarweekrecipestruktur->productname;
$Calendarweekrecipestruktur->productid = $key2;
$Calendarweekrecipestruktur->recipeid = $_REQUEST[$recipe]['c'];
$Calendarweekrecipestruktur->sorting = 3;
$Calendarweekrecipestruktur->save();
}
else {};







/*
var_dump($key2); var_dump('<br><br>');  
var_dump($value);var_dump('<br>');
var_dump('<hr>');  



   // Diese einfache Callback-Funktion gibt jedes Schlüssel-Wert-Paar aus
   



*/



}

/*


$familienbox_5=Input::get('familienbox_3');



 $callback = function($value, $familienbox_5) {
        echo("$value: $familienbox_5, ");
            }; 
    array_walk_recursive($familienbox_5, $callback);

var_dump('<hr>');  


    $familienbox_3=Input::get('familienbox_3');



 $callback = function($value, $familienbox_3) {
        echo("$value: $familienbox_3, ");
            }; 
    array_walk_recursive($familienbox_3, $callback);


*/
echo"<br>";


}










    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $calendarweek = $this->calendarweek->find($id);

       
       // return View::make('backend.calendarweek.show', compact('calendarweek'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {       



    $calendarweek = $this->calendarweek->find($id);
    $calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $id)->orderBy('id', 'DESC')->get();
    $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
    $recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();

    return View::make('backend.calendarweek.edit', compact('calendarweek','products','recipe','calendarweekrecipestruktur'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

//return View::make('backend.calendarweek.index');

 $familienbox_5 = Input::get('familienbox_5');
 $familienbox_3 = Input::get('familienbox_3');

//$array = array_dot($familienbox_3);

//$array2 = array_dot($familienbox_5);





//$array    = array("val"=>$familienbox_3);
//$json_str = json_encode($array);

//var_dump($familienbox_5);
$data= Input::all();


var_dump($data);
var_dump('<hr>');

/*
var_dump($array); 
var_dump('<br>');
var_dump($array2);


var_dump('<br>');var_dump('<br>');



//$array = array();
foreach ($array as $key => $value) {
  array_set($array, $key, $value);
var_dump($array); 

}
*/





/*


$packetid = Input::get('packetid');
$calendarweek = Input::get('calendarweek');

$calendarweek = new Calendarweek;
$calendarweek->packetid = $packetid;
$calendarweek->calendarweek = $calendarweek;

$calendarweek->save();
*/


/*

$new = new Contact(array(
    'salutation' => Input::get('salutation'),
    'first_name' => Input::get('first_name'),
    'last_name'  => Input::get('last_name'),
    'company_id' => Input::get('company_id'),
    'city' => ...
    ...
));

*/




//$familienbox_5="2016";
//print_r(array_keys($_REQUEST, "familienbox_5"));

//var_dump($serializedArr);
//$serializedArr = serialize($familienbox_3);
//$record = Calendarweek::find(16);
//unserialize($record->year);
//$calendarweek = new Calendarweek;
//$calendarweek->year = $serializedArr;
//$calendarweek->save();

/*
$calendarweek = new Calendarweek;
$calendarweek->year = $familienbox_3;
$calendarweek->save();

*/



 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->calendarweek->destroy($id);
        Notification::success('Adresse wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\AddressController@index');
    }
    public function confirmDestroy($id)
    {
        $calendarweek = $this->calendarweek->find($id);
        return View::make('backend.calendarweek.confirm-destroy', compact('calendarweek'));
    }
    public function togglePublish($id)
    {
        return $this->calendarweek->togglePublish($id);
    }
}


