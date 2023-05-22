<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class module14Controller extends Controller
{
    //
    function sevenInOne(Request $request):JsonResponse|null|string|array{

        //retrieve name input field value from a form request
        $name=$request->input('name');
        //retrieve user-agent header from current request
        $user_agent= $request->header('User-Agent');
        //retrieving page query parameter,if not sent assign it to 0
        $page= $request->query('page',null);
        

        //create json response
        $message="success";
        $data=[ "name"=>"John Doe", "age"=>25];
        $statuscode=201;
        response()->json(["message"=>$message, "data"=>$data],$statuscode) ;
       

        //upload request multipart form data
        $image = $request->file('avatar');
        $image->move(public_path('uploads'),$image->getClientOriginalName());

        

        //cookie request

        $rememberToken=$request->cookie('remembertoken');
        if(!(isset($rememberToken)))
             $rememberToken=null;
        
        
        $email = $request->email;
        
        
        if(isset($email)){
        $my_array = ["success"=> "true", "message" => "form submittes successfully"];
        
        }
        else{
            return "No email found";
        }
        return response()->json($my_array);

        

       
        


        





         //create a json response
        

}


    
}
