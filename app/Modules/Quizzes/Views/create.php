<?= $this->extend('\App\Views\template\base') ?>

<?= $this->section('css'); ?>
<style>
    .category-box {
        max-height: 350px;
        overflow-y: auto;
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
                    Quizzes
                </div>
                <h2 class="page-title">
                    Create Quiz
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<form action="<?= base_url('quizzes/create') ?>" method="post" enctype="multipart/form-data">
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Image <small class="text-muted">(optional)</small></label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Question</label>
                                <textarea class="form-control" name="question" placeholder="Input your question here"></textarea>
                            </div>

                            <label class="mb-2">Answer Options</label>

                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    A
                                </span>
                                <textarea class="form-control" name="answer_option_1"></textarea>
                                <span class="input-group-text">
                                    <input class="form-check-input m-0" type="radio" name="option_1_correctness" value="Y" />
                                </span>
                            </div>

                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    B
                                </span>
                                <textarea class="form-control" name="answer_option_2"></textarea>
                                <span class="input-group-text">
                                    <input class="form-check-input m-0" type="radio" name="option_2_correctness" value="Y" />
                                </span>
                            </div>

                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    C
                                </span>
                                <textarea class="form-control" name="answer_option_3"></textarea>
                                <span class="input-group-text">
                                    <input class="form-check-input m-0" type="radio" name="option_3_correctness" value="Y" />
                                </span>
                            </div>

                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    D
                                </span>
                                <textarea class="form-control" name="answer_option_4"></textarea>
                                <span class="input-group-text">
                                    <input class="form-check-input m-0" type="radio" name="option_4_correctness" value="Y" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                        </div>
                        <div class="card-body">
                            <div class="category-box">
                                <?php foreach ($category as $ct) { ?>
                                    <div class="card card-sm mb-2">
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
                                                    <input class="form-check-input m-0" type="checkbox" name="category" value="<?= $ct->category_id ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail-fast">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7h3" />
                        <path d="M3 11h2" />
                        <path d="M9.02 8.801l-.6 6a2 2 0 0 0 1.99 2.199h7.98a2 2 0 0 0 1.99 -1.801l.6 -6a2 2 0 0 0 -1.99 -2.199h-7.98a2 2 0 0 0 -1.99 1.801z" />
                        <path d="M9.8 7.5l2.982 3.28a3 3 0 0 0 4.238 .202l3.28 -2.982" />
                    </svg>
                    Send Quiz
                </button>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>