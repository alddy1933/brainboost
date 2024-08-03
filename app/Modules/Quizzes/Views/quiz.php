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

    #generate-result {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
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
                            <h1 id="countdown">--:--</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="generate-result" class="d-none">
    <h2 class="text-primary">Generating Result...</h2>
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
        generateQuestions();
    })

    function generateQuestions() {
        $("#question-body").html(spinner)
        $.ajax({
            url: "<?= base_url('question/generate') . '/' . $category ?>",
            method: "POST",
            dataType: "json",
            success: (response) => {
                let formattedQuestions = response.reduce((acc, curr) => {
                    let {
                        question_id,
                        answer_id,
                        answer_option
                    } = curr;

                    if (!acc[question_id]) {
                        acc[question_id] = {
                            question_id: question_id,
                            question: curr.question,
                            answer_options: []
                        };
                    }

                    acc[question_id].answer_options.push({
                        answer_id: answer_id,
                        answer_option: answer_option
                    });

                    return acc;
                }, {});

                formattedQuestions = Object.values(formattedQuestions);

                localStorage.setItem('questions', JSON.stringify(formattedQuestions));

                getQuestion()
            }
        })
    }

    function getQuestion() {
        let questions = JSON.parse(localStorage.getItem('questions'));
        let questionIndex = parseInt(localStorage.getItem('now_question_index') ?? 0);

        if (questionIndex >= questions.length) {
            // Jika semua pertanyaan sudah dijawab
            $("#question-body").html('<h3 class="mb-3">All questions have been answered.</h3>');
            return;
        }

        let question = questions[questionIndex];

        let html = ``;

        html += `<h3 class="mb-3">${question.question}</h3>`;

        question.answer_options.forEach(item => {
            html += `
            <div class="card card-sm mb-2">
                <div class="card-body">
                    <div class="d-flex align-items-center gap-3">
                        <div class="w-30">
                            <input class="form-check-input m-0 answer-checkbox" type="checkbox" style="width: 20px; height: 20px;" data-question-id="${question.question_id}" data-answer-id="${item.answer_id}"/>
                        </div>
                        <span>${item.answer_option}</span>
                    </div>
                </div>
            </div>
        `;
        });

        html += `
            <div class="w-100 d-flex justify-content-end mt-3">
                <button class="btn btn-primary" onclick="saveAnsweredQuestion()">Next</button>
            </div>
        `;

        $("#question-body").html(html);
    }

    function saveAnsweredQuestion() {
        let answers = JSON.parse(localStorage.getItem('answered_question')) || [];

        // Menyimpan jawaban yang dipilih
        document.querySelectorAll('.answer-checkbox:checked').forEach(checkbox => {
            let questionId = checkbox.getAttribute('data-question-id');
            let answerId = checkbox.getAttribute('data-answer-id');
            answers.push({
                question_id: questionId,
                answer_id: answerId
            });
        });

        localStorage.setItem('answered_question', JSON.stringify(answers));

        console.log(localStorage.getItem('answered_question'));

        let questionIndex = localStorage.getItem('now_question_index') ?? 0;
        localStorage.setItem('now_question_index', parseInt(questionIndex) + 1);
        getQuestion();
    }

    function generateResult() {
        $("#page-body").toggleClass('d-none')
        $("#generate-result").toggleClass('d-none')
        $.ajax({
            url: "<?= base_url('quizzes/generate_result') ?>",
            method: "post",
            data: {
                data: JSON.parse(localStorage.getItem('answered_question')),
                category: "<?= $category ?>"
            },
            dataType: 'json',
            success: (response) => {
                let html = `
                    <div class="row w-100">
                        <div class="col-6 offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="fw-bold">${response.data.points > 0 ? "Congratulations" : "Nice Try. Don't give up, keep learning"}</h3>
                                    <p>You get ${response.data.points} points</p>
                                    <a href="<?= base_url('quizzes') ?>" class="btn btn-danger btn-sm">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                $("#generate-result").html(html)

                localStorage.clear()
            }
        })
    }
</script>

<!-- Countdown timer -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        function startCountdown(duration, display) {
            var countdownInterval = setInterval(function() {
                var now = Math.floor(Date.now() / 1000);
                var remainingTime = endTime - now;

                if (remainingTime <= 0) {
                    clearInterval(countdownInterval);
                    display.textContent = "00:00";
                    generateResult()
                } else {
                    var minutes = parseInt(remainingTime / 60, 10);
                    var seconds = parseInt(remainingTime % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;
                }
            }, 1000);
        }

        var countdownElement = document.getElementById('countdown');
        var countdownDuration = 10; // Countdown time in second

        // Get current time in seconds
        var now = Math.floor(Date.now() / 1000);
        // Retrieve end time from localStorage or set it
        var endTime = parseInt(localStorage.getItem('endTime'), 10);

        if (!endTime || endTime < now) {
            // Set endTime for the countdown
            endTime = now + countdownDuration;
            localStorage.setItem('endTime', endTime);
        }

        startCountdown(countdownDuration, countdownElement);
    });
</script>
<?= $this->endSection(); ?>