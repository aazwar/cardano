@extends('core/customer/dashboard')

@section('content')

<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">入力変更</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="genzai-pass" class="col-sm-4 control-label">現在のパスワード</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="genzai-pass" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="kibou-pass" class="col-sm-4 control-label">ご希望のパスワード</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="kibou-pass" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="kibou-pass-kakunin" class="col-sm-4 control-label">ご希望のパスワード確認</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="kibou-pass-kakunin" placeholder="">
          </div>
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">キャンセル</button>
        <button type="submit" class="btn btn-info pull-right">確認</button>
      </div><!-- /.box-footer -->
    </form>
  </div><!-- /.box -->

</div>

@endsection