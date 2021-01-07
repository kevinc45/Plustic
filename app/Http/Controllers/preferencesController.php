<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class preferencesController extends Controller{
    public function index(){
        return view('preferences');
    }
    public function contactus(){
        return view('contactus');
    }
    public function tos(){
        return view('tos');
    }
}