@extends('base')

@section('page_title')
  管理员后台
@endsection

@section('sidebar')
  @include('admin.sidebar')
@endsection

@section('content')
  <section class="content-header">
    <h1>Dashboard<small>在这里可以看到整个系统的概况</small></h1>
    <ol class="breadcrumb">
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>&nbsp;</h3>
            <p>管理员</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/admin/users" class="small-box-footer">点击查看<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>&nbsp;</h3>
            <p>数据</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">点击查看<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </section>
@endsection
