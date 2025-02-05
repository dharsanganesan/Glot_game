<?php include 'header.php'; ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        #game-container {
            margin: 20px auto;
            width: 90%;
            max-width: 800px;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px gray;
            border-radius: 10px;
            animation: fadeIn 1s;
        }
        .animal-box {
            display: inline-block;
            margin: 10px;
        }
        .animal-box img {
            width: 100px;
            height: 100px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .animal-box img:not(.dragging):hover {
            transform: scale(1.1);
        }
        .category-box {
            display: inline-block;
            width: 200px;
            min-height: 150px;
            background: #f0f0f0;
            padding: 10px;
            margin: 20px;
            border: 2px dashed #999;
            border-radius: 10px;
            transition: background 0.3s;
        }
        .category-box img {
            width: 80px; /* Resize images inside the box */
            height: 80px;
            margin: 5px;
        }
        .category-box:hover {
            background: #ddd;
        }
        .correct {
            background: #28a745 !important;
            animation: correctFlash 0.5s;
        }
        .wrong {
            background: #dc3545 !important;
            animation: wrongShake 0.5s;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: #0056b3;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes correctFlash {
            0% { background: #28a745; }
            50% { background: #fff; }
            100% { background: #28a745; }
        }
        @keyframes wrongShake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>

    <h2>पशु मिलान खेल</h2>
    <div id="game-container">
        <p>पशुओं को सही श्रेणी में खींचकर छोड़ें।</p>
        <div class="category-box" id="domestic-zone" ondrop="drop(event, 'domestic')" ondragover="allowDrop(event)">पालतू पशु</div>
        <div class="category-box" id="sea-zone" ondrop="drop(event, 'sea')" ondragover="allowDrop(event)">समुद्री जीव</div>
        <div class="category-box" id="wild-zone" ondrop="drop(event, 'wild')" ondragover="allowDrop(event)">जंगली जानवर</div>
        <div id="animal-container">
            <div class="animal-box"><img id="cow" src="images\cow.jpg" alt="गाय" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" data-type="domestic"></div>
            <div class="animal-box"><img id="dog" src="images\dog.jpg" alt="कुत्ता" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" data-type="domestic"></div>
            <div class="animal-box"><img id="shark" src="images\shark.jpg" alt="शार्क" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" data-type="sea"></div>
            <div class="animal-box"><img id="dolphin" src="images\dolpinhe.jpg" alt="डॉल्फिन" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" data-type="sea"></div>
            <div class="animal-box"><img id="lion" src="images\photo\lion.jpg" alt="सिंह" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" data-type="wild"></div>
            <div class="animal-box"><img id="elephant" src="images\photo\elephants.jpeg" alt="हाथी" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" data-type="wild"></div>
        </div>
        <button onclick="checkAnswers()">उत्तर जाँचें</button>
        <p id="result"></p>
    </div>

    <script>
        function allowDrop(event) {
            event.preventDefault();
        }

        function drag(event) {
            event.dataTransfer.setData("text", event.target.id);
            event.target.classList.add("dragging"); // Add dragging class
        }

        function dragEnd(event) {
            event.target.classList.remove("dragging"); // Remove dragging class
        }

        function drop(event, category) {
            event.preventDefault();
            let data = event.dataTransfer.getData("text");
            let animal = document.getElementById(data);
            let animalType = animal.getAttribute("data-type");

            if (animalType === category) {
                event.target.appendChild(animal);
                event.target.classList.add("correct");
                setTimeout(() => event.target.classList.remove("correct"), 500); // Remove correct class after animation
            } else {
                event.target.classList.add("wrong");
                setTimeout(() => event.target.classList.remove("wrong"), 500); // Remove wrong class after animation
            }
        }

        function checkAnswers() {
            let domesticZone = document.getElementById("domestic-zone");
            let seaZone = document.getElementById("sea-zone");
            let wildZone = document.getElementById("wild-zone");

            let domesticAnimals = Array.from(domesticZone.children).map(e => e.alt);
            let seaAnimals = Array.from(seaZone.children).map(e => e.alt);
            let wildAnimals = Array.from(wildZone.children).map(e => e.alt);

            let correctDomestic = domesticAnimals.length === 2;
            let correctSea = seaAnimals.length === 2;
            let correctWild = wildAnimals.length === 2;

            if (correctDomestic && correctSea && correctWild) {
                document.getElementById("result").textContent = "बहुत अच्छा! सभी जानवर सही श्रेणियों में हैं।";
            } else {
                document.getElementById("result").textContent = "कुछ जानवर गलत श्रेणी में हैं। पुनः प्रयास करें!";
            }
        }
    </script>

</body>
</html>