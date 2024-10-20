<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>css Quiz</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url("img/bg2.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            text-align: center;
            background-color: #ffcc8e;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .quiz-container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-sizing: border-box;
        }

        .question {
            margin-bottom: 20px;
            color: white; /* Adjusted text color for questions */
        }

        .options button {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #fff;
            color: #000; /* Text color changed to black */
            border-radius: 5px;
        }

        .options button:hover {
            background-color: #ddd;
        }

        #warning {
            display: none;
            color: red;
            font-weight: bold;
        }

        #score {
            display: none;
            color: white;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Back button -->
    <button id="backButton" class="fancy">
        <span class="top-key"></span>
        <span class="text">Back</span>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
    </button>

    <div class="quiz-container">
        <div id="question-container">
            <!-- Questions will be dynamically inserted here -->
        </div>
        <div id="warning">Wrong answer, try again!</div>
        <div id="score">Your score: <span id="correctAnswers">0</span> correct answers out of <span id="totalQuestions"></span>.</div>
    </div>

    <script>
    
    const questions = [
            {
                question: "Which property is used to change the background color of an element?",
                answers: {
                    a: "color",
                    b: "background-color",
                    c: "background-image",
                    d: "border-color"
                },
                correct: "b"
            },
            {
                question: "Which CSS property controls the size of text?",
                answers: {
                    a: "text-size",
                    b: "font-size",
                    c: "text-style",
                    d: "font-style"
                },
                correct: "b"
            },
            {
                question: "Which CSS property is used to set the spacing between lines of text?",
                answers: {
                    a: "line-spacing",
                    b: "text-spacing",
                    c: "line-height",
                    d: "text-line"
                },
                correct: "c"
            },
            {
                question: "In CSS, what property is used to control the transparency of an element?",
                answers: {
                    a: "opacity",
                    b: "transparency",
                    c: "visibility",
                    d: "blend-mode"
                },
                correct: "a"
            },
            {
                question: "Which CSS property is used to make text bold?",
                answers: {
                    a: "font-weight",
                    b: "text-weight",
                    c: "font-style",
                    d: "bold-text"
                },
                correct: "a"
            },
            {
                question: "Which CSS property controls the space between elements?",
                answers: {
                    a: "margin",
                    b: "padding",
                    c: "spacing",
                    d: "distance"
                },
                correct: "a"
            },
            {
                question: "In CSS, what property is used to control the order of flex items?",
                answers: {
                    a: "flex-order",
                    b: "order",
                    c: "flex-sequence",
                    d: "sequence"
                },
                correct: "b"
            },
            {
                question: "Which CSS property is used to create rounded corners?",
                answers: {
                    a: "border-rounding",
                    b: "border-curve",
                    c: "border-radius",
                    d: "corner-radius"
                },
                correct: "c"
            },
            {
                question: "What is the correct CSS syntax for making all the <p> elements bold?",
                answers: {
                    a: "p.all {font-weight: bold;}",
                    b: "p {text-style: bold;}",
                    c: "p.bold {font-weight: bold;}",
                    d: "p {font-weight: bold;}"
                },
                correct: "d"
            },
            {
                question: "Which CSS property is used to change the color of text?",
                answers: {
                    a: "text-color",
                    b: "color",
                    c: "font-color",
                    d: "text-style"
                },
                correct: "b"
            }
        ];

        let currentQuestionIndex = 0;
        let correctAnswers = 0;

        function showQuestion() {
            const questionContainer = document.getElementById('question-container');
            const totalQuestions = questions.length;
            document.getElementById('totalQuestions').textContent = totalQuestions;
            questionContainer.innerHTML = `
                <div class="question">${questions[currentQuestionIndex].question}</div>
                <div class="options">
                    <button onclick="checkAnswer('a')">${questions[currentQuestionIndex].answers.a}</button>
                    <button onclick="checkAnswer('b')">${questions[currentQuestionIndex].answers.b}</button>
                    <button onclick="checkAnswer('c')">${questions[currentQuestionIndex].answers.c}</button>
                    <button onclick="checkAnswer('d')">${questions[currentQuestionIndex].answers.d}</button>
                </div>
            `;
        }

        function checkAnswer(answer) {
            if (answer === questions[currentQuestionIndex].correct) {
                correctAnswers++;
            } else {
                document.getElementById('warning').style.display = 'block';
            }

            currentQuestionIndex++;

            if (currentQuestionIndex < questions.length) {
                showQuestion();
            } else {
                showScore();
            }
        }

        function showScore() {
            document.getElementById('question-container').style.display = 'none';
            document.getElementById('warning').style.display = 'none';
            document.getElementById('score').style.display = 'block';
            document.getElementById('correctAnswers').textContent = correctAnswers;
        }

        showQuestion();

        document.getElementById('backButton').addEventListener('click', function() {
            history.back();
        });
    </script>
</body>
</html>
