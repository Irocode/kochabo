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
use Calendarweek;
class HelperController extends BaseController

{
    public function __construct(Calendarweekrecipestruktur $calendarweekrecipestruktur,Calendarweek $calendarweek,Recipeingredient $recipe_ingredient, Recipe $recipe, Ingredients $ingredients, Order $order, OrderAddress $order_address, OrderItems $order_items, OrderStatusHistory $order_status_history, Users $users, Logisticianmanager $logisticianmanager,  Address $address, AddressNoPrimaryKey $addressnoprimarykey, Deliveryzipcode $deliveryzipcode, Products $products, Newsletter $newsletter, CustomersGroups $customers_groups)
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
    }  


// calendarweeknew Startseite abfrage Anfang
function calendarweeknew($year, $calendarweek)
        {
        $calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->first();
        if ($calendarweekarray == null)
            {
          //  var_dump(' insert new record into database');
              $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
                 $recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();              
             return View::make('backend.calendarweek.create', compact( 'products','recipe','calendarweek','year'));
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
                        $joinaufbau = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid')        

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->orderBy('calendarweekrecipestruktur.id', 'asc')   

                        ->groupBy('calendarweekrecipestruktur.productid')  

                        ->groupBy('calendarweekrecipestruktur.sorting')   
                                                 
                      
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
                        ]);  



                          $joinaufbau2 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                       // ->join('products','products.id','=','calendarweekrecipestruktur.productid')        

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)

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
                              
                                    'calendarweekrecipestruktur.id',
                        ]);  









$test= Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();

// Globale Varaiable setzen
$productidauswahl = 0;
$counter = 0; 
foreach ($test as $test)
{
while ($counter < 2) 
{ 

global $counter;    
$counter++; 

} 

echo"$counter";
 global $productidauswahl;
 $productidauswahl=$test->productid;


$productidauswahlx=(int)$productidauswahl;


$joinaufbau3 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')


                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid') 
                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->where('calendarweekrecipestruktur.productid','=',$productidauswahlx)                                    
                                
                      
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


      ]);  





var_dump($productidauswahl);
}







                    $calendarweek = $this->calendarweek->find($idnew);
                    $calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();
                    $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();

                    

                    $recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
                    return View::make('backend.calendarweek.edit', compact('joinaufbau1','test','calendarweek', 'products', 'recipe', 'calendarweekrecipestruktur','joinaufbau','joinaufbau2','joinaufbau3'));
                    }
                };
            }
        }
// calendarweeknew Startseite abfrage Ende        
    }