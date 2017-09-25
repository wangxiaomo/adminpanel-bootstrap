@extends('admin.base')

@section('page_title')
  新建管理员
@endsection

@section('page_header')
  <link rel="stylesheet" href="/bower_components/form.validation/dist/css/formValidation.min.css">
@endsection

@section('sidebar')
  @include('admin.sidebar', ['active' => 'admin_users.create'])
@endsection

@section('content')
  <section class="content-header">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb">
      <li>管理员信息</li>
      <li class="active">新建管理员</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">新建
          @isset($msg)<span class="alert-danger" style="margin-left:15px;">{{ $msg }}</span>@endisset</h3>
      </div>
      <form role="form" method="post" data-fv-addons="i18n">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label>管理员类型</label>
            <select class="form-control" name="admin_type">
              <option value="0" @isset($data){{ $data['admin_type'] == 0? 'selected': '' }}@endisset>超级管理员</option>
              <option value="1" @isset($data){{ $data['admin_type'] == 1? 'selected': '' }}@endisset>审核人员</option>
              <option value="2" @isset($data){{ $data['admin_type'] == 2? 'selected': '' }}@endisset>操作员</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">用户名(长度4-15位)</label>
            <input type="text" class="form-control" name="name" placeholder="" data-fv-notempty="true"
              data-fv-stringlength="true" data-fv-stringlength-max="15" data-fv-stringlength-min="4" value="@isset($data){{ $data['name'] }}@endisset">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="" data-fv-notempty="true" data-fv-emailaddress="true" value="@isset($data){{ $data['email'] }}@endisset">
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
          <button type="submit" class="btn btn-primary">创建</button>
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
