<?php include 'header.php';?>
    <style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #f8f9fa;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
      }
      h2 {
        color: #333;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
      }
      .sub-but {
    margin-top: 15px;
    padding: 20px;
    border-radius: 16px;
    background-color: black;
    color: white;
    font-size: 25px;
    padding-top: 10px;
    padding-bottom: 10px;
}
.sub-but:hover{
  background-color: white;
  color: black;
}
      #quiz-container {
        margin: 20px auto;
        width: 90%;
        max-width: 700px;
        background: white;
        padding: 30px;
        box-shadow: 0px 0px 15px gray;
        border-radius: 15px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .word-box {
        display: inline-block;
        padding: 15px;
        margin: 8px;
        background: #17a2b8;
        color: white;
        cursor: grab;
        border-radius: 8px;
        font-size: 18px;
      }
      #timer {
        font-size: 22px;
        color: red;
        margin-bottom: 15px;
      }
      #message {
        font-size: 20px;
        margin-top: 15px;
        color: green;
      }
      #word-boxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
      }
      .sortable {
        min-height: 60px;
        border: 2px dashed #17a2b8;
        padding: 15px;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
  </head>
  <body>
    <h2>Sort the Words to Form a Correct Sentence</h2>
    <div id="quiz-container">
      <div id="timer">Time Left: 30s</div>
      <div id="word-boxes" class="sortable"></div>
      <button onclick="checkAnswer()" class="sub-but ">Submit</button>
      <div id="message"></div>
    </div>

    <script>
      const questions = [
        {
          scrambled: ["MONDAY", "is", "first", "the", "week", "of", "day"],
          answer: "MONDAY is the first day of week",
        },
        {
          scrambled: ["ELEPHANT", "largest", "the", "animal", "is"],
          answer: "ELEPHANT is the largest animal",
        },
        {
          scrambled: ["MERCURY", "closest", "the", "to", "is", "sun"],
          answer: "MERCURY is the closest planet to the sun",
        },
        {
          scrambled: ["ROSE", "a", "flower", "is"],
          answer: "ROSE is a flower",
        },
        {
          scrambled: ["PENCIL", "used", "writing", "for", "is"],
          answer: "PENCIL is used for writing",
        },
        {
          scrambled: ["CAR", "a", "vehicle", "is"],
          answer: "CAR is a vehicle",
        },
      ];

      let currentQuestion = 0;
      let timeLeft = 25;
      let timer;

      function loadQuestion() {
        document.getElementById("message").innerText = "";
        timeLeft = 30;
        document.getElementById("timer").innerText = "Time Left: 25s";
        clearInterval(timer);
        timer = setInterval(countdown, 1000);

        const question = questions[currentQuestion];
        const shuffledWords = [...question.scrambled];
        shuffledWords.sort(() => Math.random() - 0.5);

        const wordBoxes = document.getElementById("word-boxes");
        wordBoxes.innerHTML = "";

        shuffledWords.forEach((word) => {
          const span = document.createElement("span");
          span.className = "word-box";
          span.innerText = word;
          wordBoxes.appendChild(span);
        });

        new Sortable(wordBoxes, {
          animation: 150,
          ghostClass: "sortable-ghost",
        });
      }

      function checkAnswer() {
        const userAnswer = Array.from(document.querySelectorAll(".word-box"))
          .map((span) => span.innerText)
          .join(" ");
        if (userAnswer === questions[currentQuestion].answer) {
          document.getElementById("message").innerText = "Correct!";
        } else {
          document.getElementById("message").innerText = "Try Again!";
        }

        currentQuestion = (currentQuestion + 1) % questions.length;
        setTimeout(loadQuestion, 2000);
      }

      function countdown() {
        timeLeft--;
        document.getElementById("timer").innerText = `Time Left: ${timeLeft}s`;
        if (timeLeft === 0) {
          clearInterval(timer);
          document.getElementById("message").innerText =
            "Time's up! Try the next question.";
          currentQuestion = (currentQuestion + 1) % questions.length;
          setTimeout(loadQuestion, 2000);
        }
      }

      loadQuestion();
    </script>
  </body>
</html>
