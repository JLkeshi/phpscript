<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>JavaScript Quiz</title>
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
    </style>
</head>
<body>
    <div class="quiz-container">
        <div id="question-container">
            <!-- Questions will be dynamically inserted here -->
        </div>
        <div id="warning">Wrong answer, try again!</div>
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
                    a: "<heading>",
                    b: "<h6>",
                    c: "<head>",
                    d: "<h1>"
                },
                correct: "d"
            },
            {
                question: "What is the correct HTML element for inserting a line break?",
                answers: {
                    a: "<break>",
                    b: "<lb>",
                    c: "<br>",
                    d: "<linebreak>"
                },
                correct: "c"
            },
            {
                question: "What is the correct HTML for adding a background color?",
                answers: {
                    a: "<body bg='yellow'>",
                    b: "<background>yellow</background>",
                    c: "<body style='background-color:yellow;'>",
                    d: "<body color='yellow'>"
                },
                correct: "c"
            },
            {
                question: "Choose the correct HTML element to define important text",
                answers: {
                    a: "<important>",
                    b: "<strong>",
                    c: "<b>",
                    d: "<i>"
                },
                correct: "b"
            },
            {
                question: "Choose the correct HTML element to define emphasized text",
                answers: {
                    a: "<italic>",
                    b: "<i>",
                    c: "<em>",
                    d: "<bold>"
                },
                correct: "c"
            },
            {
                question: "Which character is used to indicate an end tag?",
                answers: {
                    a: "*",
                    b: "<",
                    c: "/",
                    d: "^"
                },
                correct: "c"
            },
            {
                question: "How can you make a numbered list?",
                answers: {
                    a: "<list>",
                    b: "<ul>",
                    c: "<ol>",
                    d: "<dl>"
                },
                correct: "c"
            },
            {
                question: "How can you make a bulleted list?",
                answers: {
                    a: "<list>",
                    b: "<ul>",
                    c: "<ol>",
                    d: "<dl>"
                },
                correct: "b"
            }
        ];

        let currentQuestionIndex = 0;

        function showQuestion() {
            const questionContainer = document.getElementById('question-container');
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
                currentQuestionIndex++;
                if (currentQuestionIndex < questions.length) {
                    showQuestion();
                } else {
                    alert('Congratulations! You have completed the quiz.');
                }
                document.getElementById('warning').style.display = 'none';
            } else {
                document.getElementById('warning').style.display = 'block';
            }
        }

        showQuestion();
    </script>
</body>
</html>
