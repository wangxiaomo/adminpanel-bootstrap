@extends('admin.base')

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
    <img src="/images/admin/gintama.jpg" width="85%" />
  </section>
@endsection
