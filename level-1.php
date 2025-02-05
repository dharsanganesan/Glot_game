<?php include 'header.php';?>
    <style>
        .level-body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height:300vh; 
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
    <section>
        <div class="content-section" style="padding-top:45px;padding-bottom:25px;">
        <h3>Interesting Facts About Consonants</h3>
        <p>Consonants are the letters that make up the body of speech and are not essential for forming syllables.</p>
        <p>Consonants are essential for building words, forming sounds, and communicating effectively.</p>
    </div>
    </section>
    <section>
        <h2> Practice english letter</h2>
        <a href="eng.php"><button type="button" class="btn-index" style="margin-top:20px;margin-left:60px;">Start</button></a>
    </section>
    <section style="padding-bottom:10vh;">
        <div>
            <h2>Let us get into Quiz</h2>
            <a href="level1 quiz.php"><button type="button" class="btn-index" style="margin-top:20px;margin-left:60px;">Start Quiz</button></a>
        </div>
    </section>
    </section>

       <script>
    const letters = document.querySelectorAll('.letter');

    const letterData = {
        A: { word: "Apple" },
        B: { word: "Ball" },
        C: { word: "Cat" },
        D: { word: "Dog" },
        E: { word: "Elephant" },
        F: { word: "Fish" },
        G: { word: "Grapes" },
        H: { word: "Hat" },
        I: { word: "Ice Cream" },
        J: { word: "Jug" },
        K: { word: "Kite" },
        L: { word: "Lion" },
        M: { word: "Monkey" },
        N: { word: "Nest" },
        O: { word: "Orange" },
        P: { word: "Parrot" },
        Q: { word: "Queen" },
        R: { word: "Rabbit" },
        S: { word: "Sun" },
        T: { word: "Tiger" },
        U: { word: "Umbrella" },
        V: { word: "Van" },
        W: { word: "Watch" },
        X: { word: "Xylophone" },
        Y: { word: "Yak" },
        Z: { word: "Zebra" }
    };

    letters.forEach(letter => {
        letter.addEventListener('click', () => {
            const letterId = letter.id;
            const data = letterData[letterId];

            if (data) {
                speakLetter(letterId, data.word);
            }
        });
    });

    function speakLetter(letter, word) {
        const utterance = new SpeechSynthesisUtterance(`${letter}`);
        utterance.lang = 'en-US';
        window.speechSynthesis.speak(utterance);
    }
</script>
<?php include 'footer.php';?>
