<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/admin') }}/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/summernote/summernote-bs4.min.css">
    @if ($isMenuActive == 'penyewaan' || $isMenuActive == 'ruko')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ url('assets/admin/plugins') }}/datatables-buttons/css/buttons.bootstrap4.min.css">
    @endif
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('components.navbar')
        @include('components.sidebar')
        @yield('content')
        @include('components.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('assets/admin/plugins') }}/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('assets/admin/plugins') }}/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('assets/admin/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('assets/admin/plugins') }}/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ url('assets/admin/plugins') }}/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ url('assets/admin/plugins') }}/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('assets/admin/plugins') }}/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('assets/admin/plugins') }}/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ url('assets/admin/plugins') }}/moment/moment.min.js"></script>
    <script src="{{ url('assets/admin/plugins') }}/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('assets/admin/plugins') }}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ url('assets/admin/plugins') }}/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('assets/admin/plugins') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    @if ($isMenuActive == 'penyewaan' || $isMenuActive == 'ruko')
        <!-- DataTables  & Plugins -->
        <script src="{{ url('assets/admin/plugins') }}/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/jszip/jszip.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/pdfmake/pdfmake.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/pdfmake/vfs_fonts.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ url('assets/admin/plugins') }}/datatables-buttons/js/buttons.colVis.min.js"></script>
    @endif
    <!-- AdminLTE App -->
    <script src="{{ url('assets/admin') }}/js/adminlte.js"></script>
    @stack('scripts')
</body>

</html>
