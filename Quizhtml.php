<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>HTML Quiz</title>
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
                question: "What does HTML stand for?",
                answers: {
                    a: "Hyper Text Markup Language",
                    b: "Hot Mail",
                    c: "How to Make Lasagna",
                    d: "Home Tool Markup Language"
                },
                correct: "a"
            },
            {
                question: "Who is making the Web standards?",
                answers: {
                    a: "Mozilla",
                    b: "Microsoft",
                    c: "The World Wide Web Consortium",
                    d: "Google"
                },
                correct: "c"
            },
            {
                question: "Choose the correct HTML element for the largest heading:",
                answers: {
                    a: "&lt;heading&gt;",
                    b: "&lt;h6&gt;",
                    c: "&lt;head&gt;",
                    d: "&lt;h1&gt;"
                },
                correct: "d"
            },
            {
                question: "What is the correct HTML element for inserting a line break?",
                answers: {
                    a: "&lt;break&gt;",
                    b: "&lt;lb&gt;",
                    c: "&lt;br&gt;",
                    d: "&lt;linebreak&gt;"
                },
                correct: "c"
            },
            {
                question: "What is the correct HTML for adding a background color?",
                answers: {
                    a: "&lt;body bg='yellow'&gt;",
                    b: "&lt;background&gt;yellow&lt;/background&gt;",
                    c: "&lt;body style='background-color:yellow;'&gt;",
                    d: "&lt;body color='yellow'&gt;"
                },
                correct: "c"
            },
            {
                question: "Choose the correct HTML element to define important text",
                answers: {
                    a: "&lt;important&gt;",
                    b: "&lt;strong&gt;",
                    c: "&lt;b&gt;",
                    d: "&lt;i&gt;"
                },
                correct: "b"
            },
            {
                question: "Choose the correct HTML element to define emphasized text",
                answers: {
                    a: "&lt;italic&gt;",
                    b: "&lt;i&gt;",
                    c: "&lt;em&gt;",
                    d: "&lt;bold&gt;"
                },
                correct: "c"
            },
            {
                question: "Which character is used to indicate an end tag?",
                answers: {
                    a: "*",
                    b: "&lt;",
                    c: "/",
                    d: "^"
                },
                correct: "c"
            },
            {
                question: "How can you make a numbered list?",
                answers: {
                    a: "&lt;list&gt;",
                    b: "&lt;ul&gt;",
                    c: "&lt;ol&gt;",
                    d: "&lt;dl&gt;"
                },
                correct: "c"
            },
            {
                question: "How can you make a bulleted list?",
                answers: {
                    a: "&lt;list&gt;",
                    b: "&lt;ul&gt;",
                    c: "&lt;ol&gt;",
                    d: "&lt;dl&gt;"
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
