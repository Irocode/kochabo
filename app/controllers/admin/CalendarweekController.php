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
$productsclassic = Products::where('type', '=', '1')->orderBy('id', 'DESC')->get();
$products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
return View::make('backend.calendarweek.create', compact('products','productsclassic'));
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
echo "
<pre>";
        echo print_r($data);
        echo "</pre>
";
echo"
<hr>
";        
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
echo "
<hr>
";
echo "$key: <br>";
echo "<br>";
echo "
<hr>
";
$calendarweek = new Calendarweek;
$calendarweek->calendarweek = Input::get('calendarweek');
$calendarweek->year = Input::get('year');
$calendarweek->type = $_REQUEST['merger'][$key]['type'];
$keypdf = "pdf_$key";


if (Input::hasFile($keypdf))
{
// var_dump('pdf is here');











  $input = Input::all();
      $file = Input::file($keypdf);
       $name = $file->getClientOriginalName();
       $image = Image::make(Input::file($keypdf)->getRealPath());
       $image->save(public_path() . '/filemanager/userfiles/' . $input[$keypdf]->getClientOriginalName());
       $input1['recipeflyerurl'] = $name;

       var_dump('name:');   
       var_dump($name);

       // Upload nehmen und in DB speichern.
       $path=public_path() . '/filemanager/userfiles/' . $input1['recipeflyerurl'];
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $pdf = 'data:image/' . $type . ';base64,' . base64_encode($data);


       //$input1['recipeflyerurl'] = $base64;


var_dump('<br><hr>:');   
   var_dump('input1:');   
       var_dump($input1);









         
//$pdf = $file->getClientOriginalName();
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
Notification::success('Wochenplann wurde angelegt');
$calendarweek = Input::get('calendarweek');    
$year = Input::get('year'); 
//return Redirect::to("/admin/calendarweeknew/".$year."/".$calendarweek."/edit");
} //Else update Ende
$calendarweek = Input::get('calendarweek');    
$year = Input::get('year'); 
Notification::success('Wochenplann wurde geändert');
//return Redirect::to("/admin/calendarweeknew/".$year."/".$calendarweek."/edit");
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