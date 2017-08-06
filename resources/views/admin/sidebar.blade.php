@if (request()->admin_user->admin_type == \App\Models\AdminUser::SUPER_ADMIN)
  <section class="sidebar">
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">Header</li>
      <li class="active"><a href="#"><i class="fa fa-link"></i><span>link</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i><span>Multi</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu" style="display:none">
          <li><a href="#">link</a></li>
          <li><a href="#">link</a></li>
        </ul>
      </li>
    </ul>
  </section>
@else
  2
@endif
