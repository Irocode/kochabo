<?php 







class ConformeemailController extends BaseController

{
    protected $users;
    public function __construct(Users $users)

    {
      $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()

    {
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()

    {
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)

    {
      
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)

    {
       
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)

    {

        //Remove the Session for Popup         
         Session::forget('keconformemaily');


         $fbaktuelleemail = Users::find($id);
         $fbaktuelleemail->fbaktuelleemail = Input::get('fbaktuelleemail');
         $fbaktuelleemail->save();
          
        
       return Redirect::to('/social/Facebook#_=_');
           
       //return Redirect::back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)

    {
       
    }
    public function confirmDestroy($id)

    {
      
    }
    public function togglePublish($id)

    {
        
    }
}


