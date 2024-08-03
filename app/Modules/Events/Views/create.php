<?= $this->extend('\App\Views\template\base') ?>

<?= $this->section('css'); ?>
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
                    Create Events
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('events/store') ?>" method="post">
                            <div class="mb-3">
                                <label class="form-label">Event Name</label>
                                <input type="text" class="form-control" name="event_name" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Points Up</label>
                                <input type="number" class="form-control" name="points_up" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Expired At</label>
                                <input type="datetime-local" class="form-control" name="expired_at" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Publish</label>
                                <input class="form-check-input m-0" name="publish" type="checkbox" value="Y" />
                            </div>
                            <div class="w-100 d-flex justify-content-center gap-2 mt-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="<?= base_url('events') ?>" class="btn btn-danger">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>