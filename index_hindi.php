<?php include 'header.php'; ?>
<style>
    .body-hindi {
    font-family: 'Arial', sans-serif;
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
    width: 250px; /* Adjusted width for more horizontal space */
    height: 650px; /* Height to accommodate circles with 3 cm vertical gap */
}

/* 3D Containers */
.container {
    position: absolute;
    width: 225px; /* 6 cm width */
    height: 75px; /* 2 cm height */
    background: linear-gradient(145deg, #A8E6A3, #388E3C); /* Light green gradient */
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2), -5px -5px 15px rgba(0, 0, 0, 0.1); /* 3D effect */
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

/* Left-side Containers */
.container.left {
    left: -265px; /* Position the container 7 cm (265px) left */
}

/* Right-side Containers */
.container.right {
    right: -265px; /* Position the container 7 cm (265px) right */
}

/* Lines connecting levels */
.line {
    position: absolute;
    width: 2px; /* 2 cm width for the line */
    background-color: #808080; /* Grey color for the line */
    transition: all 0.3s ease;
    z-index: -1; /* Make sure the line stays behind the rings */
}

/* Style for the rings */
.ring {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(145deg, #ADD8E6, #1E3A8A); /* Light blue to dark blue gradient */
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    position: absolute;
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2), -5px -5px 15px rgba(0, 0, 0, 0.1); /* 3D effect */
}

/* Active state for the ring */
.ring.active {
    background: linear-gradient(145deg, #4CAF50, #388E3C); /* Green gradient when active */
    box-shadow: 8px 8px 18px rgba(0, 0, 0, 0.3), -8px -8px 18px rgba(0, 0, 0, 0.15); /* Deeper shadow when active */
    transform: scale(1.1); /* Slightly enlarge the active circle */
}

/* Dark color animation for the first ring on click */
.ring1.dark {
    background: linear-gradient(145deg, #333333, #1E1E1E); /* Darker gradient */
    box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.4), -8px -8px 20px rgba(0, 0, 0, 0.2); /* Darker shadow */
    transform: scale(1.1);
    transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
}

/* Text inside the rings */
.ring p {
    margin: 0;
    font-size: 16px;
    color: white; /* White text inside the circle */
    font-weight: bold;
}

/* Zigzag positioning with 3 cm (113px) vertical gap and 5 cm (189px) horizontal gap */
#level1 {
    top: 0;
    left: 0;
}

#level2 {
    top: 113px; /* 3 cm vertical gap */
    left: 189px; /* 5 cm horizontal gap */
}

#level3 {
    top: 226px; /* 2 * 113px for 3 cm vertical gap */
    left: 0;
}

#level4 {
    top: 339px; /* 3 * 113px */
    left: 189px; /* 5 cm horizontal gap */
}

#level5 {
    top: 452px; /* 4 * 113px */
    left: 0;
}


</style>
<section class="body-hindi">
  
<div class="switch-container">
    
<a href="hindi.php"><div class="ring" id="level1" onclick="activateLevel(1)">
            <p>लेवल  1</p>
        </div></a>
        <a href="wordsinhindi.php" ><div class="ring" id="level2" onclick="activateLevel(2)">
            <p>लेवल 2</p>
        </div></a>
        <a href="hindi level 3.php" ><div class="ring" id="level3" onclick="activateLevel(3)">
            <p>लेवल 3</p>
        </div></a>
        <a href="level4 hindi.php" ><div class="ring" id="level4" onclick="activateLevel(4)">
            <p>लेवल 4</p>
        </div></a>
</div>

<script>
    let activeRing = null;  // Variable to keep track of the currently active ring

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

    // Update the active ring to the current one
    activeRing = ring;
}

</script>
</section>
</html>
