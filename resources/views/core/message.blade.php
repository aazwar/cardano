{{-- Expecting variable $message --}}

@if (session('message'))
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-info-circle"></i> メッセージ</h4>
  {{ session('message') }}
</div>
@endif
