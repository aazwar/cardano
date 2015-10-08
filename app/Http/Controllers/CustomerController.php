<?php

namespace Cardano\Http\Controllers;

class CustomerController extends Controller {
  
  public function getDashboard() {
    return view('core/customer/top', ['page_title' => 'ユーザーTOP']);
  }
 
  public function getProfile() {
    return view('core/customer/kihon-jouhou', ['page_title' => '基本情報']);    
  }
 
  public function getEmployment() {
    return view('core/customer/gimu-saki', ['page_title' => '義務先']);    
  }
 
  public function getOrder() {
    return view('core/customer/chuumon', ['page_title' => 'ご注文【XNC】']);
  }

  public function getOrderList() {
    return view('core/customer/chuumon-ichiran', ['page_title' => 'ご注文ご注文一覧【XNC】']);
  }
  
  public function getEmail() {
    return view('core/customer/email', ['page_title' => 'メールアドレス変更']);
  }
  
  public function getPassword() {
    return view('core/customer/password', ['page_title' => 'パスワード変更']);
  }
  
  public function getTransfer() {
    return view('core/customer/nyuukin-saki', ['page_title' => '入金先']);
  }
  
  public function getBitcoin() {
    return view('core/customer/bitcoin', ['page_title' => 'Bitcoin アドレス']);
  }
}

?>