<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="<?= base_url(); ?>assets/tabler-template/dist/css/tabler.min.css?1668287865" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/tabler-template/dist/css/tabler-flags.min.css?1668287865" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/tabler-template/dist/css/tabler-payments.min.css?1668287865" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/tabler-template/dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/tabler-template/dist/css/demo.min.css?1668287865" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
    </style>

    <?php $this->renderSection('css'); ?>
</head>

<body>
    <div class="page">
        <div class="page-wrapper">

            <?php $this->renderSection('content'); ?>

            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2024
                                    <a href="#" class="link-secondary">BrainBoost</a>.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/tabler-template/dist/libs/apexcharts/dist/apexcharts.min.js?1668287865" defer></script>
    <script src="<?= base_url(); ?>assets/tabler-template/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1668287865" defer></script>
    <script src="<?= base_url(); ?>assets/tabler-template/dist/libs/jsvectormap/dist/maps/world.js?1668287865" defer></script>
    <script src="<?= base_url(); ?>assets/tabler-template/dist/libs/jsvectormap/dist/maps/world-merc.js?1668287865" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/tabler-template/dist/js/tabler.min.js?1668287865" defer></script>
    <script src="<?= base_url(); ?>assets/tabler-template/dist/js/demo.min.js?1668287865" defer></script>
    <script src="<?= base_url(); ?>assets/js/jquery-3.7.1.min.js"></script>
    <?php $this->renderSection('javascript'); ?>
</body>

</html>