@extends('core/customer/dashboard')

@section('content')
@unless ($user->bitcoin_address)
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-warning"></i> 注意！</h4>
  Bitcoin　アドレスが未登録です。
</div>
@endunless

<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <!-- form start -->
    <form class="form-horizontal" method="post" action="/customer/bitcoin">
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <label for="bitcoin_address" class="col-sm-4 control-label">Bitcoin アドレス</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="bitcoin_address"
              value="{{ old('bitcoin_address') ?: $user->bitcoin_address }}">
          </div>
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">キャンセル</button>
        <button type="submit" class="btn btn-info pull-right">Bitcoin アドレスを入力</button>
      </div><!-- /.box-footer -->
    </form>
  </div><!-- /.box -->
  @include('errors.message')
  @include('core.message')

</div>

@endsection
