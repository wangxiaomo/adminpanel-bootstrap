@extends('admin.base')

@section('page_title')
  用户列表
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
                <td>{{ $u->status() }}</td>
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
