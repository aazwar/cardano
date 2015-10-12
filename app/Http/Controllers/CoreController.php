<?php

namespace Cardano\Http\Controllers;
use DB;
use Auth;

class CoreController extends Controller {

  public function root() {
    $rate = DB::select('SELECT rate FROM rate_history ORDER BY start_from DESC LIMIT 1');
    return view('welcome', ['rate' => $rate[0]->rate]);
  }

  public function getDashboard() {
    return view('dashboard', ['user' => Auth::user() ]);
  }
}

?>
