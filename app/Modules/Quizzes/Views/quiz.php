<?= $this->extend('\App\Views\template\base_without_nav') ?>

<?= $this->section('css'); ?>
<style>
    .spinner-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background-color: rgba(0, 0, 0, 0);
        /* Semi-transparent background */
        z-index: 1050;
        /* High z-index to ensure it overlays other content */
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="page-body d-none" id="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-10 order-md-1 order-2">
                <div class="card card-md">
                    <div class="card-body">
                        <h3 class="mb-3">What were some of the major causes and outcomes of the French Revolution?</h3>

                        <div class="card card-sm mb-2">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-30">
                                        <input class="form-check-input m-0" type="checkbox" style="width: 20px; height: 20px;" />
                                    </div>
                                    <span>The French Revolution, which began in 1789, was caused by widespread discontent with the French monarchy and poor economic policies. Major outcomes included the abolition of the monarchy, the rise of Napoleon Bonaparte, and significant social and political changes that laid the groundwork for modern democracies.</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sm mb-2">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-30">
                                        <input class="form-check-input m-0" type="checkbox" style="width: 20px; height: 20px;" />
                                    </div>
                                    <span>One of the major causes of the French Revolution was the financial crisis due to France's involvement in costly wars and extravagant spending by the monarchy. The revolution led to the execution of King Louis XVI, the Reign of Terror, and the eventual rise of Napoleon, who brought many reforms and established the Napoleonic Code.</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sm mb-2">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-30">
                                        <input class="form-check-input m-0" type="checkbox" style="width: 20px; height: 20px;" />
                                    </div>
                                    <span>The Enlightenment ideas of liberty, equality, and fraternity significantly influenced the French Revolution. The outcomes included the end of feudal privileges, the establishment of a republic, and widespread changes in French society that influenced other countries in Europe and beyond.</span>
                                </div>
                            </div>
                        </div>

                        <div class="card card-sm mb-2">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-30">
                                        <input class="form-check-input m-0" type="checkbox" style="width: 20px; height: 20px;" />
                                    </div>
                                    <span>The economic hardship and social inequality faced by the common people of France were major causes of the revolution. The revolution led to the overthrow of the monarchy, significant social upheaval, and the rise of radical political movements. The Napoleonic Wars that followed reshaped the European political landscape.</span>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 d-flex justify-content-end mt-3">
                            <button class="btn btn-primary">Next</button>
                        </div>
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

<div class="spinner-overlay" id="spinner-overlay">
    <div class="spinner-border text-primary" role="status"></div>
    <h3 class="text-primary">Generating question...</h3>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
    $(document).ready(function() {
        // Set a timeout to hide the spinner overlay after 2 seconds
        setTimeout(function() {
            $('#spinner-overlay').hide();
            $('#page-body').removeClass('d-none');
        }, 2000);
    })
</script>
<?= $this->endSection(); ?>