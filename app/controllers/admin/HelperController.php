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


// Welche Seite EDIT oder CREATE Startseite Abfrage Anfang
function calendarweeknew($year, $calendarweek)
{
$calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->first();
if ($calendarweekarray == null)
{



/*
|----------------------------------------------------------------------------------------------------------------------------------
| CLASSIC BOXEN START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Classic Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','3')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_classic  = $x->bezeichnung;
//Daten aus Products in Bezug auf Classic Boxen holen
$productsclassicrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
//Array für maximale Anzahl bilden
$final_results_counter_nr_of_recipes_classic = array();
foreach($productsclassicrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_classic[] = $ret;
}
//Maximale Anzahl an Feldern 
$max_classic = max($final_results_counter_nr_of_recipes_classic);
}
/*
|----------------------------------------------------------------------------------------------------------------------------------
| CLASSIC BOXEN END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/



/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGETARISCHE BOXEN START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Vegetarische Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','5')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegetarisch  = $x->bezeichnung;
//Daten aus Products in Bezug auf Vegetarische Boxen holen
$productsclassicrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
//Array für maximale Anzahl bilden
$final_results_counter_nr_of_recipes_vegetarisch = array();
foreach($productsclassicrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_vegetarisch[] = $ret;
}
//Maximale Anzahl an Feldern 
$max_vegetarisch = max($final_results_counter_nr_of_recipes_vegetarisch);
}
/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGETARISCHE BOXEN END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/



/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN BOXEN START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Vegan Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','4')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegan  = $x->bezeichnung;
//Daten aus Products in Bezug auf Vegan Boxen holen
$productsveganrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
//Array für maximale Anzahl bilden
$final_results_counter_nr_of_recipes_vegan = array();
foreach($productsveganrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_vegan[] = $ret;
}
//Maximale Anzahl an Feldern 
$max_vegan = max($final_results_counter_nr_of_recipes_vegan);
}
/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN BOXEN END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------------------------------------------------------------------------
| FIT FIT START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Fit Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','6')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_fit  = $x->bezeichnung;
//Daten aus Products in Bezug auf Fit Boxen holen
$productsfitrecipecount = Products::where('recipetypenummer', '=', $typeerfragenid)->orderBy('id', 'ASC')->get();
$final_results_counter_nr_of_recipes_fit = array();
foreach($productsfitrecipecount as $x)
{
$nr_of_recipes = $x->nr_of_recipes;
$ret = $x->nr_of_recipes;
$final_results_counter_nr_of_recipes_fit[] = $ret;
}
//Maximale Anzahl an Feldern 
$max_fit = max($final_results_counter_nr_of_recipes_fit);
}
//Fit Boxen END


$recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();              
return View::make('backend.calendarweek.create', compact(
 'recipe',
 'calendarweek',
 'year',
 'max_classic',
 'max_vegetarisch',
 'max_vegan',
 'max_fit',
 'typeerfragenbezeichung_classic', 
 'typeerfragenbezeichung_vegetarisch',
 'typeerfragenbezeichung_vegan', 
 'typeerfragenbezeichung_fit'
 ));
}
/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN FIT END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/

//Wenn Daten vorhanden dann CREATE Blade erstellen
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


/*
|----------------------------------------------------------------------------------------------------------------------------------
| CLASSIC BOXEN START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Classic Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','3')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_classic  = $x->bezeichnung;}
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
/*
|----------------------------------------------------------------------------------------------------------------------------------
| CLASSIC BOXEN END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/

/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGETARISCHE BOXEN START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Vegetarische Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','5')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegetarisch  = $x->bezeichnung;
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
/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGETARISCHE BOXEN END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/


/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN BOXEN START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Vegan Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','4')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_vegan  = $x->bezeichnung;
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
/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN BOXEN END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/


/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN FIT START 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
//ID von Fit Boxen erfragen. Tabelle: list_recipe_type
$typeerfragen = list_Recipe_type::where('id','=','6')->get();
//Daten aus Tabelle: list_Recipe_type holen
foreach($typeerfragen as $x)
{
$typeerfragenid = $x->id;
$typeerfragenbezeichung_fit  = $x->bezeichnung;
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
/*
|----------------------------------------------------------------------------------------------------------------------------------
| VEGAN FIT END 
|-----------------------------------------------------------------------------------------------------------------------------------
*/


//Output
$calendarweek = $this->calendarweek->find($idnew);
$calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();
$recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
return View::make('backend.calendarweek.edit', compact(
  'joinaufbauclassic',
  'joinaufbauvegetarisch',
  'joinaufbauvegan',
  'joinaufbaufit',
  'typeerfragenbezeichung_classic',
  'typeerfragenbezeichung_vegan',
  'typeerfragenbezeichung_fit',
  'typeerfragenbezeichung_vegetarisch',
  'year',
  'calendarweek',
  'recipe',
  'calendarweekrecipestruktur'
  ));
}
};
}
}
// calendarweeknew Startseite abfrage Ende        
}