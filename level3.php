<?php include 'header.php';?>
<style>
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: black;
        color: #16426e;
      }
      .container-67 {
        background-color: #000000;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 800px;
        width: 100%;
        color: white;
      }
      h1 {
        color: #6efdcd;
        margin-bottom: 20px;
      }
      p.bold {
        font-weight: bold;
        color: #2c97f0;
      }
      #question {
        color: white;
        font-size: 20px;
        margin-top: 10px;
      }
      button {
        padding: 12px 18px;
        margin: 20px 10px 10px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        background-color: #e55039;
        color: white;
        transition: background-color 0.3s ease;
      }
      button:hover {
        background-color: #c0392b;
      }
      #question span,
      #sorted-words span {
        padding: 12px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        display: inline-block;
        cursor: pointer;
        background-color: #ffffff;
        color: #000000;
        transition: background-color 0.3s ease;
      }
      #question span:hover,
      #sorted-words span:hover {
        background-color: #e9ecef;
      }
      #result {
        font-weight: bold;
        margin-top: 20px;
      }
      .correct {
        color: green;
      }
      .wrong {
        color: white;
      }
      .bold {
        font-weight: bold;
      }
      .question-number {
        background-color: #000000;
        color: #ffffff;
        padding: 10px;
        border-radius: 5px;
      }
    </style>
  <body>
    <div class="container-67">
      <h1>Word Sorting Game</h1>
      <p id="question-number" class="bold question-number">Question:</p>
      <p class="bold">Sort the words to form the correct sentence:</p>
      <div id="question"></div>
      <div id="sorted-words"></div>
      <button id="next-question">Next Question</button>
      <div id="result"></div>
      <p><span class="bold">Score:</span> <span id="score">0</span></p>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const sentences = [
          "The cat sat.", "I love coding.", "Python is fun.", "Kids are smart.", "This is easy.", 
          "Dogs are friendly.", "Birds can fly.", "Fish swim fast.", "I like apples.", "We play games."
        ];

        let score = 0;
        let questionIndex = 0;

        const questionNumberP = document.getElementById("question-number");
        const questionDiv = document.getElementById("question");
        const sortedWordsDiv = document.getElementById("sorted-words");
        const resultDiv = document.getElementById("result");
        const scoreP = document.getElementById("score");
        const nextQuestionButton = document.getElementById("next-question");

        function nextQuestion() {
          if (questionIndex >= sentences.length) {
            resultDiv.textContent = "You've completed all the questions!";
            return;
          }

          resultDiv.textContent = "";
          sortedWordsDiv.innerHTML = "";
          sortedWordsDiv.classList.remove("correct", "wrong");

          const currentSentence = sentences[questionIndex];
          const words = currentSentence.split(" ").sort(() => Math.random() - 0.5);

          questionDiv.innerHTML = words.map(word => `<span>${word}</span>`).join(" ");
          questionNumberP.textContent = `Question: ${questionIndex + 1}`;
          questionIndex++;

          Array.from(questionDiv.children).forEach(span => {
            span.addEventListener("click", () => selectWord(span));
          });
        }

        function selectWord(wordSpan) {
          sortedWordsDiv.appendChild(wordSpan);
          checkSentence();
        }

        function checkSentence() {
          const displayedSentence = Array.from(sortedWordsDiv.children)
            .map(span => span.textContent)
            .join(" ");
          const currentSentence = sentences[questionIndex - 1];
          if (displayedSentence.split(" ").length === currentSentence.split(" ").length) {
            if (displayedSentence === currentSentence) {
              resultDiv.textContent = "Correct! Well done!";
              resultDiv.classList.remove("wrong");
              resultDiv.classList.add("correct");
              sortedWordsDiv.classList.add("correct");
              score++;
            } else {
              resultDiv.textContent = "Wrong! Try again!";
              resultDiv.classList.remove("correct");
              resultDiv.classList.add("wrong");
              sortedWordsDiv.classList.add("wrong");
            }
            scoreP.textContent = score;
          }
        }

        nextQuestionButton.addEventListener("click", nextQuestion);
        nextQuestion();
      });
    </script>
  </body>
</html>
