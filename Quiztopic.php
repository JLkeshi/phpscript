<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/topic.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    
    <title>Quiz Topic Area</title>
    
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
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .left-image-container {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            padding: 20px;
        }

        .left-image-container img {
            max-width: 100px;
            height: auto;
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

    <div class="content">
        <div ontouchstart="">
            <div class="button">
                <a href="Quizpython.php" class="startButton">Phyton</a>
            </div>
            <div class="button">
                <a href="Quizhtml.php" class="startButton">HTML</a>
            </div>
            <div class="button">
                <a href="Quizcss.php" class="startButton">CSS</a>
            </div>
            <div class="button">
                <a href="Quizcpp.php" class="startButton">C++</a>
            </div>
            <div class="button">
                <a href="Quizphp.php" class="startButton">Php</a>
            </div>
                        <div class="loading-screen" id="loadingScreen">
                            <h2>Please Wait...<br></h2>
                            <div class="mosaic-loader">
                                <div class="cell d-1"></div>
                                <div class="cell d-2"></div>
                                <div class="cell d-3"></div>
                                <div class="cell d-4"></div>
                                <div class="cell d-5"></div>
                                <div class="cell d-6"></div>
                                <div class="cell d-7"></div>
                                <div class="cell d-1"></div>
                                <div class="cell d-2"></div>
                                <div class="cell d-3"></div>
                                <div class="cell d-4"></div>
                                <div class="cell d-5"></div>
                                <div class="cell d-6"></div>
                                <div class="cell d-7"></div>
                                <div class="cell d-1"></div>
                                <div class="cell d-2"></div>
                                <div class="cell d-3"></div>
                            </div>
                        </div>
                    

                        <script>

    
                // Functionality for back button
                document.getElementById('backButton').addEventListener('click', function() {
            history.back(); // Go back to previous page in history
        });

(function(){
var $mainWrapper = $("#main-wrapper");

$('.menu-icon').click(function(){
$(this).toggleClass('active');
$mainWrapper.toggleClass('active');
});


})();
</script>

<input type="checkbox" id="checkboxInput" />
<label for="checkboxInput" class="toggleSwitch">
    <div class="speaker">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 75 75">
            <path
                d="M39.389,13.769 L22.235,28.606 L6,28.606 L6,47.699 L21.989,47.699 L39.389,62.75 L39.389,13.769z"
                style="stroke:#fff;stroke-width:5;stroke-linejoin:round;fill:#fff;"
            ></path>
            <path
                d="M48,27.6a19.5,19.5 0 0 1 0,21.4M55.1,20.5a30,30 0 0 1 0,35.6M61.6,14a38.8,38.8 0 0 1 0,48.6"
                style="fill:none;stroke:#fff;stroke-width:5;stroke-linecap:round"
            ></path>
        </svg>
    </div>

    <div class="mute-speaker">
        <svg version="1.0" viewBox="0 0 75 75" stroke="#fff" stroke-width="5">
            <path
                d="m39,14-17,15H6V48H22l17,15z"
                fill="#fff"
                stroke-linejoin="round"
            ></path>
            <path
                d="m49,26 20,24m0-24-20,24"
                fill="#fff"
                stroke-linecap="round"
            ></path>
        </svg>
    </div>
</label>

<audio id="backgroundMusic" loop>
    <source src="bgm/Gaho Running StartUp OST5 Piano Cover.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<script>
          // Functionality for back button
                    document.getElementById('backButton').addEventListener('click', function() {
            history.back(); // Go back to previous page in history
        });

    const checkbox = document.getElementById('checkboxInput');
    const music = document.getElementById('backgroundMusic');
    const loadingScreen = document.getElementById('loadingScreen');
    const buttons = document.querySelectorAll('.startButton');

    // Function to handle button click
    function handleButtonClick(event) {
        event.preventDefault();
        loadingScreen.style.display = 'flex'; // Show loading screen

        // Simulate loading delay
        setTimeout(function() {
            window.location.href = event.target.href; // Navigate to button's href
        }, 3000); // 3 seconds delay for loading animation
    }

    // Add click event listeners to all buttons
    buttons.forEach(function(button) {
        button.addEventListener('click', handleButtonClick);
    });

    // Checkbox for music control
    checkbox.addEventListener('change', function() {
        if (checkbox.checked) {
            music.pause();
        } else {
            music.play();
        }
    });

    // Play music by default when the page loads
    window.onload = function() {
        music.play();
    };
</script>


</body>
</html>
