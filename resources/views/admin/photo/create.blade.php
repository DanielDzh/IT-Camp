@extends('layouts.admin_layout')

@section('title','Додати картинку')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Додати картинку</h1>
          </div><!-- /.col -->
           



        </div><!-- /.row -->
        @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" date-dismiss="alert" aria-hidden="true"></button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-lg-12">
        <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('photos.store')}}" method="post">
                  @csrf
                <div class="card-body">
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Назва зображення</label>
                    <input type="text" name="alt_name" class="form-control" id="text" placeholder="Назва зображення" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Додати зображення</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="url" class="custom-file-input" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Виберіть зображення</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Переглянути</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Додати</button>
                </div>
              </form>
            </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="row">
            <a href="{{route('photos.index')}}" class="nav-link ">
                    <div class="card-footer">
                    <button type="" class="btn btn-primary">Всі картинки</button>
                    </div>
                </a>
          </div>
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
