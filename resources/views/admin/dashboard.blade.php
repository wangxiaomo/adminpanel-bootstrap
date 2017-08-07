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
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">93,139</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
