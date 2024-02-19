<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopsController extends Controller
{
    public function __construct()
   {
     parent::__construct();
   }

   public function index()
   {
    return $this->isLogin() ? $this->top() : $this->welcome();
   }

   public function welcome()
   {
    return view('welcome');
   }

   public function top()
   {
    $token = unserialize($_SESSION['token']);
    $user = $this->provider->getResourceOwner($token);

    return view('top', ['user' => $user]);
   }
   
   private function isLogin()
   {
    return !empty($_SESSION['token']);
   }
}
