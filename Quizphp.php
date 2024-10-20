<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>Php Quiz</title>
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
            color: #000;
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
            question: "What does PHP stand for?",
            answers: {
                a: "Personal Hypertext Processor",
                b: "Private Home Page",
                c: "PHP: Hypertext Preprocessor",
                d: "Personal Home Page"
            },
            correct: "c"
        },
        {
            question: "Which symbol is used to prepend all PHP variables?",
            answers: {
                a: "&",
                b: "%",
                c: "@",
                d: "$"
            },
            correct: "d"
        },
        {
            question: "Which of the following is the correct way to create a function in PHP?",
            answers: {
                a: "functionName() {}",
                b: "create function functionName() {}",
                c: "function functionName() {}",
                d: "def functionName() {}"
            },
            correct: "c"
        },
        {
            question: "How do you write a comment in PHP?",
            answers: {
                a: "// comment",
                b: "# comment",
                c: "/* comment */",
                d: "All of the above"
            },
            correct: "d"
        },
        {
            question: "Which superglobal array contains data submitted through a form using the POST method?",
            answers: {
                a: "$_GET",
                b: "$_REQUEST",
                c: "$_POST",
                d: "$_FORM"
            },
            correct: "c"
        },
        {
            question: "Which function is used to include the contents of one PHP file into another PHP file?",
            answers: {
                a: "include()",
                b: "insert()",
                c: "require()",
                d: "Both a and c"
            },
            correct: "d"
        },
        {
            question: "How do you declare a constant in PHP?",
            answers: {
                a: "const PI = 3.14;",
                b: "define('PI', 3.14);",
                c: "constant PI = 3.14;",
                d: "define constant PI = 3.14;"
            },
            correct: "b"
        },
        {
            question: "What is the correct way to open and close a PHP block of code?",
            answers: {
                a: "&lt;?php ?&gt;",
                b: "&lt;? ?&gt;",
                c: "&lt;php&gt; &lt;/php&gt;",
                d: "&lt;?php and ?&gt;"
            },
            correct: "a"
        },
        {
            question: "Which operator is used to concatenate two strings in PHP?",
            answers: {
                a: "+",
                b: ".",
                c: "&",
                d: "++"
            },
            correct: "b"
        },
        {
            question: "Which function is used to get the length of a string in PHP?",
            answers: {
                a: "strlen()",
                b: "length()",
                c: "size()",
                d: "count()"
            },
            correct: "a"
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
