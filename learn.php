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
    </style>
</head>
<body>
    <div class="controls">
        <label for="letterInput">Enter a Letter:</label>
        <input type="text" id="letterInput" maxlength="1">
        <button onclick="drawLetter()">Draw Letter</button>
        <canvas id="canvas" width="400" height="400"></canvas>
    </div>

    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        function drawLetter() {
            const letter = document.getElementById('letterInput').value.toUpperCase();
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.font = '150px Arial';
            ctx.fillStyle = 'black';

            // Calling corresponding letter drawing functions
            if (letter === 'A') {
                drawStepA();
            } else if (letter === 'B') {
                drawStepB();
            } else if (letter === 'C') {
                drawStepC();
            } else if (letter === 'D') {
                drawStepD();
            } else if (letter === 'E') {
                drawStepE();
            } else if (letter === 'F') {
                drawStepF();
            } else if (letter === 'G') {
                drawStepG();
            } else if (letter === 'H') {
                drawStepH();
            } else if (letter === 'I') {
                drawStepI();
            } else if (letter === 'J') {
                drawStepJ();
            } else if (letter === 'K') {
                drawStepK();
            } else if (letter === 'L') {
                drawStepL();
            } else if (letter === 'M') {
                drawStepM();
            } else if (letter === 'N') {
                drawStepN();
            } else if (letter === 'O') {
                drawStepO();
            } else if (letter === 'P') {
                drawStepP();
            } else if (letter === 'Q') {
                drawStepQ();
            } else if (letter === 'R') {
                drawStepR();
            } else if (letter === 'S') {
                drawStepS();
            } else if (letter === 'T') {
                drawStepT();
            } else if (letter === 'U') {
                drawStepU();
            } else if (letter === 'V') {
                drawStepV();
            } else if (letter === 'W') {
                drawStepW();
            } else if (letter === 'X') {
                drawStepX();
            } else if (letter === 'Y') {
                drawStepY();
            } else if (letter === 'Z') {
                drawStepZ();
            }
        }

        function drawStepA() {
            ctx.beginPath();
            ctx.moveTo(200, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(200, 50);
                ctx.lineTo(250, 300);
                ctx.stroke();
                setTimeout(() => {
                    ctx.beginPath();
                    ctx.moveTo(170, 175);
                    ctx.lineTo(230, 175);
                    ctx.stroke();
                }, 1000);
            }, 1000);
        }

        function drawStepB() {
            ctx.beginPath();
            ctx.moveTo(150, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.arc(150, 100, 50, Math.PI * 1.5, Math.PI * 0.5);
                ctx.stroke();
                setTimeout(() => {
                    ctx.beginPath();
                    ctx.arc(150, 200, 50, Math.PI * 1.5, Math.PI * 0.5);
                    ctx.stroke();
                }, 1000);
            }, 1000);
        }

        function drawStepC() {
            ctx.beginPath();
            ctx.arc(200, 150, 100, Math.PI * 1.5, Math.PI * 2);
            ctx.stroke();
        }

        function drawStepD() {
            ctx.beginPath();
            ctx.moveTo(150, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.arc(150, 150, 100, Math.PI * 1.5, Math.PI * 0.5);
                ctx.stroke();
            }, 1000);
        }

        function drawStepE() {
            ctx.beginPath();
            ctx.moveTo(150, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 50);
                ctx.lineTo(250, 50);
                ctx.stroke();
                setTimeout(() => {
                    ctx.beginPath();
                    ctx.moveTo(150, 175);
                    ctx.lineTo(250, 175);
                    ctx.stroke();
                    setTimeout(() => {
                        ctx.beginPath();
                        ctx.moveTo(150, 300);
                        ctx.lineTo(250, 300);
                        ctx.stroke();
                    }, 1000);
                }, 1000);
            }, 1000);
        }

        function drawStepF() {
            ctx.beginPath();
            ctx.moveTo(150, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 50);
                ctx.lineTo(250, 50);
                ctx.stroke();
                setTimeout(() => {
                    ctx.beginPath();
                    ctx.moveTo(150, 175);
                    ctx.lineTo(250, 175);
                    ctx.stroke();
                }, 1000);
            }, 1000);
        }

        // Continue with similar drawing functions for letters G to Z...
    
    // Continue from where we left off

    function drawStepG() {
        ctx.beginPath();
        ctx.arc(200, 150, 100, Math.PI * 1.5, Math.PI * 2);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(100, 200);
            ctx.lineTo(250, 200);
            ctx.stroke();
        }, 1000);
    }

    function drawStepH() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 50);
            ctx.lineTo(250, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 175);
                ctx.lineTo(250, 175);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepI() {
        ctx.beginPath();
        ctx.moveTo(200, 50);
        ctx.lineTo(200, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(150, 50);
            ctx.lineTo(250, 50);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 300);
                ctx.lineTo(250, 300);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepJ() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 200);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.arc(150, 200, 50, Math.PI, Math.PI * 1.5);
            ctx.stroke();
        }, 1000);
    }

    function drawStepK() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(150, 175);
            ctx.lineTo(250, 50);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 175);
                ctx.lineTo(250, 300);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepL() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(150, 300);
            ctx.lineTo(250, 300);
            ctx.stroke();
        }, 1000);
    }

    function drawStepM() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(150, 175);
            ctx.lineTo(200, 50);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(200, 50);
                ctx.lineTo(250, 175);
                ctx.stroke();
                setTimeout(() => {
                    ctx.beginPath();
                    ctx.moveTo(250, 175);
                    ctx.lineTo(250, 300);
                    ctx.stroke();
                }, 1000);
            }, 1000);
        }, 1000);
    }

    function drawStepN() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(150, 50);
            ctx.lineTo(250, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(250, 50);
                ctx.lineTo(250, 300);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepO() {
        ctx.beginPath();
        ctx.arc(200, 150, 100, 0, Math.PI * 2);
        ctx.stroke();
    }

    function drawStepP() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.arc(150, 100, 50, Math.PI * 1.5, Math.PI * 0.5);
            ctx.stroke();
        }, 1000);
    }

    function drawStepQ() {
        ctx.beginPath();
        ctx.arc(200, 150, 100, 0, Math.PI * 2);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 250);
            ctx.lineTo(350, 350);
            ctx.stroke();
        }, 1000);
    }

    function drawStepR() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.arc(150, 100, 50, Math.PI * 1.5, Math.PI * 0.5);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 175);
                ctx.lineTo(250, 300);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepS() {
        ctx.beginPath();
        ctx.arc(150, 150, 100, Math.PI, Math.PI * 1.5);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.arc(150, 150, 100, Math.PI * 0.5, Math.PI);
            ctx.stroke();
        }, 1000);
    }

    function drawStepT() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(250, 50);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(200, 50);
            ctx.lineTo(200, 300);
            ctx.stroke();
        }, 1000);
    }

    function drawStepU() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 50);
            ctx.lineTo(250, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.arc(200, 300, 50, Math.PI, Math.PI * 1.5);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepV() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(200, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 50);
            ctx.lineTo(200, 300);
            ctx.stroke();
        }, 1000);
    }

    function drawStepW() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(150, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(150, 175);
            ctx.lineTo(200, 50);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(200, 50);
                ctx.lineTo(250, 175);
                ctx.stroke();
                setTimeout(() => {
                    ctx.beginPath();
                    ctx.moveTo(250, 175);
                    ctx.lineTo(250, 300);
                    ctx.stroke();
                }, 1000);
            }, 1000);
        }, 1000);
    }

    function drawStepX() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(250, 300);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
        }, 1000);
    }

    function drawStepY() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(200, 175);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 50);
            ctx.lineTo(200, 175);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(200, 175);
                ctx.lineTo(200, 300);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    function drawStepZ() {
        ctx.beginPath();
        ctx.moveTo(150, 50);
        ctx.lineTo(250, 50);
        ctx.stroke();
        setTimeout(() => {
            ctx.beginPath();
            ctx.moveTo(250, 50);
            ctx.lineTo(150, 300);
            ctx.stroke();
            setTimeout(() => {
                ctx.beginPath();
                ctx.moveTo(150, 300);
                ctx.lineTo(250, 300);
                ctx.stroke();
            }, 1000);
        }, 1000);
    }

    </script>
</body>
</html>