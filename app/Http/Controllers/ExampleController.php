<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
}
//<?php
/**namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use Illuminate\Http\Response;
use App\Models\User;

Class UserController extends Controller {
    private $request;
    
    public function __construct(Request $request){
        $this->request = $request;
 } 
    public function getUsers(){
        $users = User::all();
        return response()->json($users, 200);
 }
}**/
