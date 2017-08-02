<?php

namespace App\Http\Controllers;
use App\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\UserModel;
use App\Http\Request\ValidateRequest;
use Validator;

/**
* 
*/
class Test extends Controller
{
    public function index() {
     
        return view('welcome');
    }

     public function addMethod() {
     
        return view('addview');
    }


     public function listMethod() {
     
        return view('listview');
    }


}// end of class
?>
