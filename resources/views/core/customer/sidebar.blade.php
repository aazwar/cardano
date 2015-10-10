<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <?php
          $role = $user->agent_id?"ユーザー":"代理店";
        ?>
        <p>{{ $user->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i>
          {{ $role }}
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">{{ $role }} TOP</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="/customer/dashboard"><span>トップ</span></a></li>
      <li><a href="/customer/order"><span>ご注文</span></a></li>
      <li><a href="/customer/order-list"><span>ご注文一覧</span></a></li>
      <li><a href="/customer/transfer"><span>ご入金先</span></a></li>

      <li class="header">各種入力・変更</li>
      <li><a href="/customer/profile"><span>基本情報</span></a></li>
      <li><a href="/customer/employment"><span>義務先</span></a></li>
      <li><a href="/customer/bitcoin"><span>Bitcoin アドレス</span></a></li>

      <li class="header">アジアンペイ</li>
      <li><a href="#"><span>ASIANPAY 講座開設申し込み</span></a></li>

      <li class="header">アカウント</li>
      <li><a href="/customer/email"><span>メールアドレス変更</span></a></li>
      <li><a href="/customer/password"><span>パスワード変更</span></a></li>
      <li><a href="/logout"><span>ログアウト</span></a></li>
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
