@extends('layouts.admin_layout')

@section('title','Edit entertainments')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit entertainments :{{$entertainments['description']}}</h1>
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
              
              <form action="{{route('entertainments.update', $entertainments['id'])}}" method="post">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Опис розваги</label>
                    <input type="text" value="{{$entertainments['description']}}" name="description" class="form-control" id="text" placeholder="Опис розваги" required>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Назва зображення</label>
                    <input type="text" value="{{$entertainments['alt_name']}}" name="alt_name" class="form-control" id="text" placeholder="Назва зображення" required>
                  </div> -->
                  <div class="form-group">
                        <label for="exampleInputEmail1">Alt_name</label>
                        <textarea name="alt_name" class="editor">{{$entertainments['alt_name']}}</textarea>
                     </div>

                  <div class="form-group">
                        <label for="feature_image">Додати зображення</label>
                        <input type="text" name="url" value="{{$entertainments['url']}}" id="feature_image"class="form-control" name="feature_image" value="" readonly>
                        <img src="{{$entertainments['url']}}" alt=""  class="img-uploaded" > 
                        <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                    </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="row">
            <a href="{{route('entertainments.index')}}" class="nav-link ">
                    <div class="card-footer">
                    <button type="" class="btn btn-primary">Всі розваги</button>
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
