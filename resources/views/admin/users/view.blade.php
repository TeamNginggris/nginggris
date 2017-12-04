@extends('admin.layouts.app')

@section('title', 'Admin G-Dev')

@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        G-Dev
        <small>Awesome</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Users</h3>
        </div>
        <div class="box-body">
          <table id="myTable" class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>E-mail</th>
              <th>Status</th>
              <th>Tgl Daftar</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td><b>{{ $user->status? 'Premium' : 'Reguler' }}</b></td>
                  <td>{{ $user->created_at }} ( {{ $user->created_at->diffForHumans() }} )</td>
                  <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
                  </td>

                  <td>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="post" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a href=""
                    onclick="
                    if(confirm('Are you sure, You want to delete this?'))
                    {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $user->id }}').submit();
                    } else {
                      event.preventDefault();
                    }"
                    class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        {{-- <div class="box-footer">
          Footer
        </div> --}}
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('footerSection')
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#myTable').DataTable()
  })
</script>
@endsection