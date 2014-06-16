<?php

use Former\Facades\Former;
class CartController extends \BaseController {

public function __construct( Products $products, Address $address, Users $users, List_Day $list_day ) {
$this->products = $products;
$this->address = $address;
$this->users = $users;
$this->list_day = $list_day;

}





	 // is well decalared?
  protected $var;

  public function index() {



  $products =Products::where('id', '>', 82)->get();

   $products =Products::where('id', '>', 82)->get();

   $id= $this->products->find(83)->id;


 $id= $this->products->find(83)->id;
  $currency= $this->products->find(83)->currency;
  $tax= $this->products->find(83)->ust;
  $price= $this->products->find(83)->price;
  $product_name= $this->products->find(83)->product_name;
    $picurl= $this->products->find(83)->picurl;







//var_dump($products);



  	//(Cart::destroy());
 
Cart::insert(array(
    'id'       => $id,
    'name'     => $product_name,
    'price'    => $price,
    'quantity' => 1,
    'tax'      => $tax,
    'currency' => $currency,  
    'image'    =>  $picurl 
));








//var_dump(Cart::destroy());



 return View::make('frontend.meinkonto.cart')->with('productscart', Cart::contents() ) ->with('products', $products ) ;


  }









/**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

  $products =Products::where('id', '>', 82)->get();

   $products =Products::where('id', '>', 82)->get();

   $id= $this->products->find($id)->id;


 $id= $this->products->find($id)->id;
  $currency= $this->products->find($id)->currency;
  $tax= $this->products->find($id)->ust;
  $price= $this->products->find($id)->price;
  $product_name= $this->products->find($id)->product_name;
    $picurl= $this->products->find($id)->picurl;



//var_dump($products);



  	//(Cart::destroy());
 
Cart::insert(array(
    'id'       => $id,
    'name'     => $product_name,
    'price'    => $price,
    'quantity' => 1,
    'tax'      => $tax,
    'currency' => $currency,  
    'image'    =>  $picurl 
));








//var_dump(Cart::destroy());



 return View::make('frontend.meinkonto.cart')->with('productscart', Cart::contents() ) ->with('products', $products ) ;
    }	













    /*
  |--------------------------------------------------------------------------
  | Cart Controller
  |--------------------------------------------------------------------------
  |
  | add to cart, remove from cart, update cart, empty cart.
  |
  */

  public function insert($id)
  {
    $item = Product::find($id);
    Cart::add($item->id, $item->product_name,1, $item->price, $item->productlink);
  //  return Redirect::to('cart');
    return Redirect::to('cart');
  }

  public function delete($rowid)
  {
    Cart::remove($rowid);
    //return Redirect::to('cart');  
    return Redirect::to('cart');
  }

  public function update()
  {
    if($_POST['updater'] <= 0)
    {
      return Redirect::to("shop/delete/".$_POST['rowid']);
    }
    Cart::update($_POST['rowid'], array('qty' => $_POST['updater']));
    //return Redirect::to('cart');
    return Redirect::to('cart');
  }

  public function terminate()
  {
    Cart::destroy();
    //return Redirect::to('cart');
    return Redirect::to('cart');
  }


public function ceckout_one_edit($id)
  {


    $cartContent = Cart::content();
    $products = Product::all();
     $users = Users::all();      

  $address_rechnung = Address::where('customercustomer_id', '=', $id)->where('art', '=', 'Rechnungsadresse')->first();
 $address_lieferung = Address::where('customercustomer_id', '=', $id)->where('art', '=', 'Lieferadresse')->first();

$day = List_Day::lists('bezeichnung', 'bezeichnung');
$month = List_Month::lists('bezeichnung', 'bezeichnung');
$gender = List_Gender::lists('bezeichnung', 'bezeichnung');
$country = List_Country::lists('de', 'code');


return View::make('frontend.checkout.edit')->with('country',$country)->with('month',$month)->with('gender',$gender)->with('day',$day)->with('cartContent',$cartContent)->with('address_lieferung',$address_lieferung)->with('address_rechnung',$address_rechnung)->with('products',$products)->with('users',$users);
 
     }



     public function ceckout_one_update($id)
  {

        $cartContent = Cart::content();
    $products = Product::all();
    $users = Users::all();
     $address_rechnung = Address::find($id);
     $address_lieferung = Address::find($id);

return View::make('frontend.checkout.edit')->with('cartContent',$cartContent)->with('address_lieferung',$address_lieferung)->with('address_rechnung',$address_rechnung)->with('products',$products)->with('users',$users);

     }




}