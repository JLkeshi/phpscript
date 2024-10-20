<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>c++ Quiz</title>
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
                question: "Which of the following is a correct way to declare a pointer in C++?",
                answers: {
                    a: "int ptr;",
                    b: "int *ptr;",
                    c: "ptr int;",
                    d: "pointer ptr;"
                },
                correct: "b"
            },
            {
                question: "Which keyword is used for dynamic memory allocation in C++?",
                answers: {
                    a: "new",
                    b: "malloc",
                    c: "alloc",
                    d: "allocate"
                },
                correct: "a"
            },
            {
                question: "What is the correct syntax for creating a class in C++?",
                answers: {
                    a: "class MyClass {}",
                    b: "class = MyClass {}",
                    c: "create class MyClass {}",
                    d: "new MyClass {}"
                },
                correct: "a"
            },
            {
                question: "How is a constructor different from a normal member function?",
                answers: {
                    a: "It is called automatically when an object is created.",
                    b: "It has a return type.",
                    c: "It can be overloaded.",
                    d: "It can be declared static."
                },
                correct: "a"
            },
            {
                question: "What is the output of 'cout << (5 > 3) ? 1 : 0;' in C++?",
                answers: {
                    a: "5",
                    b: "3",
                    c: "1",
                    d: "0"
                },
                correct: "c"
            },
            {
                question: "Which of the following is not a valid C++ identifier?",
                answers: {
                    a: "_myVar",
                    b: "my_Var",
                    c: "1stVar",
                    d: "var_1"
                },
                correct: "c"
            },
            {
                question: "What does 'cin.ignore()' function do in C++?",
                answers: {
                    a: "Ignores the next character in the input buffer",
                    b: "Ignores all characters in the input buffer",
                    c: "Ignores all characters until newline in the input buffer",
                    d: "None of the above"
                },
                correct: "c"
            },
            {
                question: "What is the size of 'int' data type in C++?",
                answers: {
                    a: "4 bytes",
                    b: "8 bytes",
                    c: "2 bytes",
                    d: "Depends on the compiler"
                },
                correct: "a"
            },
            {
                question: "Which data type in C++ is used for text strings?",
                answers: {
                    a: "string",
                    b: "char",
                    c: "int",
                    d: "float"
                },
                correct: "a"
            },
            {
                question: "What is the keyword used to indicate the end of a function in C++?",
                answers: {
                    a: "return",
                    b: "void",
                    c: "end",
                    d: "exit"
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
