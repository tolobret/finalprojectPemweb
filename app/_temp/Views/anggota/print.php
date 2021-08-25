<!DOCTYPE html>
<html>
<!--  -->

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('fontawesome-free/css/all.min.css') ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('css/adminlte.min.css') ?>">
    <title>Cetak Kartu</title>
    <style>
        body {
            background: rgba(0, 0, 0, 0.2);
        }

        page[size="A4"] {
            background: white;
            width: 21cm;
            height: 29.7cm;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5pc;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            padding-left: 2.54cm;
            padding-right: 2.54cm;
            padding-top: 1.54cm;
            padding-bottom: 1.54cm;
        }

        @media print {

            body,
            page[size="A4"] {
                margin: 0;
                box-shadow: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <br />
    </div>
    <br />
    <div id="printableArea">
        <page size="A4">
            <div class="panel panel-default">
                <div class="panel-body bg-primary">
                    <h4 class="text-center">KARTU ANGGOTA PERPUSTAKAAN</h4>
                    <br />
                    <div class="row">
                        <div class="col-sm-8">
                            <table class="table table-stripped">
                                <tr>
                                    <td>ID Anggota</td>
                                    <td>:</td>
                                    <td>AG001</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>Fawwaz Kumudani Widyadhana</td>
                                </tr>
                                <tr>
                                    <td>TTL</td>
                                    <td>:</td>
                                    <td>Ponorogo, 10 Januari 2001</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Ponorogo</td>
                                </tr>
                                <tr>
                                    <td>Tgl Bergabung</td>
                                    <td>:</td>
                                    <td>20 November 2019</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-4 text-center">

                            <img src="https://siakad.ub.ac.id/dirfoto/foto/foto_2019/195150407111008.jpg" style="width:3cm;height:4cm;" class="img-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </page>
    </div>
</body>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

</html>