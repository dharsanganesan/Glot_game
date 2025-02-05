<?php include("header.php") ?>
<style>
    .body-en {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
        position: relative;
    }

    .switch-container {
        position: relative;
        width: 250px;
        height: 650px;
    }

    .container {
        position: absolute;
        width: 225px;
        height: 75px;
        background: linear-gradient(145deg, #A8E6A3, #388E3C);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2), -5px -5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: white;
    }

    .container.left {
        left: -265px;
    }

    .container.right {
        right: -265px;
    }

    .line {
        position: absolute;
        width: 2px;
        background-color: #808080;
        transition: all 0.3s ease;
        z-index: -1;
        opacity: 0;
    }

    .ring {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: linear-gradient(145deg, #ADD8E6, #1E3A8A);
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        position: absolute;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2), -5px -5px 15px rgba(0, 0, 0, 0.1);
    }

    .ring.active {
        background: linear-gradient(145deg, #4CAF50, #388E3C);
        box-shadow: 8px 8px 18px rgba(0, 0, 0, 0.3), -8px -8px 18px rgba(0, 0, 0, 0.15);
        transform: scale(1.1);
    }

    .ring p {
        margin: 0;
        font-size: 16px;
        color: white;
        font-weight: bold;
    }

    #level1 { top: 0; left: 0; }
    #level2 { top: 113px; left: 189px; }
    #level3 { top: 226px; left: 0; }
    #level4 { top: 339px; left: 189px; }
    #level5 { top: 452px; left: 0; }
</style>

<section class="body-en">
    <div class="switch-container">

       <a href="level-1.php" ><div class="ring" id="level1" onclick="activateLevel(1)">
            <p>Level 1</p>
        </div></a>
        <a href="level 2.php" ><div class="ring" id="level2" onclick="activateLevel(2)">
            <p>Level 2</p>
        </div></a>
        <a href="level3.php" ><div class="ring" id="level3" onclick="activateLevel(3)">
            <p>Level 3</p>
        </div></a>
        <a href="level4.php" ><div class="ring" id="level4" onclick="activateLevel(4)">
            <p>Level 4</p>
        </div></a>
    </div>
</section>

<script>
    let activeRing = null;
    const lines = [];

    // Calculate positions of the levels
    const levelPositions = [
        { top: 0, left: 0 },
        { top: 113, left: 189 },
        { top: 226, left: 0 },
        { top: 339, left: 189 },
        { top: 452, left: 0 }
    ];

    // Predefined file names (or text) corresponding to each level
    const levelFiles = [
        "Get started l1",   // File for Level 1
        "Get started l2",   // File for Level 2
        "Get started l3",   // File for Level 3
        "Get started l4",   // File for Level 4
    ];

    // Function to activate the ring when clicked
    function activateLevel(level) {
        const ring = document.getElementById(`level${level}`);

        // If there's already an active ring, remove the dark effect from it
        if (activeRing !== null && activeRing !== ring) {
            activeRing.classList.remove('dark');
            activeRing.classList.remove('active');
        }

        // Add the dark effect to the clicked ring
        ring.classList.add('dark');
        ring.classList.add('active');

        // Change the text to show the file name for the clicked level
        const fileName = levelFiles[level - 1]; // Fetch file name based on the clicked level
        const p = ring.querySelector("p");
        p.textContent = fileName; // Update the text inside the ring

        // Update the active ring to the current one
        activeRing = ring;

        // Connect the levels with animated lines
        connectLevels(level);
    }

    // Function to connect the levels with animated lines
    function connectLevels(level) {
        // Clear previous lines
        lines.forEach(line => line.remove());
        lines.length = 0;

        // Create lines between levels
        for (let i = 1; i < level; i++) {
            const line = document.createElement('div');
            line.classList.add('line');

            const start = levelPositions[i - 1];
            const end = levelPositions[i];

            const width = Math.abs(end.left - start.left);
            const height = Math.abs(end.top - start.top);
            
            line.style.height = `${height}px`;
            line.style.left = `${Math.min(start.left, end.left)}px`;
            line.style.top = `${Math.min(start.top, end.top)}px`;
            line.style.width = `${width}px`;
            line.style.opacity = '1';

            document.querySelector('.switch-container').appendChild(line);
            lines.push(line);
        }
    }
</script>
