<?php include 'header.php';?>
    <style>
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: rgb(13, 12, 12);
        color: black;
      }
      .container-45 {
        background-color: #ebeaec;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 800px;
        width: 100%;
        color: black;
      }
      h1 {
        color: #090909;
        margin-bottom: 20px;
      }
      p.bold {
        font-weight: bold;
        color: #11100f;
      }
      button {
        padding: 12px 18px;
        margin: 20px 10px 10px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        background-color: #111111;
        color: white;
        transition: background-color 0.3s ease;
      }
      button:hover {
        background-color: #0e0e0e;
      }
      #question span,
      #sorted-words span {
        padding: 12px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        display: inline-block;
        cursor: pointer;
        background-color: #f8f9fa;
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
        color: black;
      }
      .bold {
        font-weight: bold;
      }
      .question-number {
        background-color: #ffffff;
        color: #000000;
        padding: 10px;
        border-radius: 5px;
      }
      #final-score {
        display: none;
        font-weight: bold;
        color: #060606;
      }
    </style>
  </head>
  <body>
    <div class="container-45">
      <h1>शब्द क्रमबद्ध खेल</h1>
      <p id="question-number" class="bold question-number">प्रश्न:</p>
      <p class="bold">सही वाक्य बनाने के लिए शब्दों को क्रम में लगाएं:</p>
      <div id="question"></div>
      <div id="sorted-words"></div>
      <button id="next-question">अगला प्रश्न</button>
      <div id="result"></div>
      <p><span class="bold">अंक:</span> <span id="score">0</span></p>
      <p id="final-score"></p>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const easySentences = [
          "बिल्ली बैठी।",
          "मुझे कोडिंग पसंद है।",
          "पायथन मजेदार है।",
          "बच्चे होशियार हैं।",
          "यह आसान है।",
          "कुत्ते दोस्ताना हैं।",
          "पक्षी उड़ सकते हैं।",
          "मछलियाँ तेजी से तैरती हैं।",
          "मुझे सेब पसंद हैं।",
          "हम खेल खेलते हैं।",
        ];

        const mediumSentences = [
          "तेज़ भूरे रंग की लोमड़ी आलसी कुत्ते के ऊपर कूदती है।",
          "नई चीजें सीखना हमेशा रोमांचक होता है।",
          "प्रत्येक कौशल में अभ्यास से परिपूर्णता आती है।",
          "कोडिंग चुनौतियाँ समस्या समाधान को सुधारती हैं।",
          "पुस्तकें पढ़ने से ज्ञान और कल्पना का विस्तार होता है।",
          "बागवानी एक आरामदायक शौक हो सकती है।",
          "संगीत में आत्मा को ऊपर उठाने की शक्ति है।",
          "स्वादिष्ट भोजन पकाना खुशी लाता है।",
          "यात्रा करने से दृष्टिकोण का विस्तार होता है।",
          "खेल खेलना आपको स्वस्थ और सक्रिय रखता है।",
        ];

        const hardSentences = [
          "सुरक्षित संचार के लिए क्रिप्टोग्राफी आवश्यक है।",
          "कृत्रिम बुद्धिमत्ता उद्योगों को बदल रही है।",
          "सापेक्षता का सिद्धांत भौतिकी में क्रांति लाया।",
          "क्वांटम कंप्यूटिंग अभूतपूर्व प्रसंस्करण शक्ति का वादा करती है।",
          "जलवायु परिवर्तन जैव विविधता के लिए एक महत्वपूर्ण खतरा है।",
          "नवीकरणीय ऊर्जा स्रोत एक स्थायी भविष्य की कुंजी हैं।",
          "ब्लॉकचेन तकनीक विकेन्द्रीकृत लेनदेन को सक्षम बनाती है।",
          "मानव मस्तिष्क एक जटिल और आकर्षक अंग है।",
          "अंतरिक्ष अन्वेषण ने ब्रह्मांड की हमारी समझ को बढ़ाया है।",
          "उन्नत चिकित्सा अनुसंधान बीमारियों के इलाज के लिए महत्वपूर्ण है।",
        ];

        let score = 0;
        let questionIndex = 0;
        const allSentences = [
          ...easySentences,
          ...mediumSentences,
          ...hardSentences,
        ];

        const questionNumberP = document.getElementById("question-number");
        const questionDiv = document.getElementById("question");
        const sortedWordsDiv = document.getElementById("sorted-words");
        const resultDiv = document.getElementById("result");
        const scoreP = document.getElementById("score");
        const nextQuestionButton = document.getElementById("next-question");
        const finalScoreP = document.getElementById("final-score");

        function nextQuestion() {
          if (questionIndex >= allSentences.length) {
            resultDiv.textContent = "आपने सभी प्रश्न पूरे कर लिए हैं!";
            finalScoreP.style.display = "block";
            finalScoreP.textContent = `आपका अंतिम स्कोर: ${score} / ${allSentences.length}`;
            return;
          }

          resultDiv.textContent = "";
          sortedWordsDiv.innerHTML = "";
          sortedWordsDiv.classList.remove("correct", "wrong");

          const currentSentence = allSentences[questionIndex];
          const words = currentSentence
            .split(" ")
            .sort(() => Math.random() - 0.5);

          questionDiv.innerHTML = words
            .map((word) => `<span>${word}</span>`)
            .join("");
          questionNumberP.textContent = `प्रश्न: ${questionIndex + 1}`;
          questionIndex++;

          Array.from(questionDiv.children).forEach((span) => {
            span.addEventListener("click", () => selectWord(span));
          });
        }

        function selectWord(wordSpan) {
          sortedWordsDiv.appendChild(wordSpan);
          checkSentence();
        }

        function checkSentence() {
          const displayedSentence = Array.from(sortedWordsDiv.children)
            .map((span) => span.textContent)
            .join(" ");
          const currentSentence = allSentences[questionIndex - 1];
          if (
            displayedSentence.split(" ").length ===
            currentSentence.split(" ").length
          ) {
            if (displayedSentence === currentSentence) {
              resultDiv.textContent = "सही! बहुत अच्छा!";
              resultDiv.classList.remove("wrong");
              resultDiv.classList.add("correct");
              sortedWordsDiv.classList.add("correct");
              score++;
            } else {
              resultDiv.textContent = "गलत! पुनः प्रयास करें!";
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
