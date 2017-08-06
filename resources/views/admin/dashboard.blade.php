@extends('base')

@section('page_title')
  管理员后台
@endsection

@section('sidebar')
  @include('admin.sidebar')
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
