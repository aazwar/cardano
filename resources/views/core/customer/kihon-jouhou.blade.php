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
          <label for="namae" class="col-sm-4 control-label">お名前<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namae" placeholder="お名前">
          </div>
        </div>
        <div class="form-group">
          <label for="namae-kana" class="col-sm-4 control-label">お名前（カナ）<font color="red">＊</font></label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="namae-kana" placeholder="お名前（カナ）">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">性別<font color="red">＊</font></label>                 
          <div class="col-sm-4">
            <label><input type="radio" name="seibetsu" id="seibetsu" value="男性" checked> 男性</label>&nbsp;
            <label><input type="radio" name="seibetsu" id="seibetsu" value="女性"> 女性</label>
          </div>
        </div>
        <div class="form-group">
          <label for="denwa" class="col-sm-4 control-label">電話<font color="red">＊</font></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="denwa" placeholder="05004042932">
          </div>
        </div>
        <div class="form-group">
          <label for="keitai-denwa" class="col-sm-4 control-label">携帯電話</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="keitai-denwa" placeholder="09004042932">
          </div>
        </div>
        <div class="form-group">
          <label for="faks" class="col-sm-4 control-label">FAX</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="faks" placeholder="">
          </div>
        </div>
        <div class="form-group">
          <label for="seinengappi" class="col-sm-4 control-label">生年月日<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="seinengappi" placeholder="1989-02-02">
          </div>
        </div>
                <div class="form-group">
          <label for="yubinbango" class="col-sm-4 control-label">郵便番号<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="yubinbango" placeholder="170-0003">
          </div>
        </div>
        <div class="form-group">
          <label for="todoufuken" class="col-sm-4 control-label">都道府県<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="todoufuken" placeholder="東京都">
          </div>
        </div>
        <div class="form-group">
          <label for="shikuchouson" class="col-sm-4 control-label">市区町村<font color="red">＊</font></label>
          <div class="col-sm-3">
            <input type="text" class="form-control" id="shikuchouson" placeholder="新宿区">
          </div>
        </div>
        <div class="form-group">
          <label for="banchi" class="col-sm-4 control-label">番地<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="banchi" placeholder="西新宿１０−１８">
          </div>
        </div>
        <div class="form-group">
          <label for="tatemonona" class="col-sm-4 control-label">建物名<font color="red">＊</font></label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="tatemonona" placeholder="かわいそう　１０１">
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