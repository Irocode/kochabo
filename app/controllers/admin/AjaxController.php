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
class AjaxController extends BaseController

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
    // AJAX Call-> Index Logistmanager Start
    public function getDatatable_logisticianmanager()
    {
        // return Logisticianmanager::all()->toArray('id','name', 'street','contactPerson','phone','email', JSON_PRETTY_PRINT); // Array dooh
        $logisticianmanager = Logisticianmanager::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
        // $logisticianmanager=Logisticianmanager::all();
        return View::make('backend.logisticianmanager.data', compact('logisticianmanager'));
        // return View::make('backend.logisticianmanager.data');
    }
    // AJAX Call-> Index Logistmanager END
    // AJAX Call-> Index Address INDEX Start
    public function getDatatable_address($id)
    {
        $address = Address::where('customercustomer_id', '=', $id)->orderBy('updated_at', 'DESC')->get();
        return View::make('backend.address.data', compact('address'));
    }
    // AJAX Call-> Index Address SHOW END
    // AJAX Call-> Index Address (ALLE) INDEX Start
    public function getDatatable_address_all()
    {
        $address = Address::where('customercustomer_id', '>', 0)->orderBy('updated_at', 'DESC')->get();
        return View::make('backend.address.data', compact('address'));
    }
    // AJAX Call-> Index Address INDEX END
    // AJAX Call-> Index Order INDEX Start
    public function getDatatable_order($id)
    {
        $order = Order::where('customercustomer_id', '=', $id)->orderBy('updated_at', 'DESC')->get();
        return View::make('backend.order.data', compact('order'));
    }
    // AJAX Call-> Index Order INDEX END
    // AJAX Call-> Index Order INDEX Start ALL
    public function getDatatable_order_all()
    {
        $order = Order::where('customercustomer_id', '>', 0)->orderBy('updated_at', 'DESC')->get();
        return View::make('backend.order.data', compact('order'));
    }
    // AJAX Call-> Index Order INDEX END
    // AJAX Call-> Index Order_address INDEX Start
    public function getDatatable_order_address($id)
    {
        $order_address = OrderAddress::where('orderorder_id', '=', $id)->orderBy('orderorder_id', 'DESC')->get();
        return View::make('backend.order_address.data', compact('order_address'));
    }
    // AJAX Call-> Index Order_address INDEX END
    // AJAX Call-> Index Order_order_items INDEX Start
    public function getDatatable_order_items($id)
    {
        $order_items = OrderItems::where('orderorder_id', '=', $id)->orderBy('orderorder_id', 'DESC')->get();
        return View::make('backend.order_items.data', compact('order_items'));
    }
    // AJAX Call-> Index Order_order_items INDEX END
    // AJAX Call-> Index Order_order_items (ALLE) INDEX Start
    public function getDatatable_order_items_all()
    {
        $order_items = OrderItems::where('orderorder_id', '>', 0)->orderBy('orderorder_id', 'DESC')->get();
        return View::make('backend.order_items.data', compact('order_items'));
    }
    // AJAX Call-> Index Order_order_items (ALLE) INDEX END
    // AJAX Call-> Index Order_status_history INDEX Start
    public function getDatatable_order_status_history($id)
    {
        $order_status_history = OrderStatusHistory::where('orderorder_id', '=', $id)->orderBy('orderorder_id', 'DESC')->get();
        return View::make('backend.order_status_history.data', compact('order_status_history'));
    }
    // AJAX Call-> Index Order_status_history INDEX END
    // AJAX Call-> Index Order_status_history (ALLE)INDEX Start
    public function getDatatable_order_status_history_all()
    {
        $order_status_history = OrderStatusHistory::where('orderorder_id', '>', 0)->orderBy('orderorder_id', 'DESC')->get();
        return View::make('backend.order_status_history.data', compact('order_status_history'));
    }
    // AJAX Call-> Index Order_status_history (ALLE) INDEX END
    // AJAX Call-> Index products INDEX Start
    public function getDatatable_products()
    {
        $products = Products::where('id', '>', 1)->orderBy('id', 'DESC')->get();
        return View::make('backend.products.data', compact('products'));
    }
    // AJAX Call-> Index products INDEX END
    // AJAX Call-> Index Deliveryzipcode INDEX Start
    public function getDatatable_deliveryzipcode()
    {
        $deliveryzipcode = Deliveryzipcode::where('id', '>', 1)->orderBy('updated_at', 'DESC')->get();
        return View::make('backend.deliveryzipcode.data', compact('deliveryzipcode'));
    }
    // AJAX Call-> Index Deliveryzipcode INDEX END


    // AJAX Call-> Index Customer_managment INDEX Start
    public function getDatatable_customer_management()
    {

        $users = Users::where('id', '>', 0)->get();
        foreach ($users as $user)
                {
            $customers_groups_id_retrieval= $user->customers_groups_id;   
                      
                }  

$kundengrupperesult = Users::join('customers_groups','customers_groups.customers_groups_id','=','users.customers_groups_id')
->get([
    'users.id',
    'users.gender',
    'users.first_name',
    'users.last_name',
    'users.email_aktuell',
    'users.telephone',
    'users.birthday',
    'users.birthmonth',
    'users.birthyear',
    'users.last_login',
    'users.created_at',
    'users.updated_at',
    'customers_groups.groupname',

    ]);            
      

        return View::make('backend.customer_management.data', compact('users','kundengrupperesult'));
    }
    // AJAX Call-> Index Customer_management INDEX END



 // AJAX Call-> Index customer_management_customers_groups INDEX END
  public function getDatatable_tablesorter_customer_management_customers_groups($id)
    {
        $users = Users::where('id', '>', 0)->get();
        foreach ($users as $user)
                {
            $customers_groups_id_retrieval= $user->customers_groups_id;   
                      
                }  

$kundengrupperesult = Users::join('customers_groups','customers_groups.customers_groups_id','=','users.customers_groups_id')
->where('users.customers_groups_id','=',$id)
->get([
    'users.id',
    'users.gender',
    'users.first_name',
    'users.last_name',
    'users.email',
    'users.telephone',
    'users.birthday',
    'users.birthmonth',
    'users.birthyear',
    'users.last_login',
    'users.created_at',
    'users.updated_at',
    'customers_groups.groupname',

    ]);            

       
     return View::make('backend.customer_management.data_customers_groups', compact('users','kundengrupperesult'));
    }
 // AJAX Call-> Index customer_management_customers_groups INDEX END


    // AJAX Call-> Index Newsletter INDEX Start
    public function getDatatable_newsletter()
    {
        $newsletter = Newsletter::where('id', '=', $id)->orderBy('id', 'DESC')->get();
        return View::make('backend.newsletter.data', compact('newsletter'));
    }
    // AJAX Call-> Index Newsletter INDEX END
    // AJAX Call-> Index Newsletter (ALLE) INDEX Start
    public function getDatatable_newsletter_all()
    {
        $newsletter = Newsletter::where('id', '>', 1)->orderBy('id', 'DESC')->get();
        return View::make('backend.newsletter.data', compact('newsletter'));
    }
    // AJAX Call-> Index Newsletter INDEX END

   
    // AJAX Call-> Index CustomersGroups INDEX Start
    public function getDatatable_customers_groups($id)
    {
        $customers_groups = CustomersGroups::where('customers_groups_id', '=', $id)->orderBy('customers_groups_id', 'DESC')->get();
        return View::make('backend.customers_groups.data', compact('customers_groups'));
    }
    
    // AJAX Call-> Index CustomersGroups (ALLE)INDEX Start
    public function getDatatable_customers_groups_all()
    {
        $customers_groups = CustomersGroups::where('customers_groups_id', '>', 0)->orderBy('customers_groups_id', 'DESC')->get();
        return View::make('backend.customers_groups.data', compact('customers_groups'));
    }


    // AJAX Call-> Index ingredient INDEX Start
    public function getDatatable_ingredients()
    {
         $ingredients = Ingredients::where('id', '=', $id)->orderBy('id', 'DESC')->get();
        return View::make('backend.ingredients.data', compact('ingredients'));

    }
    // AJAX Call-> Index ingredient INDEX Ende

    // AJAX Call-> Index ingredient (ALLE)INDEX Start
    public function getDatatable_ingredients_all()
    {
         $ingredients = Ingredients::where('id', '>', 0)->orderBy('id', 'DESC')->get();
          return View::make('backend.ingredients.data', compact('ingredients'));
    }
    // AJAX Call-> Index ingredient (ALLE)INDEX Ende


 // AJAX Call-> Index recipe_ingredient INDEX Start
    public function getDatatable_recipe_ingredient()
    {
         $recipe_ingredient = Recipeingredient::where('recipe_id', '=', $id)->orderBy('recipe_id', 'DESC')->get();
        return View::make('backend.recipe_ingredient.data', compact('recipe_ingredient'));

    }
    // AJAX Call-> Index recipe_ingredient INDEX Ende

    // AJAX Call-> Index recipe_ingredient (ALLE)INDEX Start
    public function getDatatable_recipe_ingredient_all()
    {
         $recipe_ingredient = Recipeingredient::where('recipe_id', '>', 0)->orderBy('recipe_id', 'DESC')->get();
          return View::make('backend.recipe_ingredient.data', compact('recipe_ingredient'));
    }
    // AJAX Call-> Index recipe_ingredient (ALLE)INDEX Ende


     // AJAX Call-> Index recipe INDEX Start
    public function getDatatable_recipe()
    {
         $recipe = Recipe::where('id', '=', $id)->orderBy('id', 'DESC')->get();
        return View::make('backend.recipe.data', compact('recipe'));

    }
    // AJAX Call-> Index recipe INDEX Ende

    // AJAX Call-> Index recipe (ALLE)INDEX Start
    public function getDatatable_recipe_all()
    {
         $recipe = Recipe::where('id', '>', 0)->orderBy('id', 'DESC')->get();
          return View::make('backend.recipe.data', compact('recipe'));
    }
    // AJAX Call-> Index recipe (ALLE)INDEX Ende


// calendarweeknew Startseite abfrage Anfang
function calendarweeknew($year, $calendarweek)
        {
        $calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->first();
        if ($calendarweekarray == null)
            {
            var_dump(' insert new record into database');
            }
          else
            {
            var_dump('update the existing record');
            $calendarweekarray = Calendarweek::where('calendarweek', '=', $calendarweek)->where('year', '=', $year)->orderBy('packetid', 'DESC')->get();
            foreach($calendarweekarray as $x)
                {
                $year = $x->year;
                $idnew = $x->packetid;
                if (empty($year))
                    {
                    $recipe = Recipe::where('id', '>', 0)->orderBy('id', 'DESC')->get();
                    return View::make('backend.recipe.data', compact('recipe'));
                    }
                  else
                    {
                    $calendarweek = $this->calendarweek->find($idnew);
                    $calendarweekrecipestruktur = Calendarweekrecipestruktur::where('packetid', '=', $idnew)->orderBy('id', 'DESC')->get();
                    $products = Products::where('recipetypenummer', '>', '1')->orderBy('id', 'DESC')->get();
                    $recipe = Recipe::where('id', '>', '0')->orderBy('id', 'DESC')->get();
                    return View::make('backend.calendarweek.edit', compact('calendarweek', 'products', 'recipe', 'calendarweekrecipestruktur'));
                    }
                };
            }
        }
// calendarweeknew Startseite abfrage Ende

        
    }



