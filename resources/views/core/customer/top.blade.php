@extends('core/customer/dashboard')

@section('content')

@unless ($user->bitcoin_address)
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-warning"></i> 注意！</h4>
  Bitcoin　アドレスが未登録です。
</div>
@endunless

@endsection
