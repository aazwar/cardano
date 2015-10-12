<?php

namespace Cardano\Http\Controllers;

Use Auth;
Use Hash;
Use Validator;
use Illuminate\Http\Request;

class CustomerController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

/**
  Update record with mass assignment
*/
  private function updateRecord($input) {
    $user = Auth::user();
    $user->fill($input);
    $user->save();
  }

  public function getDashboard() {
    return view('core/customer/top',
      ['page_title' => 'ユーザーTOP', 'user' => Auth::user() ]);
  }

/**
  Update profile
*/
  public function getProfile() {
    return view('core/customer/kihon-jouhou',
      ['page_title' => '基本情報', 'user' => Auth::user() ]);
  }

  public function postProfile(Request $request) {
    $this->validate($request, [
      /*'name' => array('required', 'regex:/(\p{Han}|\p{Hiragana})+/'),
      'name_kana' => array('required', 'regex:/\p{Katakana}+/'),*/
      'name' => 'required',
      'name_kana' => 'required',
      'phone'=> array('required', 'regex:/[0-9+*()-]+/'),
      'mobile_phone' => array('regex:/[0-9+*()-]+/'),
      'fax' => array('regex:/[0-9+*()-]/'),
      'birth_date' => 'required|date_format:Y-m-d',
      'yuubinbango' => array('required', 'regex:/\d{3}-\d{4}/'),
      'todoufuken' => 'required',
      'shikuchouson' => 'required',
      'banchi' => 'required',
      'tatemonona' => 'required'
    ]);

    $input = $request->only(['name', 'name_kana', 'phone', 'mobile_phone', 'fax',
      'birth_date', 'yuubinbango', 'todoufuken', 'shikuchouson', 'banchi',
      'tatemonona']);
    $this->updateRecord($input);
    return redirect()->action('CustomerController@getProfile')->with('message',
      '基本情報が変更されました。');
  }


/**
  Employment
*/

  public function getEmployment() {
    return view('core/customer/gimu-saki',
      ['page_title' => '義務先', 'user' => Auth::user()]);
  }

  public function postEmployment(Request $request) {
    $this->validate($request, [
      /*'emp_name' => array('required', 'regex:/(\p{Han}|\p{Hiragana})+/'),
      'emp_name_kana' => array('required', 'regex:/\p{Katakana}+/'),*/
      'emp_name' => 'required',
      'emp_name_kana' => 'required',
      'emp_position' => 'required',
      'emp_phone'=> array('required', 'regex:/[0-9+*()-]+/'),
      'emp_fax' => array('regex:/[0-9+*()-]/'),
      'emp_yuubinbango' => array('required', 'regex:/\d{3}-\d{4}/'),
      'emp_todoufuken' => 'required',
      'emp_shikuchouson' => 'required',
      'emp_banchi' => 'required',
      'emp_tatemonona' => 'required'
    ]);

    $input = $request->only(['emp_name', 'emp_name_kana', 'emp_position',
      'emp_phone', 'emp_fax', 'emp_yuubinbango', 'emp_todoufuken',
      'emp_shikuchouson', 'emp_banchi', 'emp_tatemonona']);
    $this->updateRecord($input);
    return redirect()->action('CustomerController@getEmployment')->with('message',
      '義務先が変更されました。');
  }

  /**
    XNC Order
  */
  public function getOrder() {
    return view('core/customer/chuumon',
      ['page_title' => 'ご注文【XNC】', 'user' => Auth::user() ]);
  }

  public function postOrder(Request $request) {
    $this->validate($request, [
        'nyuukin_kingaku' => 'required',
        'nyuukin_yoteibi' => 'required|date_format:Y-m-d'
    ]);
    $input = $request->only(['nyuukin_kingaku', 'nyuukin_yoteibi']);
    $input['nyuukin_kingaku'] = preg_replace('/[^0-9]/', '', $input['nyuukin_kingaku']);

    return redirect()->action('CustomerController@getOrder')->with('message',
      'Order placed: '. $request->input('nyuukin_kingaku'));
  }

  public function getOrderList() {
    return view('core/customer/chuumon-ichiran', ['page_title' => 'ご注文ご注文一覧【XNC】']);
  }


  /**
   Update Email
  */

  public function getEmail() {
    return view('core/customer/email',
      ['page_title' => 'メールアドレス変更', 'user' => Auth::user() ]);
  }

  public function postEmail(Request $request) {
    $this->validate($request, [
        'email' => 'required|email|unique:customers'
    ]);
    $input = $request->only(['email']);
    $this->updateRecord($input);
    // Need send confirmation email to user

    return redirect()->action('CustomerController@getEmail')->with('message',
      'Email changed to: ' . $request->input('email'));
  }


/**
  Password change
*/
  public function getPassword() {
    return view('core/customer/password',
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

    return redirect()->action('CustomerController@getPassword')->with('message',
      'パスワードが変更されました。');
  }

/**
  Bank Account
*/
  public function getTransfer() {
    return view('core/customer/nyuukin-saki', ['page_title' => '入金先']);
  }

/**
  Bitcoin Address
*/
  public function getBitcoin() {
    return view('core/customer/bitcoin',
      ['page_title' => 'Bitcoin アドレス', 'user' => Auth::user()]);
  }

  public function postBitcoin(Request $request) {
    $this->validate($request, [
        'bitcoin_address' => 'required',
    ]);
    // TODO: bitcoin_address Validation

    $input = $request->only(['bitcoin_address']);
    $this->updateRecord($input);
    return redirect()->action('CustomerController@getBitcoin')->with('message',
      'Bitcoin アドレスが変更されました。');

  }
}

?>
