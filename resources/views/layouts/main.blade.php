<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Form Detail | IT Dept</title>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS Link-->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <!--JS Link-->
    <script src="{{url('assets/js/main.js')}}" defer></script>
    <!--Script Font Awseome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Link CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <div class="img-logo">
                <img src="{{ asset('/assets/img/loka4.png') }}" alt="">
            </div>
            <span class="logo_name">IT DEPT</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="./dashboard.html">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-stats'></i>
                        <span class="link_name">Troubleshoot</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('troubleshoot.index')}}">Troubleshoot</a></li>
                    <li><a href="{{ route('troubleshoot.index') }}">Troubleshoot List</a></li>
                    <li><a href="{{ route('troubleshoot.create')}}">New Troubleshoot</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-wrench'></i>
                        <span class="link_name">Maintenance</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('maintenance.index')}}">Maintenance</a></li>
                    <li><a href="{{ route('maintenance.index')}}">Maintenance List</a></li>
                    <li><a href="{{ route('maintenance.create')}}">New Maintenance</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-bar-chart-square'></i>
                        <span class="link_name">Project</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('project.index')}}">Project</a></li>
                    <li><a href="{{ route('project.index')}}">Project List</a></li>
                    <li><a href="{{ route('project.create')}}">New Project</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-report' ></i>
                        <span class="link_name">WO</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href={{ route('woin.index')}}>WO</a></li>
                    <li><a href={{ route('woin.index')}}>WO In</a></li>
                    <li><a href={{ route('woout.index')}}>WO Out</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-server'></i>
                        <span class="link_name">Inventaris</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('laptop.index')}}">Inventaris</a></li>
                    <li><a href="{{ route('laptop.index')}}">Laptop</a></li>
                    <li><a href="{{ route('pc.index')}}">PC</a></li>
                    <li><a href="{{ route('pcpos.index')}}">PC Pos</a></li>
                    <li><a href="{{ route('mobile.index')}}">Mobile</a></li>
                    <li><a href="{{ route('printer.index')}}">Printer</a></li>
                    <li><a href="{{ route('otg.index')}}">OTG</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-detail'></i>
                        <span class="link_name">Administrasi System dan Aplikasi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('analisa.index')}}">Administrasi System dan Aplikasi</a></li>
                    <li><a href="{{ route('analisa.index')}}">Form Analisa</a></li>
                    <li><a href="{{ route('uat.index')}}">Form UAT</a></li>
                    <li><a href="{{ route('improvement.index')}}">Form Improvement</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-user'></i>
                        <span class="link_name">User</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="{{ route('user.index')}}">User</a></li>
                    <li><a href="{{ route('user.index')}}">User List</a></li>
                    <li><a href="{{ route('user.create')}}">New User</a></li>
                </ul>
            </li>
        </ul>
    </div>

        {{-- Navbar --}}
        @include('layouts.navbar')
         <!-- Isi disini -->
        @yield('isi')
        <!-- isi disini end -->
<!--Link JS Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('sweetalert::alert')
@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>

    {{ Session::forget('sweet_alert.alert') }}    // This will forget the alert data after displaying it :)
@endif
</body>
</html>
