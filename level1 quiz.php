<?php include 'header.php';?>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }
    h1 {
      color: rgb(10, 10, 104);
    }
    .quiz-section {
      margin: 20px 0;
      background-color: black;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: inline-block;
      width: 80%;
      max-width: 500px;
      position: relative;
      overflow: hidden;
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
      color: white;
    }
    #score {
      font-size: 1.5em;
      font-weight: bold;
      color: white;
    }
  </style>
</head>
<body>
  <h1>Alphabet Quiz Game</h1>
  <div class="quiz-section">
    <div id="quizContainer"></div>
    <button id="startBtn" class="btn" onclick="startGame()">Start Game</button>
    <p id="result"></p>
    <p id="score">Score: 0</p>
  </div>

  <script>
    const vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    const allLetters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');
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

      if (questionsCount <= 3) {
        // First 3 questions: Identify Vowel or Consonant
        const question = document.createElement('h2');
        question.textContent = `Is ${randomLetter} a vowel or a consonant?`;
        question.style.color = 'white'; // Change text color to white
        quizContainer.appendChild(question);

        const vowelBtn = document.createElement('button');
        vowelBtn.className = 'btn';
        vowelBtn.textContent = 'Vowel';
        vowelBtn.onclick = () => checkVowel(true);
        quizContainer.appendChild(vowelBtn);

        const consonantBtn = document.createElement('button');
        consonantBtn.className = 'btn';
        consonantBtn.textContent = 'Consonant';
        consonantBtn.onclick = () => checkVowel(false);
        quizContainer.appendChild(consonantBtn);
      } else if (questionsCount <= 6) {
        // Next 3 questions: Match Capital to Small Letter
        const question = document.createElement('h2');
        const isUpperCase = randomLetter === randomLetter.toUpperCase();
        const matchingLetter = isUpperCase ? randomLetter.toLowerCase() : randomLetter.toUpperCase();
        question.textContent = `Match the letter ${randomLetter} to its corresponding case:`;
        question.style.color = 'white'; // Change text color to white
        quizContainer.appendChild(question);

        const options = document.createElement('div');
        options.className = 'options';
        const correctOption = document.createElement('div');
        correctOption.textContent = matchingLetter;
        correctOption.onclick = () => checkMatch(true);

        let randomIncorrectLetter;
        do {
          randomIncorrectLetter = getRandomLetter();
        } while (randomIncorrectLetter.toLowerCase() === matchingLetter.toLowerCase() || randomIncorrectLetter === randomLetter);

        const incorrectOption = document.createElement('div');
        incorrectOption.textContent = randomIncorrectLetter;
        incorrectOption.onclick = () => checkMatch(false);

        const shuffledOptions = shuffle([correctOption, incorrectOption]);
        shuffledOptions.forEach(option => options.appendChild(option));
        quizContainer.appendChild(options);
      } else {
        // Last 4 questions: Identify if the letter is Uppercase or Lowercase
        const question = document.createElement('h2');
        question.textContent = `Is ${randomLetter} an uppercase or lowercase letter?`;
        question.style.color = 'white'; // Change text color to white
        quizContainer.appendChild(question);

        const uppercaseBtn = document.createElement('button');
        uppercaseBtn.className = 'btn';
        uppercaseBtn.textContent = 'Uppercase';
        uppercaseBtn.onclick = () => checkUppercase(true);
        quizContainer.appendChild(uppercaseBtn);

        const lowercaseBtn = document.createElement('button');
        lowercaseBtn.className = 'btn';
        lowercaseBtn.textContent = 'Lowercase';
        lowercaseBtn.onclick = () => checkUppercase(false);
        quizContainer.appendChild(lowercaseBtn);
      }
    }

    function checkVowel(isVowel) {
      const result = vowels.includes(currentLetter) === isVowel;
      updateFeedback(result);
      nextQuestion();
    }

    function checkMatch(isCorrect) {
      updateFeedback(isCorrect);
      nextQuestion();
    }

    function checkUppercase(isUppercase) {
      const result = currentLetter === currentLetter.toUpperCase() === isUppercase;
      updateFeedback(result);
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
<?php include 'footer.php';?>
