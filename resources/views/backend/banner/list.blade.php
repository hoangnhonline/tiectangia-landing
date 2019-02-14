@extends('backend.layout')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản lý banner quảng cáo
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route( 'banner.list') }}">Banner</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
      <p class="alert alert-info" >{{ Session::get('message') }}</p>
      @endif
      
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Danh sách</h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered" id="table-list-data">
            <tr>
              <th style="width: 1%">#</th>              
              <th style="width:500px">Vị trí</th>
              <th width="1%;white-space:nowrap">Thao tác</th>
            </tr>
            <tbody>
           
              <tr>
                <td><span class="order">1</span></td>                                                                           
                <td><a href="{{ route( 'banner.index', [ 'object_id' => 1, 'object_type' => 3 ]) }}" class="link_edit">Banner slide home</a></td>
                <td style="white-space:nowrap; text-align:right">                 
                  <a href="{{ route( 'banner.index', [ 'object_id' => 1, 'object_type' => 3 ]) }}" class="btn-sm btn btn-primary">Banner</a>
                </td>
              </tr> 
              <tr>
                <td><span class="order">2</span></td>                                                                           
                <td><a href="{{ route( 'banner.index', [ 'object_id' => 2, 'object_type' => 3 ]) }}" class="link_edit">Banner Home 01</a></td>
                <td style="white-space:nowrap; text-align:right">                 
                  <a href="{{ route( 'banner.index', [ 'object_id' => 2, 'object_type' => 3 ]) }}" class="btn-sm btn btn-primary">Banner</a>
                </td>
              </tr> 
              <tr>
                <td><span class="order">3</span></td>                                                                           
                <td><a href="{{ route( 'banner.index', [ 'object_id' => 3, 'object_type' => 3 ]) }}" class="link_edit">Banner Home 02</a></td>
                <td style="white-space:nowrap; text-align:right">                 
                  <a href="{{ route( 'banner.index', [ 'object_id' => 3, 'object_type' => 3 ]) }}" class="btn-sm btn btn-primary">Banner</a>
                </td>
              </tr> 
              <tr>
                <td><span class="order">4</span></td>                                                                           
                <td><a href="{{ route( 'banner.index', [ 'object_id' => 4, 'object_type' => 3 ]) }}" class="link_edit">Banner Home 03</a></td>
                <td style="white-space:nowrap; text-align:right">                 
                  <a href="{{ route( 'banner.index', [ 'object_id' => 4, 'object_type' => 3 ]) }}" class="btn-sm btn btn-primary">Banner</a>
                </td>
              </tr> 
              <tr>
                <td><span class="order">5</span></td>                                                                           
                <td><a href="{{ route( 'banner.index', [ 'object_id' =>5, 'object_type' => 3 ]) }}" class="link_edit">Banner Home 04</a></td>
                <td style="white-space:nowrap; text-align:right">                 
                  <a href="{{ route( 'banner.index', [ 'object_id' =>5, 'object_type' => 3 ]) }}" class="btn-sm btn btn-primary">Banner</a>
                </td>
              </tr>
              <tr>
                <td><span class="order">6</span></td>                                                                           
                <td><a href="{{ route( 'banner.index', [ 'object_id' =>6, 'object_type' => 3 ]) }}" class="link_edit">Banner blog</a></td>
                <td style="white-space:nowrap; text-align:right">                 
                  <a href="{{ route( 'banner.index', [ 'object_id' =>6, 'object_type' => 3 ]) }}" class="btn-sm btn btn-primary">Banner</a>
                </td>
              </tr> 
             

          </tbody>
          </table>
          <div class="col-md-12">
            <img src="{{ URL::asset('admin/dist/img/banner.png') }}" class="img-responsive">
          </div>
        </div>        
      </div>
      <!-- /.box -->     
    </div>
    <!-- /.col -->  
  </div> 
</section>
<!-- /.content -->
</div>
<style type="text/css">
  a.link_edit{
    font-size: 16px;    
  }

</style>
@stop