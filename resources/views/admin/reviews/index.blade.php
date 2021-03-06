@extends('layouts.admin_layout')

@section('title','Відгуки')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Відгуки</h1>
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
    <div class="row">
            <a href="{{route('reviews.create')}}" class="nav-link ">
                    <button style = "margin-left: 14px;" type="" class="btn btn-primary">Додати</button>
            </a>
                
    </div>

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
                <th style="width: 1%; vertical-align: middle;">
                    id
                </th>
                <th style="width: 20%; vertical-align: middle;">
                    Ім'я
                </th>
                <th style="width: 20%; vertical-align: middle;">
                    Прізвище
                </th>
                
                <th style="width: 20%; vertical-align: middle;">
                    Професія
                </th>
                <th style = "vertical-align: middle;">
                    Дата публікації
                </th>
                <th style="width: 20%; vertical-align: middle;">
                    Зображення
                </th>
                <th style = "vertical-align: middle;">
                    Альтернативна назва
                </th>

                <th style="width: 8%; vertical-align: middle;">
                    Статус
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review )
            <tr>
                <td>
                    {{ $review['id'] }}
                </td>
                <td>
                    {{ $review['name'] }}
                </td>
                <td>
                    {{ $review['lastname'] }}
                </td>
                <td>
                    {{ $review['description'] }}
                </td>
                <td>
                    {{ $review['publishdate'] }}
                </td>
                <td>
                    <img src="{{url( $review['url'] )}}">
                </td>
                <td>
                    {{ $review['alt_name'] }}
                </td>
                
                <!-- <td class="project_progress">
                    
                </td> -->
                
                <td class="project-actions text-right">
                    
                    <a class="btn btn-info btn-sm" href="{{route('reviews.edit', $review['id'] )}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Редагувати
                    </a>
                </td>
                <td>
                <form action="{{route('reviews.destroy', $review['id'] )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                            <i class="fas fa-trash">
                            </i>
                            Видалити
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
