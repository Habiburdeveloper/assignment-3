<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller{

    function index(Request $request){
        $id = $request->id;
        $name = "Donal Trump";
        $age = "75";
        $data = [
            'name' => $name,
            'age' => $age,
            'id' => $id
        ];

        // Cookies Propertys.......
        $cName = "access_token";
        $cValue = "123-XYZ";
        $cTime = 1;
        $cPath = '/';
        $cDomain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        $statusCode = 200;
        $response = response()-> json(["data" => $data])
                              -> setStatusCode($statusCode)
                              -> cookie($cName, $cValue, $cTime, $cDomain, $secure, $httpOnly); 

        return $response;
        
    }


}
