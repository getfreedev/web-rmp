<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= ucwords($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="<?= base_url('vendor/almasaeed2010/adminlte') ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="<?= base_url('vendor/almasaeed2010/adminlte') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('vendor/almasaeed2010/adminlte') ?>/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">

                <?= $this->renderSection('auth'); ?>

            </div>
        </div>
    </div>
    <script src="<?= base_url('vendor/almasaeed2010/adminlte') ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('vendor/almasaeed2010/adminlte') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="<?= base_url('vendor/almasaeed2010/adminlte') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>