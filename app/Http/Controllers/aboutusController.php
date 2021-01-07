<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class aboutusController extends Controller{

    public function index(){
        $currdate = date('Y/m/d');
        return view('aboutus',['currdate' => $currdate]);
    }

    public function index_history($history){
        $history = "The History of PLUSTIC";
        return $history;
    }
}