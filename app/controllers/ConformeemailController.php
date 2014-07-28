<?php 

class ConformeemailController extends BaseController

{
    protected $users;
    public function __construct(Users $users)

    {
        View::share('active', 'modules');
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

    /*
    public function create()

    {  
        


        $users_ingredient = Recipe_ingredient::all();
        return View::make('backend.users.create', compact('users_ingredient'));
    }
*/


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)

    {  
     $users = $this->users->find($id);
        return View::make('backend.users.show', compact('users'));   
    }


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
        $users = $this->users->find($id);
        return View::make('backend.users.show', compact('users'));
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


