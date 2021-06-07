<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $navigation->getTitle() }}</title>
    <link rel="stylesheet" href="{{ mix('css/manage.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ config('app.url') }}" class="nav-link">Site</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-info-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="{{ route('logout') }}" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('manage.pages.index') }}" class="brand-link">
            {{--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
            <span class="brand-text font-weight-light ml-3">{{ config('app.name') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @foreach($navigation->getManageMenu()->all() as $item)
                        @switch($item->type)
                            @case('item')
                            <li class="nav-item">
                                <a href="{{ $item->route }}" class="nav-link {{ $item->active ? 'active' : '' }}">
                                    <i class="nav-icon {{ $item->icon }}"></i>
                                    <p>
                                        {{ $item->name }}
                                    </p>
                                </a>
                            </li>
                            @break
                            @case('header')
                            <li class="nav-header">
                                {{ $item->name }}
                            </li>
                            @break
                            @case('dropdown')
                            <li class="nav-item {{ $item->active ? 'has-treeview menu-open' : '' }}">
                                <a href="#" class="nav-link {{ $item->active ? 'active' : '' }}">
                                    <i class="nav-icon {{ $item->icon }}"></i>
                                    <p>
                                        {{ $item->name }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @foreach($item->items as $i)
                                        <li class="nav-item">
                                            <a href="{{ $i->route }}" class="nav-link {{ $i->active ? 'active' : '' }}">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>{{ $i->name }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @break;
                        @endswitch
                    @endforeach
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
                        <h1 class="m-0 text-dark">{{ $navigation->getTitle() }}</h1>
                    </div><!-- /.col -->
                    @hasSection('buttons')
                        <div class="col-sm-6">
                            <div class="float-sm-right mt-3 mt-sm-0">
                                @yield('buttons')
                            </div>
                        </div><!-- /.col -->
                    @endif
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')

                @hasSection('buttons')
                    <div class="text-left text-md-right py-3">
                        @yield('buttons')
                    </div>
                @endif
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; {{ now()->year }} <a href="{{ config('app.url') }}" class="text-black-50">{{ config('app.name') }}</a>.</strong>

        <div class="float-right d-none d-sm-inline-block">
            <span class="small text-muted text-black-50">created by <a href="https://bimsha.art" class="text-black-50" target="_blank">bimsha</a></span>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<form class="d-none" method="post" data-action-form="destroy">@method('delete')</form>

@stack('footer')
<script src="{{ mix('js/manage.js') }}"></script>
</body>
</html>
