@extends('admin.base')

@section('page_title')
  管理员信息
@endsection

@section('page_header')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('sidebar')
  @include('admin.sidebar', ['active' => 'users-index'])
@endsection

@section('content')
  <section class="content-header">
    <h1>&nbsp;</h1>
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
              <tr class="data-{{ $u->id }}">
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->role() }}</td>
                <td>
                  <a class="btn-link" href="/admin/users/{{ $u->id }}/edit">编辑</a> |
                  <a class="btn-link" data-toggle="modal" data-target=".modal-sm-dialog" data-username="{{ $u->name }}" data-uid="{{ $u->id }}">删除</a>
                </td>
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

  <div id="alert-modal" class="modal fade modal-sm-dialog" tabindex="-1">
    <div class="modal-dialog modal-sm" role="dialog">
      <div class="modal-content">
        <div class="modal-header alert-danger">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
          <h4 class="modal-title">Modal</h4>
        </div>
        <div class="modal-body text-right">
          <button type="button" class="btn btn-danger btn-delete-user" data-uid="">删除</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page_script')
  <script>
$(function(){
  $('#alert-modal').on('show.bs.modal', function(e){
    var o = $(e.relatedTarget),
        uid = o.data('uid'),
        name = o.data('username'),
        modal = $(this);
    modal.find('.modal-title').text('确认删除管理员 ' + name + ' ?');
    modal.find('.btn-delete-user').data('uid', uid);
  });

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.btn-delete-user').on('click', function(e){
    var id = $(this).data('uid');
    $.post('/admin/users/' + id + '/delete', {}, function(d){
      $('tr.data-' + id).fadeOut();
      $('#alert-modal').modal('hide');
    });
  });
})
  </script>
@endsection
