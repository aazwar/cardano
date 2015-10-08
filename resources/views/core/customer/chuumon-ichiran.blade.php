@extends('core/customer/dashboard')

@section('content')
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-warning"></i> 注意！</h4>
  Bitcoin　アドレスが未登録です。
</div>

<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <!-- form start -->
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="nyuukin-kingaku" class="col-sm-4 control-label">入金金額<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nyuukin-kingaku" placeholder="10000000">
          </div>
        </div>
        <div class="form-group">
          <label for="nyuukin-yoteibi" class="col-sm-4 control-label">入金予定日<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nyuukin-yoteibi" placeholder="2015-11-01">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-4">&nbsp;</div>
          <div class="col-sm-8">
            価値記録XNC購入規約（翻訳）
            
            <input type="text" class="form-control" id="seibetsu" placeholder="男性">
          </div>
        </div>

      </div><!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">キャンセル</button>
        <button type="submit" class="btn btn-info pull-right">変更</button>
      </div><!-- /.box-footer -->
    </form>
  </div><!-- /.box -->

</div>

@endsection