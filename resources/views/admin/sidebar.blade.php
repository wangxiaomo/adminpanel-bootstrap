@if (request()->admin_user->admin_type == \App\Models\AdminUser::SUPER_ADMIN)
  <section class="sidebar">
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="active"><a href="/admin"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-group"></i><span>管理员管理</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu" style="display:none">
          <li><a href="/admin/users"><i class="fa fa-circle-o"></i>管理员信息</a></li>
          <li><a href="/admin/users/create"><i class="fa fa-circle-o"></i>新建管理员</a></li>
        </ul>
      </li>
    </ul>
  </section>
@else
  2
@endif
