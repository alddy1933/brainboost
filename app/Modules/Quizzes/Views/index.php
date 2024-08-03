<?= $this->extend('\App\Views\template\base') ?>

<?= $this->section('css'); ?>
<style>
    a.category-link {
        color: black;
        text-decoration: none;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Quizzes
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card card-md">
                    <div class="card-stamp card-stamp-lg">
                        <div class="card-stamp-icon bg-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                <line x1="10" y1="10" x2="10.01" y2="10" />
                                <line x1="14" y1="10" x2="14.01" y2="10" />
                                <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="h1">Event Haloween Sedang Dimulai!</h3>
                                <div class="markdown text-muted">
                                    <span>Ikuti setiap quiz untuk mendapatkan point 2x lebih banyak</span><br>
                                    <strong>Quiz berakhir dalam 03 hari 02 jam 04 menit 03 detik</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-md">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="h1">Create Question !</h3>
                                <div class="markdown text-muted">
                                    <span>You can create your own custom question to share to another player !</span>
                                </div>
                                <div class="mt-3">
                                    <a href="<?= base_url("quizzes/create") ?>" class="btn btn-primary">Create Question</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                Category
            </div>
            <?php foreach ($category as $ct) { ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <a href="<?= base_url("quizzes/quiz/$ct->slug") ?>" class="category-link">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="text-white avatar" style="background-color: <?= $ct->icon_bg_colour ?>;">
                                                <?= $ct->icon ?>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?= $ct->category_name ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right text-muted">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12l14 0" />
                                            <path d="M15 16l4 -4" />
                                            <path d="M15 8l4 4" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>