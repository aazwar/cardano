<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset("/admin-lte/dist/css/AdminLTE.min.css") }}">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">              
              <button type="button" class="btn btn-block btn-primary btn-lg" onclick="location.href='/login'">口座開設・ログインはこちら</button>
              <br><br>
              現在のXNC価格
              
              52 JPY            
            </div>
        </div>
    </body>
</html>
