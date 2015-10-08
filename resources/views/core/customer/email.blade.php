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
          <label for="genzai-email" class="col-sm-4 control-label">現在のメールアドレス</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="genzai-email" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="kibou-email" class="col-sm-4 control-label">ご希望のメールアドレス</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="kibou-email" placeholder="">
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