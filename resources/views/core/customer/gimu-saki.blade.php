@extends('core/customer/dashboard')

@section('content')

<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">入力変更</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <?php
      $user = Auth::user();
    ?>
    <form class="form-horizontal" method="post" action="/customer/employment">
      <div class="box-body">
        <div class="form-group">
          <label for="gimusakina" class="col-sm-4 control-label">義務先名<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="gimusakina"
              value="{{ old('gimusakina') ?: $user->emp_name }}">
          </div>
        </div>
        <div class="form-group">
          <label for="gimusakina-kana" class="col-sm-4 control-label">義務先名（カナ）<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="gimusakina-kana"
              value="{{ old('gimusakina-kana') ?: $user->emp_name_kana }}">
          </div>
        </div>
        <div class="form-group">
          <label for="busho" class="col-sm-4 control-label">部署及び役職<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="busho"
              value="{{ old('busho') ?: $user->emp_position }}">
          </div>
        </div>
        <div class="form-group">
          <label for="denwa" class="col-sm-4 control-label">電話<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="denwa"
              value="{{ old('denwa') ?: $user->emp_phone }}">
          </div>
        </div>
        <div class="form-group">
          <label for="fax" class="col-sm-4 control-label">FAX</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="fax"
              value="{{ old('fax') ?: $user->emp_fax }}">
          </div>
        </div>
        <div class="form-group">
          <label for="yuubinbango" class="col-sm-4 control-label">郵便番号<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="yubinbango"
              value="{{ old('yuubinbango') ?: $user->emp_yuubinbango }}">
          </div>
        </div>
        <div class="form-group">
          <label for="todoufuken" class="col-sm-4 control-label">都道府県<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="todoufuken"
              value="{{ old('todoufuken') ?: $user->emp_todoufuken }}">
          </div>
        </div>
        <div class="form-group">
          <label for="shikuchouson" class="col-sm-4 control-label">市区町村<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="shikuchouson"
              value="{{ old('shikuchouson') ?: $user->emp_shikuchouson }}">
          </div>
        </div>
        <div class="form-group">
          <label for="banchi" class="col-sm-4 control-label">番地<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="banchi"
              value="{{ old('banchi') ?: $user->emp_banchi }}">
          </div>
        </div>
        <div class="form-group">
          <label for="tatemonona" class="col-sm-4 control-label">建物名<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="tatemonona"
              value="{{ old('tatemonona') ?: $user->emp_tatemonona }}">
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
