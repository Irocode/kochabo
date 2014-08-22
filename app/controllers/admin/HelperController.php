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
use List_Recipe_type;
use Calendarweek;
class HelperController extends BaseController
{
public function __construct(List_Recipe_type $list_Recipe_type,Calendarweekrecipestruktur $calendarweekrecipestruktur,Calendarweek $calendarweek,Recipeingredient $recipe_ingredient, Recipe $recipe, Ingredients $ingredients, Order $order, OrderAddress $order_address, OrderItems $order_items, OrderStatusHistory $order_status_history, Users $users, Logisticianmanager $logisticianmanager,  Address $address, AddressNoPrimaryKey $addressnoprimarykey, Deliveryzipcode $deliveryzipcode, Products $products, Newsletter $newsletter, CustomersGroups $customers_groups)
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
$this->list_Recipe_type = $list_Recipe_type;
}  
// calendarweeknew Startseite abfrage Anfang
function calendarweeknew($year, $calendarweek)
{
$calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->first();
if ($calendarweekarray == null)
{
//Erfragen wie die höchste Receptanzahl bei den Boxen ist START:
//ID von Classic Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','3')->get();
$typeerfragenx = list_Recipe_type::join('products','products.recipetypenummer','=','list_recipe_type.id')
->where('bezeichnung','=','Classic')
->orderBy('products.id', 'asc')                       
->get([
'products.recipetypenummer',
'products.nr_of_recipes',
'products.id',
'products.product_name',
'products.type',
]); 
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_classic  = $x->bezeichnung;
$productsclassicrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_classic = array();
foreach($productsclassicrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_classic[] = $ret;
}
$max_classic = max($final_results_counter_nr_of_recipes_classic);
$nr_of_recipes_classic=$nr_of_recipes;
$productsjoin = list_Recipe_type::join('products','products.recipetypenummer','=','list_recipe_type.id')
->where('list_recipe_type.id','=',$typeerfragenid)
->orderBy('products.id', 'asc')                       
->get([
'products.recipetypenummer',
'products.nr_of_recipes',
'products.id',
'products.product_name',
'products.type',
]); 
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für Classic GESAMT
//ID von Vegetarisch Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','5')->get();
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegetarisch  = $x->bezeichnung;
$productsclassicrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_vegetarisch = array();
foreach($productsclassicrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_vegetarisch[] = $ret;
}
$max_vegetarisch = max($final_results_counter_nr_of_recipes_vegetarisch);
$nr_of_recipes_vegetarisch=$nr_of_recipes;
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für Vegetarisch GESAMT
//ID von Vegan Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','4')->get();
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegan  = $x->bezeichnung;
$productsveganrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_vegan = array();
foreach($productsveganrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_vegan[] = $ret;
}
$max_vegan = max($final_results_counter_nr_of_recipes_vegan);
$nr_of_recipes_vegan=$nr_of_recipes;
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für Vegan GESAMT
//ID von Fit Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','6')->get();
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_fit  = $x->bezeichnung;
$productsfitrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_fit = array();
foreach($productsfitrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_fit[] = $ret;
}
$max_fit = max($final_results_counter_nr_of_recipes_fit);
$nr_of_recipes_fit=$nr_of_recipes;
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für Fit GESAMT
//Erfragen wie die höchste Receptanzahl bei den Boxen ist END:
$products = Products::where('recipetypenummer', '>', '1')->where('type', '=', '1')->orderBy('id', 'ASC')->get();
$recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();              
return View::make('backend.calendarweek.create', compact( 'nr_of_recipes_fit','nr_of_recipes_vegan','nr_of_recipes_classic','nr_of_recipes_vegetarisch','productsjoin','products','recipe','calendarweek','year','max_classic','typeerfragenbezeichung_classic','max_vegetarisch','typeerfragenbezeichung_vegetarisch','max_vegan','typeerfragenbezeichung_vegan','max_fit','typeerfragenbezeichung_fit'));
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
//Vegetarische Box
$joinaufbaueinzel85 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',85)
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
$joinaufbaueinzel86 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
->join('products','products.id','=','calendarweekrecipestruktur.productid')   
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
->where('calendarweekrecipestruktur.productid','=',86)
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
return View::make('backend.calendarweek.edit', compact('year', 'calendarweek','final_results','products', 'recipe', 'calendarweekrecipestruktur','joinaufbaugesamt','joinaufbaueinzel2' ,'joinaufbaueinzel3','joinaufbaueinzel4','joinaufbaueinzel5','joinaufbaueinzel6','joinaufbaueinzel7','joinaufbaueinzel85','joinaufbaueinzel86'));
}
};
}
}
// calendarweeknew Startseite abfrage Ende        
}