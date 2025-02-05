<?php include 'header.php'; ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #007BFF;
            padding: 20px;
        }

        .category-container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .category-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .category-header {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
        }

        .category-content {
            padding: 15px;
            display: none;
            animation: fadeIn 0.5s ease forwards;
        }

        .category-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 10px 0;
        }

        .category-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-content ul li {
            margin: 5px 0;
            font-size: 1rem;
            color: #333;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<h1>Level 2: Learn New Words with Images</h1>
<div class="category-container">
    <?php
    // Define categories with names and example images
    $categories = [
        "Domestic Animals" => [
            "Cow", "Dog", "Cat", "Goat", "Sheep", "Horse"
        ],
        "Wild Animals" => [
            "Tiger", "Elephant", "Lion", "Bear", "Deer", "Fox"
        ],
        "Birds" => [
            "Parrot", "Crow", "Peacock", "Sparrow", "Eagle", "Owl"
        ],
        "Days of the Week" => [
            "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
        ],
        "Months of the Year" => [
            "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
        ],
        "Plants" => [
            "Bamboo", "Neem", "Mango Tree", "Cactus", "Pine Tree"
        ],
        "Flowers" => [
            "Rose", "Sunflower", "Tulip", "Lily", "Daisy", "Lotus"
        ],
        "Fruits" => [
            "Apple", "Banana", "Mango", "Orange", "Grapes", "Strawberry"
        ],
        "Vehicles" => [
            "Car", "Bus", "Truck", "Motorcycle", "Bicycle", "Airplane"
        ],
        "Planets" => [
            "Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"
        ],
        "Stationary" => [
            "Pen", "Pencil", "Eraser", "Sharpener", "Notebook", "Ruler"
        ],
        "Colors" => [
            "Red", "Blue", "Green", "Yellow", "Purple", "Black", "White"
        ],
        "Parts of the Body" => [
            "Head", "Eyes", "Nose", "Mouth", "Hands", "Legs", "Heart"
        ]
    ];

    // Generate cards for each category
    foreach ($categories as $category => $items) {
        echo "<div class='category-card'>";
        echo "<div class='category-header'>$category</div>";
        echo "<div class='category-content'>";
        echo "<ul>";
        foreach ($items as $item) {
            // Example image URLs (replace these with actual URLs if available)
            $imageUrl = "https://via.placeholder.com/100?text=" . urlencode($item);
            echo "<li><img src='$imageUrl' alt='$item'> $item</li>";
        }
        echo "</ul>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>

<script>
    // Add click event to toggle content visibility
    const cards = document.querySelectorAll('.category-card');
    cards.forEach(card => {
        const header = card.querySelector('.category-header');
        const content = card.querySelector('.category-content');
        header.addEventListener('click', () => {
            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
        });
    });
</script>

    <style>
        .level-body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height:235vh; 
            margin: 0;
            background-color: #f0f0f0;
            overflow-y:hidden; 
                }

        .alphabet-container {
            display: grid;
            grid-template-columns: repeat(5, 100px);
            gap: 20px;
            justify-content: center;
        }

        .letter {
            font-size: 48px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:white;
            color:black;
            width: 80px;
            height: 80px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            animation: glow 1.5s infinite alternate;
        }
        .letter:hover{
            background-color: black !important;
            color: white;
        }

        .image-container {
            margin-top: 20px;
            text-align: center;
        }

        .image-container img {
            max-width:300px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .image-container p {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .wave-title{
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
            margin-top: 20px;

        }
        .content-section {
        margin-top: 20px;
        text-align: center;
        font-size: 1.2rem;
        color: #444;
    }
    </style>
    <section class="level-body">
    <section>
    <h2 class="wave-title">Alphabet Aa - Zz</h2>
</section>
<div class="alphabet-container">
    <?php foreach (range('A', 'Z') as $uppercase): ?>
        <?php 
            $lowercase = strtolower($uppercase); 
            $letterPair = $uppercase . $lowercase; 
        ?>
        <div class="letter" id="<?php echo $uppercase; ?>">
            <span><?php echo $uppercase; ?></span><br>
            <span style="font-size: 0.8em;"><?php echo $lowercase; ?></span>
        </div>
    <?php endforeach; ?>
</div>


    <div class="image-container">
        <img id="letter-image" src="" alt="" style="display: none;">
        <p id="image-text"></p>
    </div>
    <h2 class="wave-title">Vowels </h2>
    <p>These are the vowels in the English alphabet.</p>
    <section>
        <div class="alphabet-container">
            <div class="letter">Aa</div>
            <div class="letter">Ee</div>
            <div class="letter">Ii</div>
            <div class="letter">Oo</div>
            <div class="letter">Uu</div>
        </div>
        <div class="content-section" style="padding-top:45px;padding-bottom:25px;">
        <h3>Interesting Facts About Vowels</h3>
        <p>Vowels are the building blocks of language and are necessary for forming syllables.</p>
        <p>Each vowel has a unique sound that changes depending on its context in a word.</p>
    </div>
        </div>
        <h2 class="wave-title">Consonant</h2>
        <div class="alphabet-container">
            <div class="letter">Bb</div>
            <div class="letter">Cc</div>
            <div class="letter">Dd</div>
            <div class="letter">Ff</div>
            <div class="letter">Gg</div>
            <div class="letter">Hh</div>
            <div class="letter">Jj</div>
            <div class="letter">Kk</div>
            <div class="letter">Ll</div>
            <div class="letter">Mm</div>
            <div class="letter">Nn</div>
            <div class="letter">Pp</div>
            <div class="letter">Qq</div>
            <div class="letter">Rr</div>
            <div class="letter">Ss</div>
            <div class="letter">Tt</div>
            <div class="letter">Vv</div>
            <div class="letter">Ww</div>
            <div class="letter">Xx</div>
            <div class="letter">Yy</div>
            <div class="letter">Zz</div>
        </div>
    </section>
    </section>
    <script>
        const letters = document.querySelectorAll('.letter');
        const imageContainer = document.querySelector('.image-container');
        const letterImage = document.getElementById('letter-image');
        const imageText = document.getElementById('image-text');

        const letterData = {
            A: { word: "Apple", img: "images/photo/Apple.png?text=Apple" },
            B: { word: "Ball", img: "images/photo/Ball.png?text=ball" },
            C: { word: "Cat", img: "images/photo/Cat.png?text=Cat" },
            D: { word: "Dog", img: "images/photo/dog.jpeg?text=Dog" },
            E: { word: "Elephant", img: "images/photo/elephants.jpeg?text=Elephant" },
            F: { word: "Fish", img: "images/photo/fish.png?text=Fish" },
            G: { word: "Grapes", img: "images/photo/grapes.jpg?text=Grapes" },
            H: { word: "Hat", img: "images/photo/hat.jpg?text=Hat" },
            I: { word: "Ice Cream", img: "images/photo/ice-cream.jpg?text=Ice+Cream" },
            J: { word: "Jug", img: "images/photo/jug.jpeg?text=Jug" },
            K: { word: "Kite", img: "images/photo/kite.jpeg?text=Kite" },
            L: { word: "Lion", img: "images/photo/lion.jpg?text=Lion" },
            M: { word: "Monkey", img: "images/photo/monkey.jpg?text=Monkey" },
            N: { word: "Nest", img: "images/photo/nest.jpg?text=Nest" },
            O: { word: "Orange", img: "images/photo/orange.jpg?text=Orange" },
            P: { word: "Parrot", img: "images/photo/parrot.jpg?text=Parrot" },
            Q: { word: "Queen", img: "images/photo/queen.jpg?text=Queen" },
            R: { word: "Rabbit", img: "images/photo/rabbit.jpg?text=Rabbit" },
            S: { word: "Sun", img: "images/photo/sun.jpeg?text=Sun" },
            T: { word: "Tiger", img: "images/photo/tiger.jpg?text=Tiger" },
            U: { word: "Umbrella", img: "images/photo/umberella.jpg?text=Umbrella" },
            V: { word: "Van", img: "images/photo/van.jpeg?text=Van" },
            W: { word: "Watch", img: "images/photo/watch.jpg?text=Watch" },
            X: { word: "Xylophone", img: "images/photo/xylophone.jpg?text=Xylophone" },
            Y: { word: "Yak", img: "images/photo/yak.jpg?text=Yak" },
            Z: { word: "Zebra", img: "images/photo/zebra.jpg?text=Zebra" }
        };

        letters.forEach(letter => {
            letter.addEventListener('click', (event) => {
                event.preventDefault(); // Prevent scroll
                const letterId = letter.id;
                const data = letterData[letterId];

                if (data) {
                    speakLetter(letterId, data.word);
                    displayImage(data.img, data.word);
                    triggerAnimation(letter);
                }
            });
        });

        function speakLetter(letter, word) {
            const utterance = new SpeechSynthesisUtterance(`${letter} for ${word}`); 
            utterance.lang = 'en-US';
            window.speechSynthesis.speak(utterance);
        }

        function displayImage(imgSrc, word) {
            letterImage.src = imgSrc;
            letterImage.alt = word;
            letterImage.style.display = 'block';
            imageText.textContent = word;
        }

        function triggerAnimation(letter) {
            letter.style.animation = 'bounce 0.6s ease-in-out';
            setTimeout(() => {
                letter.style.animation = '';
            }, 600);
        }
    </script>
<?php include 'footer.php'; ?>