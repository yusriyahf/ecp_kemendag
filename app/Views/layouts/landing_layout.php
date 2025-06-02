<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECP Kemendag</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('landing/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/jquery-ui.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('landing/css/style.css') ?>" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?= view('partials/landing/humberger') ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?= view('partials/landing/header') ?>
    <!-- Header Section End -->




    <?= $this->renderSection('content') ?>


    <!-- Footer Section Begin -->
    <?= view('partials/landing/footer') ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?= base_url('landing/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('landing/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('landing/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('landing/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('landing/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('landing/js/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('landing/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('landing/js/main.js') ?>"></script>



</body>

</html>