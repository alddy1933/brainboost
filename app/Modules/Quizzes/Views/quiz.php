<?= $this->extend('\App\Views\template\base_without_nav') ?>

<?= $this->section('css'); ?>
<style>
    .spinner-overlay {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="page-body" id="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-10 order-md-1 order-2">
                <div class="card card-md">
                    <div class="card-body" id="question-body">
                    </div>
                </div>
            </div>
            <div class="col-md-2 order-md-2 order-1 mb-2">
                <div class="card card-md">
                    <div class="card-header">
                        <div class="card-title">Timer</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h1>09:56</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
    var spinner = `
    <div class="spinner-overlay my-3" id="spinner-overlay">
        <div class="spinner-border text-primary" role="status"></div>
        <h3 class="text-primary">Generating question...</h3>
    </div>
    `

    $(document).ready(function() {
        generateNewQuestion();
    })

    function generateNewQuestion() {
        $("#question-body").html(spinner)
        $.ajax({
            url: "<?= base_url('question/generate') ?>",
            method: "POST",
            dataType: "json",
            success: (response) => {
                let html = ``;

                html += `
                    <h3 class="mb-3">${response.question}</h3>
                    `

                response.answer_options.map(item => {
                    html += `
                        <div class="card card-sm mb-2">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-30">
                                        <input class="form-check-input m-0" type="checkbox" style="width: 20px; height: 20px;" />
                                    </div>
                                    <span>${item}</span>
                                </div>
                            </div>
                        </div>
                        `
                })

                html += `
                <div class="w-100 d-flex justify-content-end mt-3">
                    <button class="btn btn-primary" onclick="generateNewQuestion()">Next</button>
                </div>
                `

                $("#question-body").html(html)
            }
        })
    }
</script>
<?= $this->endSection(); ?>