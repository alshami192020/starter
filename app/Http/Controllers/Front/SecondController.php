<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;


class SecondController extends Controller
{
    // public function ShowString(){
    //     return('string from first controller');
    // }
    public function __construct()
    {
        //this auth will be for the whole routes and method except the one ShowString3.
        $this->middleware('auth')->except('ShowString3');
        return('static string');

    }
    public function ShowString1(){

        return('static string 1');
    }
 public function ShowString2(){

        return('static string 2');
    }
    public function ShowString3(){

        return('static string 3');
    }
}
