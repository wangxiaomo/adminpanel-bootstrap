@extends('admin.base')

@section('page_title')
  用户列表
@endsection

@section('page_header')
  <style>
.btn-filter-user-status {
  height: 30px; padding-top: 3px; margin-right: 5px;
}
  </style>
@endsection

@section('sidebar')
  @include('admin.sidebar', ['active' => 'ants.index'])
@endsection

@section('content')
  <section class="content-header">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb">
      <li>用户管理</li>
      <li class="active">用户列表</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">用户列表</h3>
        <div class="box-tools">
          <div class="btn-group pull-left">
            <button class="btn btn-default btn-filter-user-status dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              {{ $status == -1? '全部显示': ($status == 1? '已审核用户': '未审核用户') }}
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="/admin/ants">全部显示</a></li>
              <li><a href="/admin/ants?status=0">未审核用户</a></li>
              <li><a href="/admin/ants?status=1">已审核用户</a></li>
            </ul>
          </div>
          <div class="input-group input-group-sm" style="width:150px;">
            <input type="text" name="q" class="form-control pull-right" placeholder="Search" />
            <div class="input-group-btn"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button></div>
          </div>
        </div>
      </div>
      <div class="box-body no-padding">
        <table class="table">
          <tbody>
            <tr>
              <th>#</th>
              <th>用户名</th>
              <th>Email</th>
              <th>openid</th>
              <th>积分</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
            @foreach($users as $u)
              <tr class="data-{{ $u->id }}">
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->openid? $u->openid: '未绑定' }}</td>
                <td>{{ $u->score }}</td>
                <td>
                  <span class="label {{ $u->status?'label-success':'label-warning' }}">
                    {{ $u->status() }}
                  </span>
                </td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          {{ $users->links('mods.pagination') }}
        </ul>
      </div>
    </div>
  </section>
@endsection
