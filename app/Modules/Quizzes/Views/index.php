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
            <?php if ($event != '') { ?>
                <div class="col-12">
                    <div class="card card-md">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-speakerphone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M18 8a3 3 0 0 1 0 6" />
                                    <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5" />
                                    <path d="M12 8h0l4.524 -3.77a.9 .9 0 0 1 1.476 .692v12.156a.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <h3 class="h1"><?= $event->events_name ?> event is on going !</h3>
                                    <div class="markdown text-muted">
                                        <span>Finish quiz with <?= $event->points_up ?>x points up</span><br>
                                        <strong>Event finished at <?= $event->expired_at ?></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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