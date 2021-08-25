<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <style>
        body {
            background-image: url(background.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.min.css') ?>" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/icheck-bootstrap/icheck-bootstrap.min.css') ?>" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css') ?>" />
</head>

<?= $this->renderSection('content'); ?>

<!-- jQuery -->
<script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('js/adminlte.min.js') ?>"></script>
</body>

</html>