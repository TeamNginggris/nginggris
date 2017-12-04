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
        
        <form class="form-horizontal" action="{{ route('quest.update', $quest->id) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <div class="box-body">
            <div class="form-group">
              <label for="question" class="col-sm-2 control-label">Question</label>
              <div class="col-sm-10">
                <textarea name="question" id="question" class="form-control" cols="30" rows="10">{{ $quest->question }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="opsi_a" class="col-sm-2 control-label">Opsi A</label>
              <div class="col-sm-10">
                <textarea name="opsi_a" id="opsi_a" class="form-control" cols="30" rows="10">{{ $quest->opsi_a }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="opsi_b" class="col-sm-2 control-label">Opsi B</label>
              <div class="col-sm-10">
                <textarea name="opsi_b" id="opsi_b" class="form-control" cols="30" rows="10">{{ $quest->opsi_b }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="opsi_c" class="col-sm-2 control-label">Opsi C</label>
              <div class="col-sm-10">
                <textarea name="opsi_c" id="opsi_c" class="form-control" cols="30" rows="10">{{ $quest->opsi_c }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="opsi_d" class="col-sm-2 control-label">Opsi D</label>
              <div class="col-sm-10">
                <textarea name="opsi_d" id="opsi_d" class="form-control" cols="30" rows="10">{{ $quest->opsi_d }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="answer" class="col-sm-2 control-label">Answer</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="answer" id="answer" placeholder="answer" value="{{ $quest->answer }}">
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="col-sm-8 col-sm-offset-2">
              <input type="submit" class="btn btn-success" value="Save">
              <button type="button" class="btn btn-danger" onclick="top.location = '{{ route('quest.index') }}'">Back</button>
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