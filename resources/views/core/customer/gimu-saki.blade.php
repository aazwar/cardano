@extends('core/customer/dashboard')

@section('content')

<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">入力変更</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="/customer/employment">
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <label for="emp_name" class="col-sm-4 control-label">義務先名<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="emp_name"
              value="{{ old('emp_name') ?: $user->emp_name }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_name_kana" class="col-sm-4 control-label">義務先名（カナ）<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="emp_name_kana"
              value="{{ old('emp_name_kana') ?: $user->emp_name_kana }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_position" class="col-sm-4 control-label">部署及び役職<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="emp_position"
              value="{{ old('emp_position') ?: $user->emp_position }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_phone" class="col-sm-4 control-label">電話<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="emp_phone"
              value="{{ old('emp_phone') ?: $user->emp_phone }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_fax" class="col-sm-4 control-label">FAX</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="emp_fax"
              value="{{ old('emp_fax') ?: $user->emp_fax }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_yuubinbango" class="col-sm-4 control-label">郵便番号<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="emp_yuubinbango"
              value="{{ old('emp_yuubinbango') ?: $user->emp_yuubinbango }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_todoufuken" class="col-sm-4 control-label">都道府県<font color="red">＊</font></label>
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
          <label for="emp_shikuchouson" class="col-sm-4 control-label">市区町村<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="emp_shikuchouson"
              value="{{ old('emp_shikuchouson') ?: $user->emp_shikuchouson }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_banchi" class="col-sm-4 control-label">番地<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="emp_banchi"
              value="{{ old('emp_banchi') ?: $user->emp_banchi }}">
          </div>
        </div>
        <div class="form-group">
          <label for="emp_tatemonona" class="col-sm-4 control-label">建物名<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="emp_tatemonona"
              value="{{ old('emp_tatemonona') ?: $user->emp_tatemonona }}">
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

  <script type="text/javascript">
  $(function() {
    $('select[name="todoufuken"]').val('{{ $user->todoufuken }}');
  })
  </script>

</div>

@endsection
