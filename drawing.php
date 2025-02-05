<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Letters Step-by-Step</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .controls {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        canvas {
            border: 1px solid #ccc;
            margin-top: 10px;
        }
        input {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="controls">
        <label for="letterInput">Enter a Letter (A-Z):</label>
        <input type="text" id="letterInput" maxlength="1" oninput="validateInput(this)">
        <button onclick="drawLetter()">Draw Letter</button>
        <canvas id="canvas" width="400" height="400"></canvas>
    </div>

    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        // Validate input to allow only letters
        function validateInput(input) {
            input.value = input.value.replace(/[^a-zA-Z]/g, '');
        }

        // Draw the letter step-by-step
        function drawLetter() {
            const letter = document.getElementById('letterInput').value.toUpperCase();
            if (!letter) {
                alert("Please enter a letter (A-Z).");
                return;
            }

            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.lineWidth = 5;
            ctx.strokeStyle = 'black';

            // Call the corresponding letter drawing function
            if (letter === 'A') {
                drawA();
            } else if (letter === 'B') {
                drawB();
            } else if (letter === 'C') {
                drawC();
            } else if (letter === 'D') {
                drawD();
            } else if (letter === 'E') {
                drawE();
            } else if (letter === 'F') {
                drawF();
            } else if (letter === 'G') {
                drawG();
            } else if (letter === 'H') {
                drawH();
            } else if (letter === 'I') {
                drawI();
            } else if (letter === 'J') {
                drawJ();
            } else if (letter === 'K') {
                drawK();
            } else if (letter === 'L') {
                drawL();
            } else if (letter === 'M') {
                drawM();
            } else if (letter === 'N') {
                drawN();
            } else if (letter === 'O') {
                drawO();
            } else if (letter === 'P') {
                drawP();
            } else if (letter === 'Q') {
                drawQ();
            } else if (letter === 'R') {
                drawR();
            } else if (letter === 'S') {
                drawS();
            } else if (letter === 'T') {
                drawT();
            } else if (letter === 'U') {
                drawU();
            } else if (letter === 'V') {
                drawV();
            } else if (letter === 'W') {
                drawW();
            } else if (letter === 'X') {
                drawX();
            } else if (letter === 'Y') {
                drawY();
            } else if (letter === 'Z') {
                drawZ();
            } else {
                alert("Please enter a valid letter (A-Z).");
            }
        }

        // Letter Drawing Functions
        function drawA() {
            const steps = [
                () => ctx.moveTo(200, 50),
                () => ctx.lineTo(150, 300),
                () => ctx.moveTo(200, 50),
                () => ctx.lineTo(250, 300),
                () => ctx.moveTo(170, 175),
                () => ctx.lineTo(230, 175),
            ];
            animateSteps(steps);
        }

        function drawB() {
            const steps = [
                () => ctx.moveTo(150, 50),
                () => ctx.lineTo(150, 300),
                () => ctx.arc(150, 100, 50, Math.PI * 1.5, Math.PI * 0.5),
                () => ctx.arc(150, 200, 50, Math.PI * 1.5, Math.PI * 0.5),
            ];
            animateSteps(steps);
        }

        function drawC() {
            const steps = [
                () => ctx.arc(200, 150, 100, Math.PI * 1.5, Math.PI * 2.5),
            ];
            animateSteps(steps);
        }

        function drawD() {
            const steps = [
                () => ctx.moveTo(150, 50),
                () => ctx.lineTo(150, 300),
                () => ctx.arc(150, 150, 100, Math.PI * 1.5, Math.PI * 0.5),
            ];
            animateSteps(steps);
        }

        function drawE() {
            const steps = [
                () => ctx.moveTo(150, 50),
                () => ctx.lineTo(150, 300),
                () => ctx.moveTo(150, 50),
                () => ctx.lineTo(250, 50),
                () => ctx.moveTo(150, 175),
                () => ctx.lineTo(250, 175),
                () => ctx.moveTo(150, 300),
                () => ctx.lineTo(250, 300),
            ];
            animateSteps(steps);
        }

        function drawF() {
            const steps = [
                () => ctx.moveTo(150, 50),
                () => ctx.lineTo(150, 300),
                () => ctx.moveTo(150, 50),
                () => ctx.lineTo(250, 50),
                () => ctx.moveTo(150, 175),
                () => ctx.lineTo(250, 175),
            ];
            animateSteps(steps);
        }
        function animateSteps(steps) {
            let i = 0;
            function drawStep() {
                if (i < steps.length) {
                    steps[i]();
                    ctx.stroke();
                    i++;
                    setTimeout(drawStep, 500); 
                }
            }
            ctx.beginPath();
            drawStep();
        }
    </script>
</body>
</html>