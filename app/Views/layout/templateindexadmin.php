<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/jqvmap/jqvmap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/daterangepicker/daterangepicker.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/summernote/summernote-bs4.min.css') ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">


    <!-- CodeMirror -->
    <link rel="stylesheet" href="<?php echo base_url('assets/codemirror/codemirror.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/codemirror/theme/monokai.css') ?>">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="<?php echo base_url('assets/simplemde/simplemde.min.css') ?>">
    <script src="<?= base_url('assets/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://edulab.co.id/wp-content/uploads/2019/01/LogoEdulab.png" alt="EdulabLogo" height="60" width="60">
        </div>
        <class>
            <!-- Navbar -->
            <?= $this->include('layout/navbar'); ?>
            <!-- Sidebar -->
            <?= $this->include('layout/sidebaradmin'); ?>

            <!-- MAIN CONTENT HERE -->
            <?= $this->renderSection('content'); ?>

            <!-- FOOTER -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                </div>
                <strong>Copyright &copy; 2021 <a>Edulab</a>.</strong>
                All rights reserved.
            </footer>
            <!-- FILE -->
            <script src="<?= base_url('assets/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
            <script>
                $(function() {
                    bsCustomFileInput.init();
                });
            </script>
            <script>
                $(".fileSelection1 #Select_File1").click(function(e) {
                    document.getElementsByName('anggota_id')[0].value = $(this).attr("data_id");
                    $('#TableAnggota').modal('hide');
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('transaksi/result'); ?>",
                        data: 'kode_anggota=' + $(this).attr("data_id"),
                        beforeSend: function() {
                            $("#result").html("");
                            $("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
                        },
                        success: function(html) {
                            $("#result").html(html);
                            $("#result_tunggu").html('');
                        }
                    });
                });
            </script>

            <script>
                $(".fileSelection1 #Select_File2").click(function(e) {
                    document.getElementsByName('buku_id')[0].value = $(this).attr("data_id");
                    $('#TableBuku').modal('hide');
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('transaksi/buku'); ?>",
                        data: 'kode_buku=' + $(this).attr("data_id"),
                        beforeSend: function() {
                            $("#result_buku").html("");
                            $("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
                        },
                        success: function(html) {
                            $("#result_buku").load("<?= base_url('transaksi/buku_list'); ?>");
                            $("#result_tunggu_buku").html('');
                        }
                    });
                });
            </script>
            <!-- jQuery -->
            <script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
            <!-- Bootstrap 4 -->
            <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js') ?>"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Sparkline -->
            <script src="<?php echo base_url('assets/sparklines/sparkline.js') ?>"></script>

            <!-- DataTables  & Plugins -->
            <script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
            <script src="<?= base_url('assets/jszip/jszip.min.js') ?>"></script>
            <script src="<?= base_url('assets/pdfmake/pdfmake.min.js') ?>"></script>
            <script src="<?= base_url('assets/pdfmake/vfs_fonts.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-buttons/js/buttons.print.min.js') ?>"></script>
            <script src="<?= base_url('assets/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
            <script>
                $(function() {
                    bsCustomFileInput.init();
                });
            </script>
            <script>
                $(function() {
                    // Summernote
                    $('#summernote').summernote()

                    // CodeMirror
                    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                        mode: "htmlmixed",
                        theme: "monokai"
                    });
                })
            </script>
            <!-- AdminLTE App -->
            <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?= base_url('assets/js/demo.js') ?>"></script>
            <!-- Page specific script -->
            <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
            </script>
</body>

</html>