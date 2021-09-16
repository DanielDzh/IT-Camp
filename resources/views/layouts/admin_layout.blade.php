
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Адмін-панель - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  

  <link href="/admin/dist/css/colorbox.css" rel="stylesheet">



  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Адмін-панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name }}{{Auth::user()->lastname }}</a>
        </div>
      </div>

      
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('homeAdmin')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Головна
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              
              <i class="nav-icon fas fa-portrait"></i>
              <p>
                Користувачі
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link ">
                  
                  <p>Всі користувачі</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  
                  <p>Додати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Редагувати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Видалити </p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-child"></i>
             
              <p>
                Зареєстровані
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('registereds.index')}}" class="nav-link ">
                  
                  <p>Всі зареєстровані</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  
                  <p>Додати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Редагувати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Видалити </p>
                </a>
              </li>
            </ul>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link">
              
              <i class="nav-icon far fa-smile"></i>
              <p>
                Розваги
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('entertainments.index')}}" class="nav-link ">
                  
                  <p>Всі розваги</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('entertainments.create')}}" class="nav-link">
                  
                  <p>Додати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  
                  <p>Редагувати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Видалити </p>
                </a>
              </li>
            </ul>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Викладачі
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('teachers.index')}}" class="nav-link ">
                  
                  <p>Всі викладачі</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('teachers.create')}}" class="nav-link">
                  
                  <p>Додати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Редагувати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Видалити </p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              
              <i class="nav-icon fas fa-camera-retro"></i>
              <p>
                Галерея
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('photos.index')}}" class="nav-link ">
                  
                  <p>Всі зображення</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('photos.create')}}" class="nav-link">
                  
                  <p>Додати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Редагувати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Видалити </p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
            
            <i class="nav-icon far fa-newspaper"></i>
              <p>
                Відгуки
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('reviews.index')}}" class="nav-link ">
                  
                  <p>Всі відгуки</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('reviews.create')}}" class="nav-link">
                  
                  <p>Додати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Редагувати </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  
                  <p>Видалити </p>
                </a>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
<script src="https://cdn.tiny.cloud/1/1jd2hr31j0wzcypmsovv0ltdjz2mpcxkk6453txvdsd71bcj/tinymce/5/tinymce.min.js" 
referrerpolicy="origin"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
<script src="/admin/admin.js"></script>
</body>
</html>
