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
class CalendarweekController extends BaseController

    {
    public

    function __construct(Calendarweek $calendarweek, Products $products, Recipe $recipe, Calendarweekrecipestruktur $calendarweekrecipestruktur)
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
    public

    function index()
        {

        // $calendarweek = $this->calendarweek->paginate(null, true);

        return View::make('backend.calendarweek.index');
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public

    function create()
        {
        $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
        return View::make('backend.calendarweek.create', compact('products'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public

    function store()
        {

 $data = Input::all(); 
        echo "<pre>";
        echo print_r($data);
        echo "</pre>";
        echo"<hr>";        

          $calendarweek = Input::get('calendarweek');    
          $year = Input::get('year'); 



//Wenn Edit Balde dann Update
$update = Input::get('update'); 
         if (isset($update))
          {            

            foreach($_REQUEST['merger'] as $key => $value) {
      

      $dx= $_REQUEST['merger'][$key];  
  var_dump($key);

       //$calendarweekrecipestrukturid = Calendarweekrecipestruktur::find($key);
       //$calendarweekrecipestrukturid->delete();

  $calendarweekrecipestrukturid = Calendarweekrecipestruktur::find($key);
  $calendarweekrecipestrukturid->test3 = 'updated3';
  $calendarweekrecipestrukturid->recipeid = $_REQUEST['merger'][$key]['recipe'][0];
  $calendarweekrecipestrukturid->save();



 }

  
 } else {
          
       



       

foreach($_REQUEST['merger'] as $key => $value)
 {
    echo "<hr>";
echo "$key: <br>";
echo "<br>";
echo "<hr>";

$calendarweek = new Calendarweek;
$calendarweek->calendarweek = Input::get('calendarweek');
$calendarweek->year = Input::get('year');
$calendarweek->type = $_REQUEST['merger'][$key]['type'];


$keypdf = "pdf_$key";
 if (Input::hasFile($keypdf))
    {
    // var_dump('pdf is here');
    $file = Input::file($keypdf);
    $pdf = $file->getClientOriginalName();
    $calendarweek->recipeflyerurl = $pdf;
    }

$calendarweek->save();
$lastinsertidcalendarweek = $calendarweek->packetid;



foreach($_REQUEST['merger'][$key]['recipe'] as $key3 => $value3)
 {

    echo "hier: $key3: <br>";



 $Calendarweekrecipestruktur = new Calendarweekrecipestruktur;
 $Calendarweekrecipestruktur->packetid = $lastinsertidcalendarweek;  
 $Calendarweekrecipestruktur->productid = $key; 
 $Calendarweekrecipestruktur->productname = $key;
 $sorteraddeins= ($key3+1);   
 $Calendarweekrecipestruktur->sorting = $sorteraddeins;    
 $Calendarweekrecipestruktur->recipeid = $_REQUEST['merger'][$key]['recipe'][$key3];
 $Calendarweekrecipestruktur->save();
}

}

return Redirect::to("/admin/calendarweeknew/" . $year . "/" . $calendarweek . "/edit");


 } //Else update Ende


//return Redirect::to("/admin/calendarweeknew/" . $year . "/" . $calendarweek . "/edit");

       
        }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public

    function show($id)
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
    public

    function edit($id)
        {
        $calendarweek = $this->calendarweek->find($id);
        $calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $id)->orderBy('id', 'DESC')->get();
        $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
        $recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
        return View::make('backend.calendarweek.edit', compact('calendarweek', 'products', 'recipe', 'calendarweekrecipestruktur'));
        }








    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public

    function update($id)
        {

        // return View::make('backend.calendarweek.index');

        $familienbox_5 = Input::get('familienbox_5');
        $familienbox_3 = Input::get('familienbox_3');

        // $array = array_dot($familienbox_3);
        // $array2 = array_dot($familienbox_5);
        // $array    = array("val"=>$familienbox_3);
        // $json_str = json_encode($array);
        // var_dump($familienbox_5);

        $data = Input::all();
        var_dump($data);
        var_dump('<hr>');
        /*
        var_dump($array);
        var_dump('<br />');
        var_dump($array2);
        var_dump('<br />');var_dump('<br />');

        // $array = array();

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

        // $familienbox_5="2016";
        // print_r(array_keys($_REQUEST, "familienbox_5"));
        // var_dump($serializedArr);
        // $serializedArr = serialize($familienbox_3);
        // $record = Calendarweek::find(16);
        // unserialize($record->year);
        // $calendarweek = new Calendarweek;
        // $calendarweek->year = $serializedArr;
        // $calendarweek->save();

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
    public

    function destroy($id)
        {
        $this->calendarweek->destroy($id);
        Notification::success('Adresse wurde gelöscht');
        return Redirect::action('App\Controllers\Admin\AddressController@index');
        }

    public

    function confirmDestroy($id)
        {
        $calendarweek = $this->calendarweek->find($id);
        return View::make('backend.calendarweek.confirm-destroy', compact('calendarweek'));
        }

    public

    function togglePublish($id)
        {
        return $this->calendarweek->togglePublish($id);
        }
    }
