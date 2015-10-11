@extends('core/customer/dashboard')

@section('content')

<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">入力変更</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="/customer/profile">
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <label for="name" class="col-sm-4 control-label">お名前<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name" placeholder="お名前"
              value="{{ old('name') ?: $user->name }}">
          </div>
        </div>
        <div class="form-group">
          <label for="name_kana" class="col-sm-4 control-label">お名前（カナ）<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name_kana" placeholder="お名前（カナ）"
              value="{{ old('name_kana') ?: $user->name_kana }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">性別<font color="red">＊</font></label>
          <?php $sex = old('sex') ?: $user->sex;?>
          <div class="col-sm-4">
            <label><input type="radio" name="seibetsu" name="sex" value="男性"
              <?php if($sex == "男性") print("checked") ?>> 男性</label>&nbsp;
            <label><input type="radio" name="seibetsu" name="sex" value="女性"
              <?php if($sex == "女性") print("checked") ?>> 女性</label>
          </div>
        </div>
        <div class="form-group">
          <label for="phone" class="col-sm-4 control-label">電話<font color="red">＊</font></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="phone"
              value="{{ old('phone') ?: $user->phone }}">
          </div>
        </div>
        <div class="form-group">
          <label for="mobile_phone" class="col-sm-4 control-label">携帯電話</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="mobile_phone"
            value="{{ old('mobile_phone') ?: $user->mobile_phone }}">
          </div>
        </div>
        <div class="form-group">
          <label for="fax" class="col-sm-4 control-label">FAX</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="fax"
            value="{{ old('fax') ?: $user->fax }}">
          </div>
        </div>
        <div class="form-group">
          <label for="birth_date" class="col-sm-4 control-label">生年月日<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="birth_date" placeholder="1989-02-02"
              value="{{ old('birth_date') ?: $user->birth_date ?: '1991-01-01' }}">
          </div>
        </div>
        <div class="form-group">
          <label for="yuubinbango" class="col-sm-4 control-label">郵便番号<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="yuubinbango" placeholder="170-0003"
              value="{{ old('yuubinbango') ?: $user->yuubinbango }}">
          </div>
        </div>
        <div class="form-group">
          <label for="todoufuken" class="col-sm-4 control-label">都道府県<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="todoufuken" placeholder="東京都"
              value="{{ old('todoufuken') ?: $user->todoufuken }}">
          </div>
        </div>
        <div class="form-group">
          <label for="shikuchouson" class="col-sm-4 control-label">市区町村<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="shikuchouson" placeholder="新宿区"
            value="{{ old('shikuchouson') ?: $user->shikuchouson }}">
          </div>
        </div>
        <div class="form-group">
          <label for="banchi" class="col-sm-4 control-label">番地<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="banchi" placeholder="西新宿１０−１８"
              value="{{ old('banchi') ?: $user->banchi }}">
          </div>
        </div>
        <div class="form-group">
          <label for="tatemonona" class="col-sm-4 control-label">建物名<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="tatemonona" placeholder="かわいそう　１０１"
              value="{{ old('tatemonona') ?: $user->tatemonona }}">
          </div>
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">キャンセル</button>
        <button type="submit" class="btn btn-info pull-right">変更</button>
      </div><!-- /.box-footer -->
    </form>
  </div><!-- /.box -->
  @include('errors.message')
  @include('core.message')

  <link href="{{ asset("/admin-lte/plugins/jQueryUI/jquery-ui.structure.min.css")}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset("/admin-lte/plugins/jQueryUI/jquery-ui.theme.min.css")}}" rel="stylesheet" type="text/css" />
  <script src="{{ asset('/admin-lte/plugins/jQueryUI/jquery-ui.min.js') }}" charset="utf-8"></script>
  <script type="text/javascript">
  $(function() {
    $('#birth_date').datepicker({ dateFormat: 'yy-mm-dd' });
  })
  </script>


</div>

@endsection
