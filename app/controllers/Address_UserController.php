<?php



class Address_UserController extends BaseController {




//address_one   

    public function address_one()
     {


    $address = Users::find(3)->address_one()->first();

	echo'<h2>'.$address->email.'</h2>';
}









  /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id) {

            $address = Users::find($id)->address_one()->first();
        return View::make('frontend.address.show', compact('address'));
    }




}