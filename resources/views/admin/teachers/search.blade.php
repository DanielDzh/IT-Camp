@extends('layouts.admin_layout')

@section('title','Викладачі')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Викладачі</h1>
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


    <div class="col-lg-14">
        <form class="form-iline my-2 my-lg-0" type="get"action="{{url('/search')}}">
            <input class="form-control mr-sm-2" name="query" type="search">
            <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
            
        </form>

    </div>
    <div class="col-lg-14">
        <button class="btn btn-danger " >
            <a href="{{route('teachers.index')}}">Назад</a>
        </button>
    </div>
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
                    Name
                </th>
                <th style="width: 20%">
                    Lastname
                </th>
                <th style="width: 20%">
                    Profession
                </th>
                <th style="width: 20%">
                    Description
                </th>
                <th style="width: 20%">
                    Imeges
                </th>
                <th>
                    Alt_name
                </th>

                <th style="width: 8%" class="text-center">
                    Status
                </th>
                <th style="width: 20%">
                </th>
            </tr>
        </thead>
        <tbody>
           
       
        @foreach($teachers as $teacher )
            <tr>
                <td>
                    {{ $teacher['id'] }}
                </td>
                <td>
                    {{ $teacher['name'] }}
                </td>
                <td>
                    {{ $teacher['lastname'] }}
                </td>
                <td>
                    {{ $teacher['profession'] }}
                </td>
                <td>
                    {{ $teacher['description'] }}
                </td>
                <td>
                    {{ $teacher['url'] }}
                </td>
                <td>
                    {{ $teacher['alt_name'] }}
                </td>
                <td class="project_progress">
                    
                </td>
                <td class="project-state">
                    <span class="badge badge-success">Success</span>
                </td>
                <td class="project-actions text-right">
                    
                    <a class="btn btn-info btn-sm" href="{{route('teachers.edit', $teacher['id'] )}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <form action="{{route('teachers.destroy', $teacher['id'] )}}" method="post">
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
