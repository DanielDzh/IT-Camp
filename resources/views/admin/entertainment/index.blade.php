@extends('layouts.admin_layout')

@section('title','Всі розваги')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Всі розваги</h1>
          </div><!-- /.col -->
          @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" date-dismiss="alert" aria-hidden="true"></button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif



        </div><!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-lg-12">
        <section class="content">

<!-- Default box -->
<div class="card">
  
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    id
                </th>
                <th style="width: 20%">
                    Description
                </th>
                <th style="width: 30%">
                    Imeges
                </th>
                <th>
                    Alt_name
                </th>

                <th style="width: 8%" class="text-center">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($entertainments as $entertainment )
            <tr>
                <td>
                    {{ $entertainment['id'] }}
                </td>
                <td>
                    {{ $entertainment['description'] }}
                </td>
                <td>
                    {{ $entertainment['url'] }}
                </td>
                <td>
                    {{ $entertainment['alt_name'] }}
                </td>
                <!-- <td class="project_progress">
                    
                </td> -->
                <td class="project-state">
                    <span class="badge badge-success">Success</span>
                </td>
                <td class="project-actions text-right">
                    
                    <a class="btn btn-info btn-sm" href="{{route('entertainments.edit', $entertainment['id'] )}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                </td>
                <td>
                    <form action="{{route('entertainments.destroy', $entertainment['id'] )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </button>

                    </form>
                    
                </td>
            </tr>


            @endforeach
            
            
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>

        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @endsection
