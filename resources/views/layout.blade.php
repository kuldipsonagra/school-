<!DOCTYPE html>
<html lang="en">








<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Management System</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="home" class="brand-link">
                <img src="{{ asset('school.jpg') }}" alt="Your Logo" class="brand-image img-circle elevation-2" style="opacity: .4">
                <span class="brand-text font-weight-light">SMS</span>
            </a>
            <a href="{{ url('student') }}" class="brand-link">
                <img src="{{ asset('MY PHOTO.jpg') }}" alt="Your Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
                <span class="brand-text font-weight-light pl-2">School Management</span>
            </a>


            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ url('student') }}" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Student
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('teachers') }}" class="nav-link">
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    Teacher
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('courses') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Courses
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('batches') }}" class="nav-link">
                                <i class="nav-icon fas fa-layer-group"></i>
                                <p>
                                    Batches
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('enrollments') }}" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                   Enrollment
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('payments') }}" class="nav-link">
                                <i class="nav-icon fas fa-money-bill"></i>
                                <p>
                                    Payment
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ url('timetable') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Timetable
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('exams.index') }}" class="nav-link">
                                <i class="fas fa-calendar-alt"></i>
                                <p>
                                    ExamTimetable
                                </p>
                            </a>
                        </li>




                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('header')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
