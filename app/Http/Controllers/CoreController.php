<?php

namespace Cardano\Http\Controllers;

class CoreController extends Controller {
  
  public function root() {
    return view('welcome');  
  }
  
  public function getLogin() {
    return view('login');
  }
  
  public function getLogout() {
    
  }
}

?>