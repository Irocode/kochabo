<?php namespace App\Controllers\Admin;
use BaseController;
use AddressNoPrimaryKey;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Users;
use Notification;
use Sefa\Repositories\Address\AddressRepository as Address;
use Sefa\Exceptions\Validation\ValidationException;
class AddressNoPrimaryKeyController extends BaseController {
protected $address;
public function __construct(Address $address, AddressNoPrimaryKey $addressnoprimarykey, Users $users) {
View::share('active', 'modules');
$this->address = $address;
$this->users = $users;
$this->addressnoprimarykey = $addressnoprimarykey;
}
    

    /**
 * Display a listing of the resource.
 *
 * @return Response
 */
public function index()

                {
                $address = $this->address->paginate();
                $products = Products::all();
                // $products_grosse_obst_box = Products::find(83)->products;
                $products_grosse_obst_box = Products::where('id', '=', 83)->get();
                $products_kleine_obst_box = Products::where('id', '=', 84)->get();
                return View::make('frontend.address.index', compact('address', 'products', 'products_grosse_obst_box', 'products_kleine_obst_box'));
                }
/**
 * @param $id
 * @return \Illuminate\View\View
 */
public function show($id, $slug = null)

                {
                $address = $this->address->find($id);
                return View::make('frontend.address.show', compact('address'));
                }
/**
 * Update the specified resource in storage.
 *
 * @param  int  $id
 * @return Response
 */
public function update($id)

                {
                $this->addressnoprimarykey->update($id, Input::all());
                /*
                $inputs = Input::all();
                $lieferaddress = AddressNoPrimaryKey::find($id)->update($id);
                */
                /*
                foreach($inputs as $key => $value)
                {
                $lieferaddress->$key = $value;
                }
                */
                // $lieferaddress->save();
                // Address::update($id, Input::all());
                // Notification::success('Adresse wurde geändert');
                return Redirect::back();
                }
// Test loginabfrage
public function login_query()

                {
                $address = $this->address->paginate();
                return View::make('frontend.address.login_query', compact('address'));
                }
}
