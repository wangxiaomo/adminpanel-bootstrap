@php
  $active = empty($active)?'dashboard':$active;
  $r = explode('-', $active);
  $parent = $r[0];
  $item = count($r) > 1?$r[1]:'';
@endphp

{{ $active }}

@if (request()->admin_user->admin_type == \App\Models\AdminUser::SUPER_ADMIN)
  <section class="sidebar">
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="{{ $parent == 'dashboard'?'active':'' }}"><a href="/admin"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li class="treeview {{ $parent == 'users'?'active':'' }}">
        <a href="#"><i class="fa fa-group"></i><span>管理员管理</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu" style="{{ $parent == 'users'? '':'display:none' }}">
          <li class="{{ $item == 'index'?'active':'' }}"><a href="/admin/users"><i class="fa fa-circle-o"></i>管理员信息</a></li>
          <li class="{{ $item == 'create'?'active':'' }}"><a href="/admin/users/create"><i class="fa fa-circle-o"></i>新建管理员</a></li>
        </ul>
      </li>
    </ul>
  </section>
@else
  2
@endif
