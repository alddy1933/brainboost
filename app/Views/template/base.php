<?php
$uri = service('uri');
$menu = $uri->getSegment(1);
?>
<html lang="en">

<head>
    <?= $this->include('\App\Views\template\partial\header') ?>
    <?php $this->renderSection('css'); ?>
</head>

<body>
    <script src="<?= base_url(); ?>assets/tabler-template/dist/js/demo-theme.min.js?1668287865"></script>
    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="<?= base_url(); ?>assets/img/logo/brainboost-logo.png" height="40">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm">
                                <img id="imgNavbar" class="card-img-top" src="<?= base_url() . "img/avatar/" . getBiodata(session()->get('username'))->img  ?>" alt="Card image cap">
                            </span>
                            <div class="d-none d-xl-block ps-2">
                                <div><?= session()->get('full_name') ?></div>
                                <div class="mt-1 small text-muted"><?= session()->get('username') ?></div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="<?= base_url("profile") ?>" class="dropdown-item">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url("auth/sign_out") ?>" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar navbar-light">
                    <div class="container-xl">
                        <ul class="navbar-nav">
                            <li class="nav-item <?= $menu == "dashboard" ? "active" : "" ?>">
                                <a class="nav-link" href="<?= base_url("dashboard") ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Dashboard
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?= $menu == "quizzes" ? "active" : "" ?>">
                                <a class="nav-link" href="<?= base_url("quizzes") ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 11 12 14 20 6" />
                                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Quizzes
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?= $menu == "profile" ? "active" : "" ?>">
                                <a class="nav-link" href="<?= base_url("profile") ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Profile
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?= $menu == "events" ? "active" : "" ?>">
                                <a class="nav-link" href="<?= base_url("events") ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pacman">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5.636 5.636a9 9 0 0 1 13.397 .747l-5.619 5.617l5.619 5.617a9 9 0 1 1 -13.397 -11.981z" />
                                            <circle cx="11.5" cy="7.5" r="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Events
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">

            <?php $this->renderSection('content'); ?>

            <?= $this->include('\App\Views\template\partial\footer') ?>
        </div>
    </div>

    <?= $this->include('\App\Views\template\partial\js') ?>
    <?php $this->renderSection('javascript'); ?>
</body>

</html>