@extends('base')

@section('page_title')
  管理员信息
@endsection

@section('sidebar')
  @include('admin.sidebar', ['active' => 'users-index'])
@endsection

@section('content')
  <section class="content-header">
    <h1>管理员信息管理</h1>
    <ol class="breadcrumb">
      <li>管理员信息</li>
      <li class="active">管理员信息管理</li>
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
              <th>用户类型</th>
              <th>操作</th>
            </tr>
            @foreach($users as $u)
              <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->role() }}</td>
                <td>
                  <a class="btn-link" href="/admin/users/{{ $u->id }}/edit">编辑</a> |
                  <a class="btn-link">删除</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection
