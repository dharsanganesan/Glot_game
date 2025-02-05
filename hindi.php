<?php include 'header.php';?>
<style>
        .body-hin {
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
            grid-template-columns: repeat(10, 80px);
            gap: 20px;
            justify-content: center;
        }

        .letter {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color:grey;
            color:black;
            width: 90px;
            height: 90px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            text-align: center;
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
<section class="body-hin">
    <div class="category">स्वर (Vowels)</div>
    <div class="alphabet-container">
        <div class="letter" id="अ">अ<br><small>(A)</small></div>
        <div class="letter" id="आ">आ<br><small>(Aa)</small></div>
        <div class="letter" id="इ">इ<br><small>(I)</small></div>
        <div class="letter" id="ई">ई<br><small>(Ee)</small></div>
        <div class="letter" id="उ">उ<br><small>(U)</small></div>
        <div class="letter" id="ऊ">ऊ<br><small>(Oo)</small></div>
        <div class="letter" id="ए">ए<br><small>(E)</small></div>
        <div class="letter" id="ऐ">ऐ<br><small>(Ai)</small></div>
        <div class="letter" id="ओ">ओ<br><small>(O)</small></div>
        <div class="letter" id="औ">औ<br><small>(Au)</small></div>
    </div>

    <div class="category">व्यंजन (Consonants)</div>
    <div class="alphabet-container">
        <div class="letter" id="क">क<br><small>(Ka)</small></div>
        <div class="letter" id="ख">ख<br><small>(Kha)</small></div>
        <div class="letter" id="ग">ग<br><small>(Ga)</small></div>
        <div class="letter" id="घ">घ<br><small>(Gha)</small></div>
        <div class="letter" id="च">च<br><small>(Cha)</small></div>
        <div class="letter" id="छ">छ<br><small>(Chha)</small></div>
        <div class="letter" id="ज">ज<br><small>(Ja)</small></div>
        <div class="letter" id="झ">झ<br><small>(Jha)</small></div>
        <div class="letter" id="ट">ट<br><small>(Ta)</small></div>
        <div class="letter" id="ठ">ठ<br><small>(Tha)</small></div>
        <div class="letter" id="ड">ड<br><small>(Da)</small></div>
        <div class="letter" id="ढ">ढ<br><small>(Dha)</small></div>
        <div class="letter" id="त">त<br><small>(Taa)</small></div>
        <div class="letter" id="थ">थ<br><small>(Thaa)</small></div>
        <div class="letter" id="द">द<br><small>(Daa)</small></div>
        <div class="letter" id="ध">ध<br><small>(Dhaa)</small></div>
        <div class="letter" id="न">न<br><small>(Na)</small></div>
    </div>
    <section style="padding-bottom:10vh;padding-top:10vh;">
        <div>
            <h2>चलो क्विज़ शुरू करें</h2>
            <a href="hindi-quiz.php"><button type="button" class="btn-index" style="margin-top:20px;margin-left:60px;">Start Quiz</button></a>
        </div>
    </section>
</section>

    <script>
        const hindiToEnglish = {
            "अ": "A", "आ": "Aa", "इ": "I", "ई": "Ee", "उ": "U", "ऊ": "Oo",
            "ए": "E", "ऐ": "Ai", "ओ": "O", "औ": "Au", "क": "Ka", "ख": "Kha",
            "ग": "Ga", "घ": "Gha", "च": "Cha", "छ": "Chha", "ज": "Ja", "झ": "Jha",
            "ट": "Ta", "ठ": "Tha", "ड": "Da", "ढ": "Dha", "त": "Taa", "थ": "Thaa",
            "द": "Daa", "ध": "Dhaa", "न": "Na"
        };

        const letters = document.querySelectorAll('.letter');

        letters.forEach(letter => {
            letter.addEventListener('click', () => {
                const hindiLetter = letter.id;
                const englishPronunciation = hindiToEnglish[hindiLetter] || hindiLetter;
                speakLetter(hindiLetter, englishPronunciation);
                triggerAnimation(letter);
            });
        });

        function speakLetter(hindi) {
            const utterance = new SpeechSynthesisUtterance(hindi);
            utterance.lang = 'hi-IN'; // Set language to Hindi
            window.speechSynthesis.speak(utterance);
        }


        function triggerAnimation(letter) {
            letter.style.animation = 'bounce 0.6s ease-in-out';
            setTimeout(() => {
                letter.style.animation = '';
            }, 600);
        }
    </script>
<?php include 'footer.php';?>
