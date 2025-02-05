<?php include 'header.php'; ?>
  <style>
    .body-q-hin {
    margin: 0;
    padding: 0;
    overflow: hidden;
    color:black!important;
    background: linear-gradient(to bottom, #4facfe, #00f2fe);
    }
    h1 {
      color: rgb(10, 10, 104);
    }
.card-hin{
    margin-top: 5vh;
    width: 55%;
    overflow-y: hidden;
    align-items: center;
    border-radius: 25px;
    margin-left: 50vh;
}
    .btn {
      padding: 10px 20px;
      margin: 10px auto;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: block;
    }
    .btn:hover {
      background-color: #45a049;
    }
    .options {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .options div {
      font-size: 2em;
      margin: 10px;
      padding: 10px;
      border: 2px solid transparent;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s, border-color 0.3s;
    }
    .options div:hover {
      border-color: #4CAF50;
      background-color: #f1f1f1;
    }
    #result {
      font-size: 1.2em;
      font-weight: bold;
      color:black;
    }
    #score {
      font-size: 1.5em;
      font-weight: bold;
      color:black;
    }
    /* Cloud Animation */
    @keyframes moveClouds {
      0% { transform: translate(0, 0); }
      100% { transform: translate(300px, 300px); }
    }
    .cloud {
      position: absolute;
      background: #fff;
      background: linear-gradient(to top, #e0e0e0, #ffffff);
      border-radius: 50%;
      width: 100px;
      height: 50px;
      opacity: 0.6;
      animation: moveClouds 10s linear infinite;
    }
    .cloud:nth-child(1) {
      top: 0;
      left: 0;
      animation-duration: 15s;
    }
    .cloud:nth-child(2) {
      top: 0;
      right: 0;
      animation-duration: 20s;
    }
    .cloud:nth-child(3) {
      bottom: 0;
      left: 0;
      animation-duration: 25s;
    }
    .cloud:nth-child(4) {
      bottom: 0;
      right: 0;
      animation-duration: 30s;
    }
    #quizContainer{color: black!important;}
    .rotating-circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    animation: rotate 10s linear infinite, fadeInOut 5s ease-in-out infinite;
  }

  @keyframes rotate {
    0% {
      transform: translate(-50%, -50%) rotate(0deg);
    }
    100% {
      transform: translate(-50%, -50%) rotate(360deg);
    }
  }

  @keyframes fadeInOut {
    0%, 100% {
      opacity: 0;
    }
    50% {
      opacity: 1;
    }
  }
  </style>
</head>
<body class="body-q-hin">
<section class="left-index card card-hin" style="margin-top:5vh;">
  <h1 style="text-align:center;padding-top:45px;">Hindi Alphabet Quiz Game</h1>
  <div class="quiz-section" style="color:black;">
    <div class="cloud" style="color:black;"></div>
    <div class="cloud" style="color:black;"></div>
    <div class="cloud" style="color:black;"></div>
    <div class="cloud" style="color:black;"></div>
    <div id="quizContainer"style="text-align:center;color:black!important;"></div>
    <button id="startBtn" class="btn" onclick="startGame()">Start Game</button>
    <p id="result"style="text-align:center;"></p>
    <p id="score" style="text-align:center;">Score: 0</p>
  </div>
  </section>
</body>
  <script>
    const vowels = ['अ', 'आ', 'इ', 'ई', 'उ', 'ऊ', 'ऋ', 'ए', 'ऐ', 'ओ', 'औ', 'अं', 'अः'];
    const consonants = ['क', 'ख', 'ग', 'घ', 'ङ', 'च', 'छ', 'ज', 'झ', 'ञ', 'ट', 'ठ', 'ड', 'ढ', 'ण', 'त', 'थ', 'द', 'ध', 'न', 'प', 'फ', 'ब', 'भ', 'म', 'य', 'र', 'ल', 'व', 'श', 'ष', 'स', 'ह'];
    const allLetters = vowels.concat(consonants);
    let currentLetter = '';
    let score = 0;
    let questionsCount = 0;

    function getRandomLetter() {
      return allLetters[Math.floor(Math.random() * allLetters.length)];
    }

    function startGame() {
      document.getElementById('startBtn').style.display = 'none';
      score = 0;
      questionsCount = 0;
      document.getElementById('score').textContent = `Score: ${score}`;
      nextQuestion();
    }

    function nextQuestion() {
      if (questionsCount >= 10) {
        document.getElementById('result').textContent = `Game Over! Your final score is ${score}.`;
        document.getElementById('startBtn').style.display = 'block';
        return;
      }

      questionsCount++;
      const quizContainer = document.getElementById('quizContainer');
      quizContainer.innerHTML = '';

      const randomLetter = getRandomLetter();
      currentLetter = randomLetter;

      // Identify Vowel or Consonant
      const question = document.createElement('h2');
      question.textContent = `Is "${randomLetter}" a vowel (स्वर) or a consonant (व्यंजन)?`;
      question.style.color = 'black'; // Change text color to white
      quizContainer.appendChild(question);

      const vowelBtn = document.createElement('button');
      vowelBtn.className = 'btn';
      vowelBtn.textContent = 'Vowel (स्वर)';
      vowelBtn.onclick = () => checkVowel(true);
      quizContainer.appendChild(vowelBtn);

      const consonantBtn = document.createElement('button');
      consonantBtn.className = 'btn';
      consonantBtn.textContent = 'Consonant (व्यंजन)';
      consonantBtn.onclick = () => checkVowel(false);
      quizContainer.appendChild(consonantBtn);
    }

    function checkVowel(isVowel) {
      const isCorrect = (isVowel && vowels.includes(currentLetter)) || (!isVowel && consonants.includes(currentLetter));
      updateFeedback(isCorrect);
      nextQuestion();
    }

    function updateFeedback(isCorrect) {
      const result = document.getElementById('result');
      if (isCorrect) {
        result.textContent = 'Correct!';
        score++;
      } else {
        result.textContent = 'Incorrect.';
        score = Math.max(0, score - 1);
      }
      document.getElementById('score').textContent = `Score: ${score}`;
    }

    function shuffle(array) {
      for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
      }
      return array;
    }
  </script>
  <script>
     // Create multiple rotating circles
  const createRotatingCircles = () => {
    const body = document.body;
    const numberOfCircles = 10;

    for (let i = 0; i < numberOfCircles; i++) {
      const circle = document.createElement('div');
      circle.className = 'rotating-circle';
      
      // Randomize size, position, and animation duration
      const size = Math.random() * 100 + 50; // Circle size between 50px and 150px
      const x = Math.random() * 100; // Position within the viewport width
      const y = Math.random() * 100; // Position within the viewport height
      const duration = Math.random() * 10 + 5; // Animation duration between 5s and 15s

      circle.style.width = `${size}px`;
      circle.style.height = `${size}px`;
      circle.style.left = `${x}vw`;
      circle.style.top = `${y}vh`;
      circle.style.animationDuration = `${duration}s, ${duration / 2}s`;

      body.appendChild(circle);
    }
  };

  // Initialize the background animation
  createRotatingCircles();
  </script>