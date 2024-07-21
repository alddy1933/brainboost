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
                                <div class="mt-3">
                                    <a href="https://tabler-icons.io" class="btn btn-primary" target="_blank" rel="noopener">Kerjakan Quiz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title d-flex alig-items-center gap-2">
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
                                    <th>Username</th>
                                    <th>Quiz Finished</th>
                                    <th>Question Finished</th>
                                    <th>Rate</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <div class="leaderboard-rank rank-1">#1</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar avatar-sm" style="background-image: url(<?= base_url();  ?>assets/tabler-template/static/avatars/000m.jpg)"></span>
                                        <span>Tessia Eralith <span class="flag flag-country-us"></span></span>
                                    </div>
                                </td>
                                <td class="text-muted">121</td>
                                <td class="text-muted">1.222</td>
                                <td class="text-muted">76.29%</td>
                            </tr>
                            <tr class="table-primary">
                                <td>
                                    <div class="leaderboard-rank rank-2">#2</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar avatar-sm" style="background-image: url(<?= base_url();  ?>assets/tabler-template/static/avatars/000m.jpg)"></span>
                                        <strong>Arthur Leywin (You) <span class="flag flag-country-id"></span></strong>
                                    </div>
                                </td>
                                <td><strong>121</strong></td>
                                <td><strong>1.222</strong></td>
                                <td><strong>76.29%</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="leaderboard-rank rank-3">#3</div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar avatar-sm" style="background-image: url(<?= base_url();  ?>assets/tabler-template/static/avatars/000m.jpg)"></span>
                                        <span>Lukas Wykes <span class="flag flag-country-pl"></span></span>
                                    </div>
                                </td>
                                <td class="text-muted">121</td>
                                <td class="text-muted">1.222</td>
                                <td class="text-muted">76.29%</td>
                            </tr>
                            <tr>
                                <td>#4</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="avatar avatar-sm" style="background-image: url(<?= base_url();  ?>assets/tabler-template/static/avatars/000m.jpg)"></span>
                                        <span>Kim Dokja <span class="flag flag-country-de"></span></span>
                                    </div>
                                </td>
                                <td class="text-muted">121</td>
                                <td class="text-muted">1.222</td>
                                <td class="text-muted">76.29%</td>
                            </tr>
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
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h2>#2</h2>
                                    <span>Current Rank</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h2>#1</h2>
                                    <span>Best Rank</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>99</h3>
                                    <small class="text-center">Quiz Finished</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>1.008</h3>
                                    <small class="text-center">Question Finished</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <h3>78%</h3>
                                    <small class="text-center">Rate</small>
                                </div>
                            </div>
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