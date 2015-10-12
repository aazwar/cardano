<?php

namespace Cardano\Http\Controllers;

Use Auth;
Use Hash;
Use Validator;
use Illuminate\Http\Request;
use Cardano\Http\Controllers\Controller;

class MasterController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
    $this->middleware('role:master');
  }

  /**
    Password change
  */
    public function getPassword() {
      return view('core/master/password',
        ['page_title' => 'パスワード変更', 'user' => Auth::user() ]);
    }

    public function postPassword(Request $request) {
      Validator::extend('hash_check', function($attribute, $value, $parameters) {
        return Hash::check($value, Auth::user()->getAuthPassword());
      });

      $this->validate($request, [
        'current_password' => 'required|hash_check',
        'new_password' =>'required|confirmed'
      ], [
        'hash_check' => '現在のパスワードは違う'
      ]);

      $user = Auth::user();
      $user->password = Hash::make($request->input('current_password'));
      $user->save();

      return redirect()->action('MasterController@getPassword')->with('message',
        'パスワードが変更されました。');
    }

    /**
     Update Email
    */

    public function getEmail() {
      return view('core/master/email',
        ['page_title' => 'メールアドレス変更', 'user' => Auth::user() ]);
    }

    public function postEmail(Request $request) {
      $this->validate($request, [
          'email' => 'required|email|unique:customers'
      ]);
      $input = $request->only(['email']);
      $this->updateRecord($input);
      // Need send confirmation email to user

      return redirect()->action('MasterController@getEmail')->with('message',
        'Email changed to: ' . $request->input('email'));
    }
}
