<?php



class User_AddressController extends BaseController {


//hasmany
public function address()
	{
		$users=Users::find(3);

$address= Users::find(3)->address;

echo'<h2>'.$users->email.'</h2>';
//echo'<p>'.$user->last_name.'</p>';

foreach ($address as $var)
{
echo '<li>' .$var->street.'</li>';
echo '<li>' .$var->street.'</li>';

}
	}









}