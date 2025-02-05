<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            position: relative;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradient background */
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1); /* Light transparent background */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            z-index: 10;
            backdrop-filter: blur(10px);
        }

        h2 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 24px;
        }

        input, button {
            width: 90%;
            margin-bottom: 15px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 15px;
            font-size: 16px;
            outline: none;
        }
        input:focus{
            width: 100%;
            border: 3px solid #ff7f50;
        }

        input {
            background-color: rgba(255, 255, 255, 0.8);
        }

        button {
            background-color: #ff7f50; /* Coral button */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e56742; /* Slightly darker coral */
        }

        canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="login_process.php" method="POST">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="text" name="permanent_code" placeholder="Enter Permanent Code" required>
            <input type="hidden" name="action" value="login">
            <button type="submit">Login</button>
        </form>
    </div>
    <canvas id="background"></canvas>

    <script>
        const canvas = document.getElementById('background');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const particles = [];
        const mouse = {
            x: null,
            y: null,
            radius: 150 // Mouse interaction radius
        };

        // Mouse move listener
        window.addEventListener('mousemove', (event) => {
            mouse.x = event.clientX;
            mouse.y = event.clientY;
        });

        // Mouse out listener
        window.addEventListener('mouseout', () => {
            mouse.x = null;
            mouse.y = null;
        });

        class Particle {
            constructor(x, y, radius, color, velocity) {
                this.x = x;
                this.y = y;
                this.radius = radius;
                this.color = color;
                this.velocity = velocity;
                this.opacity = Math.random() * 0.6 + 0.3;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                ctx.fillStyle = `rgba(${this.color.r}, ${this.color.g}, ${this.color.b}, ${this.opacity})`;
                ctx.fill();
                ctx.closePath();
            }

            update() {
                // Move the particle
                this.x += this.velocity.x;
                this.y += this.velocity.y;

                // Reverse direction if it hits the canvas boundary
                if (this.x - this.radius < 0 || this.x + this.radius > canvas.width) {
                    this.velocity.x = -this.velocity.x;
                }
                if (this.y - this.radius < 0 || this.y + this.radius > canvas.height) {
                    this.velocity.y = -this.velocity.y;
                }

                // Calculate distance from mouse
                const dx = mouse.x - this.x;
                const dy = mouse.y - this.y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < mouse.radius) {
                    const angle = Math.atan2(dy, dx);
                    const force = (mouse.radius - distance) / mouse.radius;
                    const forceX = Math.cos(angle) * force * 10; // Repel force
                    const forceY = Math.sin(angle) * force * 10;

                    this.x -= forceX;
                    this.y -= forceY;
                }

                this.draw();
            }
        }

        function connectParticles() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const distance = Math.sqrt(
                        Math.pow(particles[i].x - particles[j].x, 2) +
                        Math.pow(particles[i].y - particles[j].y, 2)
                    );

                    if (distance < 120) {
                        const opacity = 1 - distance / 120;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = `rgba(255, 255, 255, ${opacity})`;
                        ctx.lineWidth = 1;
                        ctx.stroke();
                        ctx.closePath();
                    }
                }
            }
        }

        function init() {
            const colors = [
                { r: 255, g: 99, b: 71 },   // Tomato
                { r: 135, g: 206, b: 235 }, // SkyBlue
                { r: 60, g: 179, b: 113 },  // MediumSeaGreen
                { r: 255, g: 215, b: 0 }    // Gold
            ];

            for (let i = 0; i < 100; i++) {
                const radius = Math.random() * 5 + 2;
                const x = Math.random() * (canvas.width - radius * 2) + radius;
                const y = Math.random() * (canvas.height - radius * 2) + radius;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const velocity = {
                    x: (Math.random() - 0.5) * 1,
                    y: (Math.random() - 0.5) * 1
                };
                particles.push(new Particle(x, y, radius, color, velocity));
            }
        }

        function animate() {
            requestAnimationFrame(animate);
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            particles.forEach(particle => {
                particle.update();
            });

            connectParticles();
        }

        init();
        animate();

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            particles.length = 0;
            init();
        });
    </script>
</body>
</html>
