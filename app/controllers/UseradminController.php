<?php 
use Authority\Repo\User\UserInterface;
use Authority\Repo\Group\GroupInterface;
use Authority\Service\Form\Register\RegisterForm;
use Authority\Service\Form\User\UserForm;
use Authority\Service\Form\ResendActivation\ResendActivationForm;
use Authority\Service\Form\ForgotPassword\ForgotPasswordForm;
use Authority\Service\Form\ChangePassword\ChangePasswordForm;
use Authority\Service\Form\SuspendUser\SuspendUserForm;
use Sefa\Repositories\Offer\OfferRepository as Offer;
use Sefa\Repositories\Order\OrderRepository as Order;


class UseradminController extends BaseController {

    protected $address;
    protected $user;
    protected $group;
    protected $registerForm;
    protected $userForm;
    protected $resendActivationForm;
    protected $forgotPasswordForm;
    protected $changePasswordForm;
    protected $suspendUserForm;
    protected $offer;
    protected $order;

    /**
     * Instantiate a new UseradminController
     */
    public function __construct(
         Users $users,
        Address $address,
        Order $order, 
        UserInterface $user, 
        GroupInterface $group, 
        RegisterForm $registerForm, 
        UserForm $userForm,
        ResendActivationForm $resendActivationForm,
        ForgotPasswordForm $forgotPasswordForm,
        ChangePasswordForm $changePasswordForm,
        SuspendUserForm $suspendUserForm)
    {

        $this->users = $users;
        $this->user = $user;
        $this->address = $address;
        $this->order = $order;
        $this->group = $group;
        $this->registerForm = $registerForm;
        $this->userForm = $userForm;
        $this->resendActivationForm = $resendActivationForm;
        $this->forgotPasswordForm = $forgotPasswordForm;
        $this->changePasswordForm = $changePasswordForm;
        $this->suspendUserForm = $suspendUserForm;

        //Check CSRF token on POST
        $this->beforeFilter('csrf', array('on' => 'post'));

        // Set up Auth Filters
        $this->beforeFilter('auth', array('only' => array('change')));
        $this->beforeFilter('inGroup:Admins', array('only' => array('show', 'index', 'destroy', 'suspend', 'unsuspend', 'ban', 'unban', 'edit', 'update' )));
        //array('except' => array('create', 'store', 'activate', 'resend', 'forgot', 'reset')));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->user->all();
      
        return View::make('backend/users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {

$day = List_Day::lists('bezeichnung', 'bezeichnung');
$month = List_Month::lists('bezeichnung', 'bezeichnung');
$gender = List_Gender::lists('bezeichnung', 'bezeichnung');

       
         return View::make('backend.customer_management.create')->with('month',$month)->with('gender',$gender)->with('day',$day);

    }


    /**
     * Store a newly created user.
     *
     * @return Response
     */
    public function store()
    {

        // Form Processing

      

       // $result = $this->registerForm->save( Input::all() );
        $result = $this->registerForm->save( Input::all() );

         $first_name= Input::get('last_name');   
         $email= Input::get('email');
         $password= Input::get('password');
         

var_dump($email); var_dump('<br>'); 
var_dump($password);var_dump('<br>'); 
var_dump($first_name);var_dump('<br>'); 

/*
$lastInsertedId = $this->user->id;
var_dump($lastInsertedId);

        // erstelle Tabel mit UserID der ID von customer

         
//$lastInsertedemail = e($data['email']);
//$address = new Address;


//$lastInsertedId = $this->user->id;
//var_dump($lastInsertedemail);



/*
$address->user_id = $lastInsertedId;
$address->gender = $this->registerForm->gender;
$address->first_name = $this->registerForm->first_name;
$address->last_name = $this->registerForm->last_name;

// $address->id = '9991';
$address->save();
*/



        if( $result['success'] )
        {
Notification::success('Neuer Kunde wurde angelegt');




$email= Input::get('email');
$users = Users::where('email', '=', $email)->get();

foreach ($users as $user)
{
    var_dump($user->email); var_dump($user->id);

     $lastInserted_id= $user->id;
     $lastInserted_first_name= $user->first_name;
     $lastInserted_last_name= $user->last_name;
     $lastInserted_gender= $user->gender;
}



$address = new Address;
$address->customercustomer_id = $lastInserted_id;
$address->first_name = $lastInserted_first_name;
$address->last_name = $lastInserted_last_name;
$address->gender = $lastInserted_gender;
$address->art = 'Rechnungsadresse';

// $address->id = '9991';
$address->save();

Notification::success('Neue Adress Eingabe Rechnungsadresse wurde generiert');

$address = new Address;
$address->customercustomer_id = $lastInserted_id;
$address->first_name = $lastInserted_first_name;
$address->last_name = $lastInserted_last_name;
$address->gender = $lastInserted_gender;
$address->art = 'Lieferadresse';

// $address->id = '9991';
$address->save();


Notification::success('Neue Adress Eingabe Lieferaddresse wurde generiert');

Mail::send('backend.customer_management.versand', array(), function($message)
{
$email      = Input::get('email');
$password      = Input::get('password');
$first_name      = Input::get('first_name');

$message
->to($email)
->from('office@kochabo.com','KochAbo.com')
->subject('KochAbo-Registrierung');
});
Notification::success('Registrierungs-E-Mail wurde verschickt');


           /*  Event::fire('user.signup', array(
                'email' => $result['mailData']['email'], 
                'userId' => $result['mailData']['userId'], 
                'activationCode' => $result['mailData']['activationCode']
            ));*/

            // Success!
            Session::flash('success', $result['message']);
           // return Redirect::route('home');

      return Redirect::to('/admin/customer_management');



        } else {


     

          //  Session::put('produkt',$produkt);
            Session::flash('error', $result['message']);
            return Redirect::action('UseradminController@create')
                ->withInput()
                ->withErrors( $this->registerForm->errors() );
        }
    }



  




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->user->byId($id);

    

        if($user == null || !is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        return View::make('backend.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->byId($id);

        if($user == null || !is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $currentGroups = $user->getGroups()->toArray();
        $userGroups = array();
        foreach ($currentGroups as $group) {
            array_push($userGroups, $group['name']);
        }
        $allGroups = $this->group->all();

        return View::make('backend.users.edit')->with('user', $user)->with('userGroups', $userGroups)->with('allGroups', $allGroups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        // Form Processing
        $result = $this->userForm->update( Input::all() );

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::action('UseradminController@show', array($id));

        } else {
            Session::flash('error', $result['message']);
            return Redirect::action('UseradminController@edit', array($id))
                ->withInput()
                ->withErrors( $this->userForm->errors() );
        }
    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        if ($this->user->destroy($id))
        {
            Session::flash('success', 'Benutzer gelöscht');
            return Redirect::to('admin/users');
        }
        else 
        {
            Session::flash('error', 'Unable to Delete User');
            return Redirect::to('admin/users');
        }
    }

    /**
     * Activate a new user
     * @param  int $id   
     * @param  string $code 
     * @return Response
     */
    public function activate($id, $code)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $result = $this->user->activate($id, $code);

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::route('home');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::route('home');
        }
        
    } 
 
    /**
     * Process resend activation request
     * @return Response
     */
    public function resend()
    {
        // Form Processing
        $result = $this->resendActivationForm->resend( Input::all() );

        if( $result['success'] )
        {
            Event::fire('user.resend', array(
                'email' => $result['mailData']['email'], 
                'userId' => $result['mailData']['userId'], 
                'activationCode' => $result['mailData']['activationCode']
            ));

            // Success!
            Session::flash('success', $result['message']);
            return Redirect::route('home');
        } 
        else 
        {
            Session::flash('error', $result['message']);
            return Redirect::route('profile')
                ->withInput()
                
                ->withErrors( $this->resendActivationForm->errors() );
        }
    }

    /**
     * Process Forgot Password request
     * @return Response
     */
    public function forgot()
    {
        // Form Processing
        $result = $this->forgotPasswordForm->forgot( Input::all() );

        if( $result['success'] )
        {
            Event::fire('backend.user.forgot', array(
                'email' => $result['mailData']['email'],
                'userId' => $result['mailData']['userId'],
                'resetCode' => $result['mailData']['resetCode']
            ));

            // Success!
            Session::flash('success', $result['message']);
            return Redirect::route('home');
        } 
        else 
        {
            Session::flash('error', $result['message']);
            return Redirect::route('forgotPasswordForm')
                ->withInput()
                ->withErrors( $this->forgotPasswordForm->errors() );
        }
    }

    /**
     * Process a password reset request link
     * @param  [type] $id   [description]
     * @param  [type] $code [description]
     * @return [type]       [description]
     */
    public function reset($id, $code)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $result = $this->user->resetPassword($id, $code);

        if( $result['success'] )
        {
            Event::fire('user.newpassword', array(
                'email' => $result['mailData']['email'],
                'newPassword' => $result['mailData']['newPassword']
            ));

            // Success!
            Session::flash('success', $result['message']);
            return Redirect::route('home');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::route('home');
        }
    }

    /**
     * Process a password change request
     * @param  int $id 
     * @return redirect     
     */
    public function change($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $data = Input::all();
        $data['id'] = $id;

        // Form Processing
        $result = $this->changePasswordForm->change( $data );

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            Notification::success('Passwort Wechsel erfolgreich');

      
                    return Redirect::to('/admin/customer_management');
        } 
        else 
        {
            Session::flash('error', $result['message']);
            return Redirect::action('Customer_management_adminController@edit', array($id))
                ->withInput()
                ->withErrors( $this->changePasswordForm->errors() );
        }
    }

    /**
     * Process a suspend user request
     * @param  int $id 
     * @return Redirect     
     */
    public function suspend($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        // Form Processing
        $result = $this->suspendUserForm->suspend( Input::all() );

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::to('backend/users');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::action('UseradminController@suspend', array($id))
                ->withInput()
                ->withErrors( $this->suspendUserForm->errors() );
        }
    }

    /**
     * Unsuspend user
     * @param  int $id 
     * @return Redirect     
     */
    public function unsuspend($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $result = $this->user->unSuspend($id);

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::to('admin/users');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::to('admin/users');
        }
    }

    /**
     * Ban a user
     * @param  int $id 
     * @return Redirect     
     */
    public function ban($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $result = $this->user->ban($id);

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::to('admin/users');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::to('admin/users');
        }
    }

    public function unban($id)
    {
        if(!is_numeric($id))
        {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }
        
        $result = $this->user->unBan($id);

        if( $result['success'] )
        {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::to('admin/users');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::to('admin/users');
        }
    }


}

    
