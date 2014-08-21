<?php namespace App\Controllers\Admin;
use BaseController;
use Deliverytimes;
use Address;
use AddressNoPrimaryKey;
use Order;
use OrderAddress;
use OrderItems;
use OrderStatusHistory;
use Products;
use Users;
use List_Kundengruppe;
use Deliveryzipcode;
use Logisticianmanager;
use CustomersGroups;
use Newsletter;
use Ingredients;
use Recipe;
use Recipeingredient;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Calendarweekrecipestruktur;
use Calendarweekrecipestrukturx;
use Calendarweek;
class HelperController extends BaseController
{
public function __construct(Calendarweekrecipestruktur $calendarweekrecipestruktur,Calendarweekrecipestrukturx $calendarweekrecipestrukturx,Calendarweek $calendarweek,Recipeingredient $recipe_ingredient, Recipe $recipe, Ingredients $ingredients, Order $order, OrderAddress $order_address, OrderItems $order_items, OrderStatusHistory $order_status_history, Users $users, Logisticianmanager $logisticianmanager,  Address $address, AddressNoPrimaryKey $addressnoprimarykey, Deliveryzipcode $deliveryzipcode, Products $products, Newsletter $newsletter, CustomersGroups $customers_groups)
{
View::share('active', 'modules');
$this->logisticianmanager = $logisticianmanager;      
$this->address = $address;
$this->products = $products;
$this->deliveryzipcode = $deliveryzipcode;
$this->users = $users;
$this->order = $order;
$this->order_address = $order_address;
$this->order_items = $order_items;
$this->order_status_history = $order_status_history;
$this->newsletter = $newsletter;
$this->customers_groups = $customers_groups;        
$this->addressnoprimarykey = $addressnoprimarykey;
$this->ingredients = $ingredients;
$this->recipe = $recipe;
$this->recipe_ingredient = $recipe_ingredient;
$this->calendarweek = $calendarweek;       
$this->calendarweekrecipestruktur = $calendarweekrecipestruktur;
$this->calendarweekrecipestrukturx = $calendarweekrecipestrukturx;
}  
// calendarweeknew Startseite abfrage Anfang
function calendarweeknew($year, $calendarweek)
{
$calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->first();
if ($calendarweekarray == null)
{
//  var_dump(' insert new record into database');
$productsclassic = Products::where('recipetypenummer', '=', '3')->orderBy('id', 'ASC')->get();


//Erfragen wie die höchste Receptanzahl bei Classic(id3) Boxen ist
$productsclassicrecipecount = Products::where('recipetypenummer', '=', '3')->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes = array();
foreach($productsclassicrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
var_dump($nr_of_recipes);
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes[] = $ret; // DONE :)
}
$max = max($final_results_counter_nr_of_recipes);
var_dump('hier');
var_dump($max);
//Anhand der höchsten Rezeptanzhal Felder aufbauen für Classic GESAMT




$products = Products::where('recipetypenummer', '>', '1')->where('type', '=', '1')->orderBy('id', 'ASC')->get();
$recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();              
return View::make('backend.calendarweek.create', compact( 'products','recipe','calendarweek','year','productsclassic'));
}
else
{
//var_dump('update the existing record');
$calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->get();
foreach($calendarweekarray as $x)
{
$year = $x->year;
$calendarweek = $x->calendarweek;
$idnew = $x->packetid;
if (empty($year))
{
$recipe = Recipe::where('id', '>', 0)->orderBy('id', 'DESC')->get();
return View::make('backend.recipe.data', compact('recipe'));
}
else
{
  //GESAMT
$joinaufbaugesamt = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweek.recipeflyerurl',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'products.recipetypenummer',
'products.type',
]);  

//Singlebox
$joinaufbaueinzel2 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',2)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweek.recipeflyerurl',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'products.recipetypenummer',
'products.nr_of_recipes',
'products.type',
]);  
//Für Zwei
$joinaufbaueinzel3 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',3)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'calendarweek.recipeflyerurl',
'products.recipetypenummer',
'products.nr_of_recipes',
'products.type',
]); 
//Famileinbox
$joinaufbaueinzel4 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',4)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'calendarweek.recipeflyerurl',
'products.recipetypenummer',
'products.nr_of_recipes',
'products.type',
]); 
//Vegetarische Box
$joinaufbaueinzel5 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',5)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'calendarweek.recipeflyerurl',
'products.recipetypenummer',
'products.nr_of_recipes',
'products.type',
]); 
//Vegan Box
$joinaufbaueinzel6 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',6)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'calendarweek.recipeflyerurl',
'products.recipetypenummer',
'products.nr_of_recipes',
'products.type',
]); 
//Fit Box
$joinaufbaueinzel7 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',7)
->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'products.product_name',
'calendarweekrecipestruktur.id',
'calendarweek.recipeflyerurl',
'products.recipetypenummer',
'products.nr_of_recipes',
'products.type',
]); 
//Produkteanzahl  erfragen     
$final_results = array();
foreach($joinaufbaugesamt as $value) {
$ret = $value->product_name;
$final_results[] = $ret; // DONE :)
}
//Dupolicate entfernen
$final_results = array_unique($final_results);
//Neugruppierung Index
$final_results = array_merge($final_results);
//var_dump($final_results);

$calendarweek = $this->calendarweek->find($idnew);
$calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();
$products = Products::where('recipetypenummer', '>', '1')->where('type', '=', '1')->orderBy('id', 'DESC')->get();
$recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
return View::make('backend.calendarweek.edit', compact('year', 'calendarweek','final_results','products', 'recipe', 'calendarweekrecipestruktur','joinaufbaugesamt','joinaufbaueinzel2' ,'joinaufbaueinzel3','joinaufbaueinzel4','joinaufbaueinzel5','joinaufbaueinzel6','joinaufbaueinzel7'));
}
};
}
}
// calendarweeknew Startseite abfrage Ende        
}