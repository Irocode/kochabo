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
              $products = Products::where('recipetypenummer', '>', '1')->where('type', '=', '1')->orderBy('id', 'DESC')->get();
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
                              'calendarweekrecipestruktur.sorting',  
                                'recipe.title',
                                 'recipe.id',
                                  'products.product_name',
                                    'calendarweekrecipestruktur.id',
                        ]);  



                        $joinaufbaueinzel90 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid')   

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->where('calendarweekrecipestruktur.productid','=',90)
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
                                
                                    

                        ]);  

                              $joinaufbaueinzel89 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid')   

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->where('calendarweekrecipestruktur.productid','=',89)
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
                        ]); 

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
                        ]); 

                              $joinaufbaueinzel84 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid')   

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->where('calendarweekrecipestruktur.productid','=',84)
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
                        ]); 


  $joinaufbaueinzel83 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid')   

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->where('calendarweekrecipestruktur.productid','=',83)
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
                        ]); 


                          $joinaufbaueinzel82 = Calendarweekrecipestruktur::join('calendarweek','calendarweek.packetid','=','calendarweekrecipestruktur.packetid')
                        ->join('recipe','recipe.id','=','calendarweekrecipestruktur.recipeid')   
                        ->join('products','products.id','=','calendarweekrecipestruktur.productid')   

                        ->where('calendarweek.calendarweek','=',$calendarweek)->where('calendarweek.year','=',$year)
                        ->where('calendarweekrecipestruktur.productid','=',82)
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
                        ]); 










 //Produkteanzahl  erfragen     
  $final_results = array();
  foreach($joinaufbaugesamt as $value) {
      
      $ret = $value->productid;
      $final_results[] = $ret; // DONE :)
  }
//Dupolicate entfernen
$final_results = array_unique($final_results);
//Neugruppierung Index
$final_results = array_merge($final_results);
var_dump($final_results);







                    $calendarweek = $this->calendarweek->find($idnew);
                    $calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();
      $products = Products::where('recipetypenummer', '>', '1')->where('type', '=', '1')->orderBy('id', 'DESC')->get();

                    

                    $recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
                    return View::make('backend.calendarweek.edit', compact('products','calendarweek', 'outproducts', 'recipe', 'calendarweekrecipestruktur','joinaufbaugesamt','joinaufbaueinzel90' ,'joinaufbaueinzel89','joinaufbaueinzel90','joinaufbaueinzel85','joinaufbaueinzel84','joinaufbaueinzel83','joinaufbaueinzel82'));
                    }
                };
            }
        }
// calendarweeknew Startseite abfrage Ende        
    }