@extends('admin.base')

@section('page_title')
  编辑管理员
@endsection

@section('page_header')
  <link rel="stylesheet" href="/bower_components/form.validation/dist/css/formValidation.min.css">
@endsection

@section('sidebar')
  @include('admin.sidebar', ['active' => 'users-create'])
@endsection

@section('content')
  <section class="content-header">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb">
      <li>管理员信息</li>
      <li class="active">编辑管理员</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">编辑
          @isset($msg)<span class="alert-danger" style="margin-left:15px;">{{ $msg }}</span>@endisset</h3>
      </div>
      <form role="form" method="post" data-fv-addons="i18n">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label>管理员类型</label>
            <select class="form-control" name="admin_type">
              <option value="0" {{ $user->admin_type == 0? 'selected': '' }}>超级管理员</option>
              <option value="1" {{ $user->admin_type == 1? 'selected': '' }}>审核人员</option>
              <option value="2" {{ $user->admin_type == 2? 'selected': '' }}>操作员</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">用户名(长度4-15位)</label>
            <input type="text" class="form-control" name="name" placeholder="" data-fv-notempty="true"
              data-fv-stringlength="true" data-fv-stringlength-max="15" data-fv-stringlength-min="4" value="{{ $user->name }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="" data-fv-notempty="true" data-fv-emailaddress="true" value="{{ $user->email }}">
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
