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
    <form class="form-horizontal" method="post" action="/customer/order" id="form">
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <label for="nyuukin_kingaku" class="col-sm-4 control-label">入金金額<font color="red">＊</font></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nyuukin_kingaku" id="nyuukin_kingaku"
              placeholder="¥ 100.000">
          </div>
        </div>
        <div class="form-group">
          <label for="nyuukin_yoteibi" class="col-sm-4 control-label">入金予定日<font color="red">＊</font></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="nyuukin_yoteibi" name="nyuukin_yoteibi"
              placeholder="2015-11-01" value="{{ old('nyuukin_yoteibi') ?: date('Y-m-d') }}">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">&nbsp;</div>
          <div class="col-sm-8">
            価値記録XNC購入規約（翻訳）<br>
            Value Record XNC Purchase Policy (Eng)<br>
            <label><input type="checkbox"> 規約に同意する</label>
          </div>
        </div>

      </div><!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">キャンセル</button>
        <button type="submit" class="btn btn-info pull-right">確認</button>
      </div><!-- /.box-footer -->
    </form>
  </div><!-- /.box -->

  @include('errors.message')
  @include('core.message')

  <link href="{{ asset("/admin-lte/plugins/jQueryUI/jquery-ui.structure.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("/admin-lte/plugins/jQueryUI/jquery-ui.theme.min.css")}}" rel="stylesheet" type="text/css" />
  <script src="{{ asset('/admin-lte/plugins/autoNumeric/autoNumeric.js') }}" charset="utf-8"></script>
  <script src="{{ asset('/admin-lte/plugins/jQueryUI/jquery-ui.min.js') }}" charset="utf-8"></script>
  <script type="text/javascript">
  $(function() {
    $('#nyuukin_kingaku').autoNumeric("init", { aSign: '¥ ', mDec: 0 });
    $('#nyuukin_yoteibi').datepicker({ dateFormat: 'yy-mm-dd' });
  })
  </script>
</div>

@endsection
