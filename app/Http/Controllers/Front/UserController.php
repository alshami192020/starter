<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName(){
        return ('Faisal Hameed');
    }

public function getIndex(){

     //first way to passing data :
     //1: passing the data throw the controller , it's the right way.
     //return view('welcome')->with(['name'=>'controller','age'=>2]);
      //second way to passing data
  //  $obj=new \stdClass;
    //$obj->name='faisal';
    //$obj->age=29;
    $obj=['name'=>'faisal','age'=>29];
    return view('welcome',compact('obj'))->with('obj',$obj);

}
}
