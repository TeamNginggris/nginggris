@extends('admin.layouts.app')

@section('title', 'Admin G-Dev')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sidebar Collapsed
        <small>Layout with collapsed sidebar on load</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Collapsed Sidebar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Update Data Users</h3>
        </div>
        
        <form class="form-horizontal" action="{{ route('users.update', $users->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="box-body">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="name" placeholder="Name" value="@if (old('name')){{ old('name') }}@else{{ $users->name }}@endif" readonly="">
              </div>
            </div>

            <div class="form-group">
              <label for="E-mail" class="col-sm-2 control-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="E-mail" placeholder="E-mail" value="@if (old('email')){{ old('email') }}@else{{ $users->email }}@endif" readonly="">
              </div>
            </div>

            <div class="form-group">
              <label for="status" class="col-sm-2 control-label">Status</label>
              <div class="col-sm-10">
                <label for="radio1">
                  <input type="radio" name="status" id="radio1" value="0"> Reguler
                </label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="radio2">
                  <input type="radio" name="status" id="radio2" value="1"> Premium
                </label>
                
              </div>
            </div>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="col-sm-8 col-sm-offset-2">
              <input type="submit" class="btn btn-success" value="Save">
              <button type="button" class="btn btn-danger" onclick="top.location = '{{ route('users.index') }}'">Back</button>
            </div>
          </div>
          <!-- /.box-footer -->
        </form>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection