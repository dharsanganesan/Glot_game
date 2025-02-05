<?php include 'header.php';?>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .category {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0 10px;
        }

        .alphabet-container {
            display: grid;
            grid-template-columns: repeat(5, 120px);
            gap: 30px;
            justify-content: center;
        }

        .letter {
    font-size: 16px;
    font-weight: bold;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: grey;
    color: black;
    width: 135px;
    height: 160px;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    text-align: center;
    padding: 10px;
}
        .letter img {
            width: 70px;
            height: 70px;
            margin-bottom: 10px;
        }

        .letter:hover {
            transform: scale(1.2);
        }
        .btn-index {
        position: relative;
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        color: black;
        background: transparent;
        border: 2px solid #111191;
        font-weight: 700;
        border-radius: 5px;
        cursor: pointer;
        overflow: hidden;
        background-size: 300% 100%;
        transition: background-position 0.6s ease-in-out;
    }

    .btn-index:hover {
        background-position: left;
        background-position: right;
        background-image: linear-gradient(to right, #6a11cb, #2575fc);
        color: white;
        border: none !important;
    }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <div class="category">स्वर (Vowels)</div>
    <div class="alphabet-container">
        <div class="letter" id="अ" data-word="अनार (Pomegranate)">
            <img src="images/hindi/pomegranate.jpg" alt="Anar Image"> 
            अ <br> अनार (Pomegranate)
        </div>
        <div class="letter" id="आ" data-word="आम (Mango)">
            <img src="images/hindi/mango.jpg" alt="Aam Image"> 
            आ <br> आम (Mango)
        </div>
        <div class="letter" id="इ" data-word="इमली (Tamarind)">
            <img src="images/hindi/termarid.jpg" alt="Imli Image"> 
            इ <br> इमली (Tamarind)
        </div>
        <div class="letter" id="ई" data-word="ईख (Sugarcane)">
            <img src="images/hindi/sugarcan.jpg" alt="Ekh Image"> 
            ई <br> ईख (Sugarcane)
        </div>
        <div class="letter" id="उ" data-word="उल्लू (Owl)">
            <img src="images/hindi/owl.jpg" alt="Ullu Image"> 
            उ <br> उल्लू (Owl)
        </div>
        <div class="letter" id="ऊ" data-word="ऊन (Wool)">
            <img src="images/hindi/wool.jpg" alt="Oon Image"> 
            ऊ <br> ऊन (Wool)
        </div>
        <div class="letter" id="ए" data-word="एड़ी (Heel)">
            <img src="images/hindi/heel.jpg" alt="Edi Image"> 
            ए <br> एड़ी (Heel)
        </div>
        <div class="letter" id="ऐ" data-word="ऐनक (Spectacles)">
            <img src="images/hindi/spectacles.jpg" alt="Aink Image"> 
            ऐ <br> ऐनक (Spectacles)
        </div>
        <div class="letter" id="ओ" data-word="ओखली (Mortar)">
            <img src="images/hindi/mortar.jpg" alt="Okhli Image"> 
            ओ <br> ओखली (Mortar)
        </div>
        <div class="letter" id="औ" data-word="औरत (Woman)">
            <img src="images/hindi/women.jpg" alt="Aurat Image"> 
            औ <br> औरत (Woman)
        </div>
    </div>

    <div class="category">व्यंजन (Consonants)</div>
    <div class="alphabet-container">
        <div class="letter" id="क" data-word="कबूतर (Pigeon)">
            <img src="images/hindi/pigone.jpg" alt="Kabootar Image"> 
            क <br> कबूतर (Pigeon)
        </div>
        <div class="letter" id="ख" data-word="खरगोश (Rabbit)">
            <img src="images/hindi/rabbit.jpg" alt="Khargosh Image"> 
            ख <br> खरगोश (Rabbit)
        </div>
        <div class="letter" id="ग" data-word="गमला (Pot)">
            <img src="images/hindi/pot.jpg" alt="Gamla Image"> 
            ग <br> गमला (Pot)
        </div>
        <div class="letter" id="घ" data-word="घड़ी (Clock)">
            <img src="images/hindi/clock.jpg" alt="Ghadi Image"> 
            घ <br> घड़ी (Clock)
        </div>
        <div class="letter" id="च" data-word="चम्मच (Spoon)">
            <img src="images/hindi/spoon.jpg" alt="Chammach Image"> 
            च <br> चम्मच (Spoon)
        </div>
        <div class="letter" id="छ" data-word=" छाता (Umbrella)">
            <img src="images/hindi/umbrella.jpg" alt="Chhata Image"> 
            छ <br> छाता (Umbrella)
        </div>
        <div class="letter" id="ज" data-word="जहाज (Ship)">
            <img src="images/hindi/ship.jpg" alt="Jahaz Image"> 
            ज <br> जहाज (Ship)
        </div>
        <div class="letter" id="झ" data-word="झंडा (Flag)">
            <img src="images/hindi/flag.jpg" alt="Jhanda Image"> 
            झ <br> झंडा (Flag)
        </div>
        <div class="letter" id="ट" data-word="टमाटर (Tomato)">
            <img src="images/hindi/tomato.jpg" alt="Tamatar Image"> 
            ट <br> टमाटर (Tomato)
        </div>
        <div class="letter" id="ठ" data-word=" ठेला (Cart)">
            <img src="images/hindi/cart.jpg" alt="Thela Image"> 
            ठ <br> ठेला (Cart)
        </div>
        <div class="letter" id="ड" data-word="डमरू (Damru)">
            <img src="images/hindi/damru.jpg" alt="Damru Image"> 
            ड <br> डमरू (Damru)
        </div>
        <div class="letter" id="ढ" data-word="ढोल (Drum)">
            <img src="images/hindi/drum.jpg" alt="Dhol Image"> 
            ढ <br> ढोल (Drum)
        </div>
        <div class="letter" id="त" data-word="तरबूज (Watermelon)">
            <img src="images/hindi/watermelon.jpg" alt="Tarbuj Image"> 
            त <br> तरबूज (Watermelon)
        </div>
        <div class="letter" id="थ" data-word=" थाली (Plate)">
            <img src="images/hindi/plate.png" alt="Thali Image"> 
            थ <br> थाली (Plate)
        </div>
        <div class="letter" id="द" data-word="दही (Curd)">
            <img src="images/hindi/curd.jpg" alt="Dahi Image"> 
            द <br> दही (Curd)
        </div>
        <div class="letter" id="ध" data-word="धनुष (Bow)">
            <img src="images/hindi/boe.jpg" alt="Dhanush Image"> 
            ध <br> धनुष (Bow)
        </div>
        <div class="letter" id="न" data-word="नल (Tap)">
            <img src="images/hindi/tap.jpg" alt="Nal Image"> 
            न <br> नल (Tap)
        </div>
        <div class="letter" id="प" data-word="पेन (Pen)">
            <img src="images/hindi/pen.jpg" alt="Pen Image"> 
            प <br> पेन (Pen)
        </div>
        <div class="letter" id="फ" data-word="फूल (Flower)">
            <img src="images/hindi/flower.jpg" alt="Phool Image"> 
            फ <br> फूल (Flower)
        </div>
        <div class="letter" id="ब" data-word=" बकरी (Goat)">
            <img src="images/hindi/goat.jpg" alt="Bakri Image"> 
            ब <br> बकरी (Goat)
        </div>
        <div class="letter" id="भ" data-word=" भस्म (Ash)">
            <img src="images/hindi/ash.jpg" alt="Bhasma Image"> 
            भ <br> भस्म (Ash)
        </div>
        <div class="letter" id="म" data-word="मछली (Fish)">
            <img src="images/hindi/fish.jpg" alt="Machhli Image"> 
            म <br> मछली (Fish)
        </div>
        <div class="letter" id="य" data-word="योग (Yoga)">
            <img src="images/hindi/yoga.jpg" alt="Yoga Image"> 
            य <br> योग (Yoga)
        </div>
        <div class="letter" id="र" data-word="रात (Night)">
            <img src="images/hindi/night.jpg" alt="Rat Image"> 
            र <br> रात (Night)
        </div>
        <div class="letter" id="ल" data-word="शेर (Lion)">
            <img src="images/hindi/lion.jpg" alt="Lion Image"> 
            ल <br> शेर (Lion)
        </div>
        <div class="letter" id="व" data-word="वस्तु (Object)">
            <img src="images/hindi/object.jpg" alt="Vasu Image"> 
            व <br> वस्तु (Object)
        </div>
        <div class="letter" id="श" data-word="शक्ति (Strength)">
            <img src="images/hindi/strength.jpg" alt="Shakti Image"> 
            श <br> शक्ति (Strength)
        </div>
        <div class="letter" id="ष" data-word="षट्कोण (Hexagon)">
            <img src="images/hindi/hexagon.jpg" alt="Shafts Image"> 
            ष <br> षट्कोण (Hexagon)
        </div>
        <div class="letter" id="स" data-word=" सब्जी (Vegetable)">
            <img src="images/hindi/vegetable.jpg" alt="Symbols Image"> 
            स <br> सब्जी (Vegetable)
        </div>
        <div class="letter" id="ह" data-word="हाथ (Hand)">
            <img src="images/hindi/hand.jpg" alt="Hand Image"> 
            ह <br> हाथ (Hand)
        </div>
    </div>
    <section style="padding-bottom:10vh;padding-top:10vh;">
        <div>
            <h2>चलो क्विज़ शुरू करें</h2>
            <a href="level 2 hindi.php"><button type="button" class="btn-index" style="margin-top:20px;margin-left:60px;">Start Quiz</button></a>
        </div>
    </section>
    <script>
       const letters = document.querySelectorAll('.letter');

letters.forEach(letter => {
    letter.addEventListener('click', () => {
        const word = letter.getAttribute('data-word'); // Get the full word and its meaning
        speakWord(word); // Call function to speak the full word with meaning
        triggerAnimation(letter);
    });
});

function speakWord(word) {
    const utterance = new SpeechSynthesisUtterance(word); // Create a speech utterance for the word
    utterance.lang = 'hi-IN'; // Set language to Hindi (India)
    window.speechSynthesis.speak(utterance); // Speak the word
}

function triggerAnimation(letter) {
    letter.style.animation = 'bounce 0.6s ease-in-out';
    setTimeout(() => {
        letter.style.animation = '';
    }, 600);
}

    </script>
<?php include 'footer.php';?>
