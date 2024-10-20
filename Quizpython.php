<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>Python Quiz</title>
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
                question: "What is the output of 'print(2 + 3 * 5)' in Python?",
                answers: {
                    a: "10",
                    b: "17",
                    c: "25",
                    d: "None of the above"
                },
                correct: "b"
            },
            {
                question: "How do you declare a variable in Python?",
                answers: {
                    a: "var x",
                    b: "x = 5",
                    c: "int x = 5",
                    d: "$x = 5"
                },
                correct: "b"
            },
            {
                question: "Which of the following is a valid Python comment?",
                answers: {
                    a: "# This is a comment",
                    b: "// This is a comment",
                    c: "<!-- This is a comment -->",
                    d: "/* This is a comment */"
                },
                correct: "a"
            },
            {
                question: "What is the correct way to create a function in Python?",
                answers: {
                    a: "def myFunction():",
                    b: "function myFunction():",
                    c: "create function myFunction():",
                    d: "function:myFunction()"
                },
                correct: "a"
            },
            {
                question: "How do you print 'Hello World' in Python?",
                answers: {
                    a: "echo 'Hello World';",
                    b: "print('Hello World')",
                    c: "console.log('Hello World')",
                    d: "System.out.println('Hello World')"
                },
                correct: "b"
            },
            {
                question: "Which of the following data types is not supported in Python?",
                answers: {
                    a: "int",
                    b: "float",
                    c: "char",
                    d: "bool"
                },
                correct: "c"
            },
            {
                question: "What will be the output of 'print('Hello' + 'World')' in Python?",
                answers: {
                    a: "Hello World",
                    b: "Hello + World",
                    c: "HelloWorld",
                    d: "Error"
                },
                correct: "a"
            },
            {
                question: "How do you check the length of a list in Python?",
                answers: {
                    a: "len(list)",
                    b: "length(list)",
                    c: "list.length()",
                    d: "list.len()"
                },
                correct: "a"
            },
            {
                question: "Which statement is used to exit from a loop in Python?",
                answers: {
                    a: "exit",
                    b: "break",
                    c: "continue",
                    d: "return"
                },
                correct: "b"
            },
            {
                question: "What is the correct way to open a file named 'data.txt' in Python?",
                answers: {
                    a: "file = open('data.txt')",
                    b: "file = open('data.txt', 'r')",
                    c: "file = open('data.txt', 'w')",
                    d: "file = open('data.txt', 'a')"
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
