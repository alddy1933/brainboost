<?= $this->extend('\App\Views\template\base') ?>

<?= $this->section('css'); ?>
<style>
    .leaderboard-rank {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        font-size: 12px;
    }

    .rank-1 {
        background-color: #FFD700;
    }

    .rank-2 {
        background-color: #C0C0C0;
    }

    .rank-3 {
        background-color: #cd7f32;
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
                    Dashboard
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
                                    <div class="mt-3">
                                        <a href="<?= base_url("quizzes") ?>" class="btn btn-primary">Get Quiz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-crown">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z" />
                            </svg>
                            <span>Leaderboard</span>
                        </h3>
                    </div>
                    <div class="card-table table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Full Name</th>
                                    <th>Quiz Finished</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($leaderboard as $index => $lb) {
                                ?>
                                    <tr class="<?= $lb->full_name == session()->get('full_name') ? 'table-primary' : '' ?>">
                                        <td>
                                            <div class="leaderboard-rank rank-<?= $lb->rank; ?>">#<?= $lb->rank; ?></div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="avatar avatar-sm" style="background-image: url(<?= base_url();  ?>img/avatar/<?= $lb->img  ?>)"></span>
                                                <span><?= $lb->full_name; ?> <?= $lb->full_name == session()->get('full_name') ? '(You)' : '' ?></span>
                                            </div>
                                        </td>
                                        <td class="text-muted"><?= $lb->quiz_finished ?></td>
                                        <td class="text-muted"><?= $lb->total ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-dots">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 3v18h18" />
                                <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M10.16 10.62l2.34 2.88" />
                                <path d="M15.088 13.328l2.837 -4.586" />
                            </svg>
                            <span>My Statistic</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mt-3 mb-4">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h1><sup>#</sup><span style="font-size:50px;"><?= $rank?></span></h2>
                                    <span>Current Rank</span>
                                </div>
                            </div>
                            <!-- <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h2>#1</h2>
                                    <span>Best Rank</span>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h1><?= $stats['quiz_taken'] ?></h1>
                                    <small class="text-center">Quiz Finished</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h1><?= $stats['question_taken'] ?></h1>
                                    <small class="text-center">Question Finished</small>
                                </div>
                            </div>
                            <!-- <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>78%</h3>
                                    <small class="text-center">Rate</small>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>