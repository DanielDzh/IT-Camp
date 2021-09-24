@extends('layouts.admin_layout')

@section('title','Редагувати користувача')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Edit users :{{$users['name']}}</h1>
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
              <form action="{{route('users.update', $users['id'])}}" method="post">
                  @csrf
                  @method('PUT')
                <div class="card-body">

                 <div class="form-group">
                    <label for="exampleInputEmail1">Ім'я</label>
                    <input type="text" value="{{$users['name']}}" name="name" class="form-control" id="text" placeholder="Ім'я" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Прізвище</label>
                    <input type="text" value="{{$users['lastname']}}" name="lastname" class="form-control" id="text" placeholder="Прізвище" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Пошта</label>
                    <input type="text" value="{{$users['email']}}" name="profession" class="form-control" id="text" placeholder="Пошта" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Телефон</label>
                    <input type="text" value="{{$users['phone']}}" name="description" class="form-control" id="text" placeholder="Телефон" required>
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Оновити</button>
                </div>
              </form>
            </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div style = "margin-left: 20px;" class="row">
            <a href="{{route('users.index')}}" class="nav-link ">
                    <!-- <div class="card-footer"> -->
                    <button type="" class="btn btn-primary">Всі користувачі</button>
                    <!-- </div> -->
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
