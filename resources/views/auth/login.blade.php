<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cardano Bitcoin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset("/admin-lte/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/AdminLTE.min.css") }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("/admin-lte/plugins/iCheck/square/blue.css") }}">

    <style>
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .contained {
            text-align: center;
            display: inline-block;
        }

    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">

        <div class="login-box">
          <div class="login-logo">
            <b>Cardano</b> Bitcoin System</a>
          </div><!-- /.login-logo -->

          <div class="login-box-body">
            <p class="login-box-msg">再注文される方はこちら【ログイン】</p>
            <form action="{{ asset("/login") }}" method="post">
              {!! csrf_field() !!}
              <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="＊メールアドレス"
                  name="email" value=" {{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="＊パスワード"
                  name="password" id="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                <label>
                  <input type="checkbox" class="checkbox icheck"> 入力内容表示
                </label>
                  </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">ログイン</button>
                </div><!-- /.col -->
              </div>
            </form>

            <a href="#">I forgot my password</a><br>
          </div><!-- /.login-box-body -->
          <br><br>

          @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
          @endif


        </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset("/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset("/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("/admin-lte/plugins/iCheck/icheck.min.js") }}"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
