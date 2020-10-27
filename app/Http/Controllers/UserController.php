<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use Illuminate\Http\Response;
use App\Models\User;
use DB;

Class UserController extends Controller {
 private $request;

 public function __construct(Request $request){
     $this->request = $request;
 }

 public function successResponse($data, $code = Response::HTTP_OK) {
     return response()->json(['data' => $data], $code);
 }

 public function errorResponse($message, $code) {
     return response()->json(['error' => $message, 'code' => $code], $code);
 }

 public function getUsers(){
     $users = DB::connection('mysql')
     ->select("Select * from tbluser");
     return response()->json($users, 200);
 }

 
 
 public function addUser(Request $request){
    $rules = [
        'username' => 'required|max:20',
        'password' => 'required|max:20',
    ];

    $this->validate($request, $rules);

    $user = User::create($request->all());

    return $this->successResponse($user, Response::HTTP_CREATED);
}

 public function showId($id){
     $user = User::where('ID' , $id)->first();
     if($user) {
         return $this->successResponse($user);
     }
     {
         return $this->errorResponse("No found user!", Response::HTTP_NOT_FOUND);
     }
 }

 public function updateUser(Request $request, $id) {
     $user = User::where('ID', $id)->first();
     $rules = [
        'username' => 'required|max:20',
        'password' => 'required|max:20'
     ];

     if($user){
         $user->fill($request->all());

         if($user->isClean()){
             return "No changes has been made!";
         }
     }

     else{
         return $this->errorResponse("No found user!", Response::HTTP_NOT_FOUND);
     }

     $user->save();
     return $this->successResponse($user);

     $this->validate($this->request, $rules);
 }

 public function deleteUser($id) {
     $user = User::find($id);

     if($user){
         $user->delete();
         return "Deleted Successfully!";
     }

     else{
         return $this->errorResponse("No found user!", Response::HTTP_NOT_FOUND);
     }

 }

 
} 


