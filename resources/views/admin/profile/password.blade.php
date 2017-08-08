@extends('base')

@section('page_title')
  Update Password
@endsection

@section('page_header')
  <link rel="stylesheet" href="/bower_components/form.validation/dist/css/formValidation.min.css">
@endsection

@section('sidebar')
  @include('admin.sidebar', ['active' => 'profile-password'])
@endsection

@section('content')
  <section class="content-header">
    <h1>Update Password</h1>
    <ol class="breadcrumb">
      <li>Profile</li>
      <li class="active">Password</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">update password
          @isset($msg)<span class="alert-danger" style="margin-left:15px;">{{ $msg }}</span>@endisset</h3>
      </div>
      <form role="form" method="post" data-fv-addons="i18n">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label for="password">Old Password</label>
            <input type="password" class="form-control" name="old_password" placeholder="" data-fv-notempty="true"
              data-fv-stringlength="true" data-fv-stringlength-max="15" data-fv-stringlength-min="7">
          </div>
          <div class="form-group">
            <label for="password">密码(长度7-15位)</label>
            <input type="password" class="form-control" name="password" placeholder="" data-fv-notempty="true"
              data-fv-stringlength="true" data-fv-stringlength-max="15" data-fv-stringlength-min="7">
          </div>
          <div class="form-group">
            <label for="r_password">再次输入密码</label>
            <input type="password" class="form-control" name="r_password" placeholder="" data-fv-notempty="true"
              data-fv-identical="true" data-fv-identical-field="password" data-fv-identical-message="两次密码不一致">
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">修改</button>
        </div>
      </form>
    </div>
  </section>
@endsection

@section('page_script')
  <script src="/bower_components/form.validation/dist/js/formValidation.min.js"></script>
  <script src="/bower_components/form.validation/dist/js/framework/bootstrap.min.js"></script>
  <script src="/js/i18n.min.js"></script>
  <script src="/bower_components/form.validation/dist/js/language/zh_CN.js"></script>
  <script>
$(function(){
  $('form').formValidation('setLocale', 'zh_CN');
})
  </script>
@endsection
