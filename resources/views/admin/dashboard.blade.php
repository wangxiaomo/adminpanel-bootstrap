@extends('base')

@section('page_title')
  管理员后台
@endsection

@section('sidebar')
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
@endsection

@section('content')
  <section class="content-header">
    <h1>Page Header<small>Optional description</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <section class="content container-fluid">
    | Your Page Content Here |
  </section>
@endsection
