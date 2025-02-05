<?php include 'header.php'; ?>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f8ff;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #333;
    }

    .container {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    img {
      width: 500px;
      height: 500px;
      border: 3px solid #4CAF50;
    }

    canvas {
      border: 3px solid #4CAF50;
      background-color: white;
    }

    #controls {
      margin-top: 20px;
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    #controls button {
      padding: 10px 20px;
      font-size: 18px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    #score {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
      color: #ff5722;
    }

    #confetti-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
    }

    .confetti {
      position: absolute;
      width: 10px;
      height: 10px;
      background-color: red;
      opacity: 0.8;
      border-radius: 50%;
      animation: fall linear 3s forwards;
    }

    @keyframes fall {
      to {
        transform: translateY(100vh);
        opacity: 0;
      }
    }
  </style>
</head>
<body>
  <h1>Hindi Letter Tracing Game</h1>
  <div class="container">
    <img id="referenceImage" src="images/Screenshots/h1.jpg" alt="Reference Image">
    <canvas id="tracingCanvas" width="500" height="500"></canvas>
  </div>
  <div id="score">Score: 0</div>
  <div id="controls">
    <button id="previousButton">Previous Letter</button>
    <button id="retryButton">Retry</button>
    <button id="checkButton">Check</button>
    <button id="nextButton">Next Letter</button>
  </div>

  <div id="confetti-container"></div>

  <script>
    const canvas = document.getElementById('tracingCanvas');
    const ctx = canvas.getContext('2d');
    const nextButton = document.getElementById('nextButton');
    const previousButton = document.getElementById('previousButton');
    const retryButton = document.getElementById('retryButton');
    const checkButton = document.getElementById('checkButton');
    const scoreDisplay = document.getElementById('score');
    const confettiContainer = document.getElementById('confetti-container');
    const referenceImage = document.getElementById('referenceImage');

    const hindiLetters = ['अ', 'आ', 'इ', 'ई', 'उ', 'ऊ', 'ऋ', 'ए', 'ऐ', 'ओ', 'औ', 'अं', 'अः',
      'क', 'ख', 'ग', 'घ', 'ङ', 'च', 'छ', 'ज', 'झ', 'ञ', 'ट', 'ठ', 'ड', 'ढ', 'ण',
      'त', 'थ', 'द', 'ध', 'न', 'प', 'फ', 'ब', 'भ', 'म', 'य', 'र', 'ल', 'व', 'श', 'ष', 'स', 'ह',
      'क्ष', 'त्र', 'ज्ञ'];

    // Array of image paths corresponding to the Hindi letters
    const imagePaths = [
      "images/Screenshots/h1.jpg", // Image for अ
      "images/Screenshots/h2.jpg", // Image for आ
      "images/Screenshots/h3.jpg", // Image for इ
      "images/Screenshots/h4.jpg", // Image for ई
      "images/Screenshots/h5.jpg",
      "images/Screenshots/h6.jpg",
      "images/Screenshots/h33.jpg",
      "images/Screenshots/h8.jpg",
      "images/Screenshots/h8-1.jpg",
      "images/Screenshots/h10.jpg",
      "images/Screenshots/h11.jpg",
      "images/Screenshots/h34.jpg",
      "images/Screenshots/h35.jpg",
      "images/Screenshots/h12.png",
      "images/Screenshots/h13.png",
      "images/Screenshots/h14.png",
      "images/Screenshots/h15.png",
      "images/Screenshots/h16.png",
      "images/Screenshots/h17.png",
      "images/Screenshots/h18.png",
      "images/Screenshots/h19.png",
      "images/Screenshots/h20.png",
      "images/Screenshots/h21.png",
      "images/Screenshots/h22.png",
      "images/Screenshots/h23.png",
      "images/Screenshots/h24.png",
      "images/Screenshots/h25.png",
      "images/Screenshots/h54.jpg",
      "images/Screenshots/h26.png",
      "images/Screenshots/h27.png",
      "images/Screenshots/h28.png",
      "images/Screenshots/h29.png",
      "images/Screenshots/h30.png",
      "images/Screenshots/h31.png", 
      "images/Screenshots/h32.png",
      "images/Screenshots/h36.jpg",
      "images/Screenshots/h37.jpg",
      "images/Screenshots/h38.jpg",
      "images/Screenshots/h39.jpg",
      "images/Screenshots/h40.jpg",
      "images/Screenshots/h41.jpg",
      "images/Screenshots/h42.jpg",
      "images/Screenshots/h43.jpg",
      "images/Screenshots/h44.jpg",
      "images/Screenshots/h51.jpg",
      "images/Screenshots/h46.jpg",
      "images/Screenshots/h52.jpg",
      "images/Screenshots/h48.jpg",
      "images/Screenshots/h53.jpg",
    ];

    let currentLetterIndex = 0;
    let isDrawing = false;
    let drawnPixels = 0;

    // Function to draw the current letter on the canvas
    function drawLetter() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.font = "200px Arial";
      ctx.textAlign = "center";
      ctx.textBaseline = "middle";
      ctx.fillStyle = "rgba(0, 0, 0, 0.2)";
      ctx.fillText(hindiLetters[currentLetterIndex], canvas.width / 2, canvas.height / 2);
    }

    // Function to clear the canvas and reset the score
    function clearCanvas() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      drawLetter();
      drawnPixels = 0;
      updateScore(0);
    }

    // Function to change the current letter
    function changeLetter(step) {
      currentLetterIndex = (currentLetterIndex + step + hindiLetters.length) % hindiLetters.length;
      clearCanvas();
      // Update the reference image
      referenceImage.src = imagePaths[currentLetterIndex];
    }

    // Function to update the score
    function updateScore(score) {
      scoreDisplay.textContent = "Score: " + score;
      if (score >= 80) {
        triggerConfetti();
      }
    }

    // Function to check the drawing against the reference letter
    function checkDrawing() {
      let imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
      let pixels = imageData.data;
      let blackPixels = 0;
      let totalPixels = pixels.length / 4;

      // Create a reference canvas to compare against
      let referenceCanvas = document.createElement('canvas');
      referenceCanvas.width = canvas.width;
      referenceCanvas.height = canvas.height;
      let referenceCtx = referenceCanvas.getContext('2d');

      // Draw the reference letter on the reference canvas
      referenceCtx.font = "200px Arial";
      referenceCtx.textAlign = "center";
      referenceCtx.textBaseline = "middle";
      referenceCtx.fillStyle = "black";
      referenceCtx.fillText(hindiLetters[currentLetterIndex], referenceCanvas.width / 2, referenceCanvas.height / 2);

      let referenceImageData = referenceCtx.getImageData(0, 0, referenceCanvas.width, referenceCanvas.height);
      let referencePixels = referenceImageData.data;

      let matchedPixels = 0;
      let totalLetterPixels = 0;

      for (let i = 0; i < pixels.length; i += 4) {
        let r = pixels[i];
        let g = pixels[i + 1];
        let b = pixels[i + 2];

        let refR = referencePixels[i];
        let refG = referencePixels[i + 1];
        let refB = referencePixels[i + 2];

        if (refR === 0 && refG === 0 && refB === 0) {
          totalLetterPixels++;
          if (r === 0 && g === 0 && b === 0) {
            matchedPixels++;
          }
        }
      }

      // Add randomness to the score calculation
      let randomFactor = Math.random() * 20; // Random value between 0 and 20
      let score = Math.min(Math.round((matchedPixels / totalLetterPixels) * 100 + randomFactor), 100);
      updateScore(score);
    }

    // Function to trigger confetti animation
    function triggerConfetti() {
      for (let i = 0; i < 100; i++) {
        let confetti = document.createElement("div");
        confetti.classList.add("confetti");
        confetti.style.left = Math.random() * window.innerWidth + "px";
        confetti.style.top = "-10px";
        confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
        confetti.style.animationDuration = Math.random() * 2 + 1 + "s";
        confettiContainer.appendChild(confetti);

        setTimeout(() => {
          confetti.remove();
        }, 3000);
      }
    }

    // Event listeners for buttons
    nextButton.addEventListener('click', () => changeLetter(1));
    previousButton.addEventListener('click', () => changeLetter(-1));
    retryButton.addEventListener('click', clearCanvas);
    checkButton.addEventListener('click', checkDrawing);

    // Event listeners for drawing on the canvas
    canvas.addEventListener('mousedown', () => {
      isDrawing = true;
    });

    canvas.addEventListener('mouseup', () => {
      isDrawing = false;
    });

    canvas.addEventListener('mousemove', (e) => {
      if (!isDrawing) return;
      const x = e.offsetX;
      const y = e.offsetY;
      ctx.beginPath();
      ctx.arc(x, y, 5, 0, 2 * Math.PI);
      ctx.fillStyle = "black";
      ctx.fill();
      drawnPixels++;
    });

    // Initialize the game
    drawLetter();
  </script>
</body>
</html>