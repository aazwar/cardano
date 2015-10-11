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
            <select name="todoufuken" class="form-control">
              <option>北海道</option>
              <option>青森県</option>
              <option>岩手県</option>
              <option>宮城県</option>
              <option>秋田県</option>
              <option>山形県</option>
              <option>福島県</option>
              <option>茨城県</option>
              <option>栃木県</option>
              <option>群馬県</option>
              <option>埼玉県</option>
              <option>千葉県</option>
              <option>東京都</option>
              <option>神奈川県</option>
              <option>新潟県</option>
              <option>富山県</option>
              <option>石川県</option>
              <option>福井県</option>
              <option>山梨県</option>
              <option>長野県</option>
              <option>岐阜県</option>
              <option>静岡県</option>
              <option>愛知県</option>
              <option>三重県</option>
              <option>滋賀県</option>
              <option>京都府</option>
              <option>大阪府</option>
              <option>兵庫県</option>
              <option>奈良県</option>
              <option>和歌山県</option>
              <option>鳥取県</option>
              <option>島根県</option>
              <option>岡山県</option>
              <option>広島県</option>
              <option>山口県</option>
              <option>徳島県</option>
              <option>香川県</option>
              <option>愛媛県</option>
              <option>高知県</option>
              <option>福岡県</option>
              <option>佐賀県</option>
              <option>長崎県</option>
              <option>熊本県</option>
              <option>大分県</option>
              <option>宮崎県</option>
              <option>鹿児島県</option>
              <option>沖縄県</option>
            </select>
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
    $('input[name="birth_date"]').datepicker({ dateFormat: 'yy-mm-dd' });
    $('select[name="todoufuken"]').val('{{ $user->todoufuken }}');
  })
  </script>


</div>

@endsection
