<?php 

use Authority\Repo\Session\SessionInterface;
use Authority\Service\Form\Login\LoginForm;

class SessionController extends BaseController

{
    /**
     * Member Vars
     */
    protected $session;
    protected $loginForm;
    /**
     * Constructor
     */
    public function __construct(SessionInterface $session, LoginForm $loginForm, Users $users)

    {
        $this->session = $session;
        $this->loginForm = $loginForm;
        $this->users = $users;
    }
    /**
     * Show the login form
     */
    public function create()

    {
        return View::make('sessions.login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
        // Form Processing
        $result = $this->loginForm->save(Input::all());
        if ($result['success'])
        {
            Event::fire('user.login', array(
                'userId' => $result['sessionData']['userId'],
                'email' => $result['sessionData']['email']
            ));
            // Success!
            // return Redirect::to('/meinkontoregistrierung');
            // User aus User DB UND User aus Zusendung vom Warenkorb DB ZUGLEICH
            $user_session_Id = Session::get('userId');
            // $user_id = Input::get('user_id');
            $zurbestellung = Input::get('zurbestellung');
            if ($zurbestellung == '1')
            {
                return Redirect::to('/checkout/' . $user_session_Id . '/edit');
            }
            else
            {
                return Redirect::to('/meinkonto');
            }
        }
        else
        {
            Session::flash('error', $result['message']);
            return Redirect::to('/meinkonto')->withInput()->withErrors($this->loginForm->errors());
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store_back_variable()

    {
        // Form Processing
        $result = $this->loginForm->save(Input::all());
        if ($result['success'])
        {
            Event::fire('user.login', array(
                'userId' => $result['sessionData']['userId'],
                'email' => $result['sessionData']['email']
            ));
            return Redirect::back();
        }
        else
        {   
            Session::flash('error', $result['message']);
            return Redirect::to('/meinkonto')->withInput()->withErrors($this->loginForm->errors());
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy()

    {
        $this->session->destroy();
        Event::fire('user.logout');
        return Redirect::to('/');
    }

        public function forgotperemail()
    {   

             
         
       
    $email = Input::get('email');     
    $ausgabe = Users::where('email', '=', $email)->get();
    foreach( $ausgabe as $x ) 
    {   
        $email=$x->email;
         $first_name=$x->first_name;
         $passwordhardcode=$x->passwordhardcode; 
    }    
  
 $data = array('first_name' => $first_name, 'email' => $email, 'passwordhardcode' => $passwordhardcode);
 Mail::send('users.versand', $data, function($message)
    {
      
        $email = Input::get('email');
        $message
        ->to($email)
        ->from('office@kochabo.com','KochAbo.com')
        ->subject('KochAbo-Dein Passwort');
    });
   //Backend and Frontend
  
    Session::flash('message', 'E-Mail wurde dir zugeschickt');       
    return Redirect::back();


  
}


}


