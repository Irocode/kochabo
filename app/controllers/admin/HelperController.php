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





//CLASSIC Anfang
//Erfragen wie die höchste Receptanzahl bei den Boxen ist START:
//ID von Classic Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','3')->get(); 
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
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für Classic GESAMT
$joinaufbauclassic = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
  ->where('calendarweek.type','=',3)
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)

->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweek.type',
'calendarweek.recipeflyerurl',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'calendarweekrecipestruktur.id',
]); 
//CLASSIC ENDE



//VEGETARISCH Anfang
//Erfragen wie die höchste Receptanzahl bei den Boxen ist START:
//ID von VEGETARISCHE Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','5')->get(); 
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegetarisch  = $x->bezeichnung;
$productsvegetarischrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_vegetarisch = array();
foreach($productsvegetarischrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_vegetarisch[] = $ret;
}
$max_vegetarisch = max($final_results_counter_nr_of_recipes_vegetarisch);
$nr_of_recipes_classic=$nr_of_recipes;
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für VEGETARISCH GESAMT
$joinaufbauvegetarisch = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
  ->where('calendarweek.type','=',5)
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)

->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweek.type',
'calendarweek.recipeflyerurl',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'calendarweekrecipestruktur.id',
]); 
//VEGETARISCH ENDE




//VEGAN Anfang
//Erfragen wie die höchste Receptanzahl bei den Boxen ist START:
//ID von VEGAN Boxen erfragen
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
//Anhand der höchsten Rezeptanzahl Felder aufbauen für VEGAN GESAMT
$joinaufbauvegan = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
  ->where('calendarweek.type','=',4)
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)

->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweek.type',
'calendarweek.recipeflyerurl',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'calendarweekrecipestruktur.id',
]); 
//VEGAN ENDE




//FIT Anfang
//Erfragen wie die höchste Receptanzahl bei den Boxen ist START:
//ID von FIT Boxen erfragen
$typeerfragen = list_Recipe_type::where('id','=','6')->get(); 
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_fit  = $x->bezeichnung;
$productsfitrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_classic = array();
foreach($productsfitrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_fit[] = $ret;
}
$max_fit = max($final_results_counter_nr_of_recipes_fit);
$nr_of_recipes_fit=$nr_of_recipes;
}
//Anhand der höchsten Rezeptanzahl Felder aufbauen für FIT GESAMT
$joinaufbaufit = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
  ->where('calendarweek.type','=',6)
->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)

->orderBy('calendarweekrecipestruktur.id', 'asc')                       
->get([
'calendarweekrecipestruktur.packetid',
'calendarweekrecipestruktur.recipeid',
'calendarweekrecipestruktur.sorting',
'calendarweekrecipestruktur.productid',                   
'calendarweek.calendarweek',
'calendarweek.year',
'calendarweek.type',
'calendarweek.recipeflyerurl',
'calendarweekrecipestruktur.sorting',  
'recipe.title',
'recipe.id',
'calendarweekrecipestruktur.id',
]); 
//FIT ENDE




$calendarweek = $this->calendarweek->find($idnew);
$calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();
$products = Products::where('recipetypenummer', '>', '1')->where('type', '=', '1')->orderBy('id', 'DESC')->get();
$recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
return View::make('backend.calendarweek.edit', compact('joinaufbauclassic','joinaufbauvegetarisch','joinaufbauvegan','joinaufbaufit','nr_of_recipes_fit','nr_of_recipes_vegan','nr_of_recipes_classic','nr_of_recipes_vegetarisch','typeerfragenbezeichung_classic','typeerfragenbezeichung_vegan','typeerfragenbezeichung_fit','typeerfragenbezeichung_vegetarisch','max_vegan','max_fit','max_vegetarisch','max_classic','year', 'calendarweek','final_results','products', 'recipe', 'calendarweekrecipestruktur'));
}
};
}
}
// calendarweeknew Startseite abfrage Ende        
}