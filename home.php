<?php include("header.php"); ?>

<body class="left-index">
    <section class="section-top">
        <div class="container left-right">
            <div class="container-fluid mt-3">
                <div class="row row-bottom">
                    <div class="col-sm-6">
                        <h1>Empower Your<span style="color:blue;"> Future Learn<br> </span>AnyWhere,Bulid Everywhere<br>
                            For A Bright Career</h1>
                        <p>Language learning is the process of acquiring the ability to understand, speak, read, and
                            write in a new language. It’s a complex and rewarding journey that enhances communication
                            skills, broadens cultural understanding, and opens opportunities for personal and
                            professional growth</p>
                        <button type="button" class="btn-index">Get Started</button>
                        <button type="button" class="btn-index button-left">Learn More</button>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo 'images/index1.jpeg'; ?>" alt="learning language" class="para-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="steps-content">
            <h4>Simple Steps</h4>
            <h2>Start Your Learning Journey</h2>
        </div>
        <div class="influencer">
            <div class="back-step">
                <div>
                    <div class="card card6">
                        <img src="<?php echo 'images/starting.png'; ?>" alt="Assess Your Starting Point">
                        <h4><b>Assess Your Starting Point</b></h4>
                        <p>Identify your language proficiency and goals to define your purpose, whether for travel,
                            career, or personal growth.</p>
                    </div>
                    <div class="card card5">
                        <img src="<?php echo 'images/match.png'; ?>" alt="Get Matched with Resources">
                        <h4><b>Get Matched with Resources</b></h4>
                        <p>Select tools like apps, courses, or tutors and join groups or use materials that match your
                            learning style.</p>
                    </div>
                    <div class="card card6">
                        <img src="<?php echo 'images/trial.png'; ?>" alt="Engage in Trial Sessions">
                        <h4 class="engage"><b>Engage in Trial Sessions</b></h4>
                        <p>Experiment with trial lessons or language exchanges to explore teaching styles and build
                            conversational confidence.</p>
                    </div>
                    <div class="card card5">
                        <img src="<?php echo 'images/planing.png'; ?>" alt="Develop a Learning Plan">
                        <h4 class="develop"><b>Develop a Learning Plan</b></h4>
                        <p>Set a schedule for speaking, listening, reading, and writing, using calendars or apps to
                            track consistent practice.</p>
                    </div>
                    <div class="card card6">
                        <img src="<?php echo 'images/learning.png'; ?>" alt="Immerse Yourself in the Language">
                        <h4><b>Immerse Yourself in the Language</b></h4>
                        <p>Watch, listen, and read in the language, while engaging with native speakers or practicing
                            regularly to boost fluency.</p>
                    </div>
                    <div class="card card5">
                        <img src="<?php echo 'images/progress.png'; ?>" alt="Monitor Your Progress">
                        <h4 class="engage"><b>Get Matched with Resources</b></h4>
                        <p>Track milestones like learning words or holding conversations, and adjust your goals as your
                            skills improve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="section-top">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-7">
                    <div class="back-pic">
                        <div class="container back_index">
                            <div class="cards-1">
                                <div class="card-2">
                                    <img src="<?php echo 'images/pic1.jpeg'; ?>" alt="Person 1">
                                </div>
                                <div class="card-2 img-top">
                                    <img src="<?php echo 'images/pic2.jpeg'; ?>" alt="Person 2">
                                </div>
                                <div class="card-2">
                                    <img src="<?php echo 'images/pic3.jpeg'; ?>" alt="Person 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 para-flex">
                    <h1 class="font"><span class="deveopler-h1">Speak</span> the Global Language of <span class="deveopler-h1-1">Pick</span></h1>
                    <p>Learn to speak Spainsh, French, German and more with top handpicked professional language</p>
                    <button type="button" class="btn-index">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section>
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en', includedLanguages: 'en,fr,es,de,hi,zh'}, 
            'google_translate_element'
        );
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</section> -->
<?php include("footer.php"); ?>
</body>
<style>

    .align{
        text-align: left;
    }
    .font{
        font-weight: bold;
    }
    body {
        background-color: #f2f2f2;
    }
.back_index{
    background-color: ghostwhite !important;
}
    .row-bottom {
        padding-bottom: 30px;
    }

    .left-index {
        margin-left: 20vh;
        overflow-x: hidden;
    }

    .section-top {
        padding-top: 3%;
        padding-bottom: 3%;
    }

    .button-left {
        margin-left: 20px;
    }

    .left-right {
        margin-left: 10vh;
    }

    .para-img {
        width: 80%;
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

    .steps-content {
        text-align: center;
        padding-top: 45px;
    }

    .steps-content h4 {
        color: blue;
    }

    .influencer {
        margin-top: 5%;
        height: 1000px;
        position: relative;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .influencer::-webkit-scrollbar {
        display: none;
    }

    .influencer::before {
        content: "";
        position: absolute;
        top: 0;
        left: -20%;
        width: 140%;
        height: 100%;
        background-image: url("https://visiblegain.in/vg-img/circle.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        animation: rotateBackground 30s linear infinite;
        z-index: -1;
    }

    @keyframes rotateBackground {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .back-step {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        /* background: white; */
        opacity: 0.6;
        z-index: 1;
    }
    .back-step .card5:hover{
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.3);
        opacity: 1!important;
        background-color:red;
        color: white;
    }
    .back-step .card6:hover{
    background-color: darkseagreen;
    color: black;
}
    .card {
        background-color: white;
        color: black;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 10px;
        padding: 15px;
        width: 25%;
        margin: 10px;
        z-index: 2;
    }
    .card h4,
    .card p {
        text-align: center;
        margin: 10px 0;
    }

    .influencer .back-step>div {
        display: flex;
        justify-content: center;
        align-items: stretch;
        flex-wrap: wrap;
        height: 100%;
        z-index: 2;
    }

    .engage {
        padding-top: 90px;
    }

    .develop {
        padding-top: 55px;
    }

    .back-pic {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
        background-color:transparent;
    }

    .cards-1 {
    display: flex;
    gap: 20px;
    justify-content: center;
    align-items: flex-start;
    margin-bottom: 20px;
    margin-left: 20px;
}

.card-2 {
    width: 160px;
    height: 47vh;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    animation: float 3s ease-in-out infinite; /* Add animation */
}

.card-2 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-2:first-child {
    margin-top: 10vh;
    position: relative;
    bottom: -90px;
    animation-delay: 0.5s; 
}

.card-2.img-top {
    margin-top: 0;
    position: relative;
    top: -55px;
    animation-delay: 1s;
}

.card-2:nth-child(3) {
    margin-top: 10vh;
    position: relative;
    bottom: -90px;
    animation-delay: 1.5s; 
}

@keyframes float {
    0% {
        transform: translateY(0); 
    }
    50% {
        transform: translateY(-20px); 
    }
    100% {
        transform: translateY(0);
    }
}

    .para-flex {
        padding-top: 35vh;
        padding-right: 60px;
    }

   .deveopler-h1 {
    display: inline-block;
    border: 2px solid black;
    border-radius: 30px;
    padding: 5px 20px; 
    margin-right: 10px; 
    background-color: white;
}

.deveopler-h1-1 {
    display: inline-block;
    border: 2px solid black; 
    border-radius: 30px;
    padding: 5px 20px;
    background-color:#3d8afd; 
    color: white;
    margin-left: 10px;
}


    /* For screens with a maximum width of 600px */
@media only screen and (max-width: 600px) {
    body {
        margin-left: 0;
        font-size: 14px;
    }

    .left-index {
        margin-left: 5vh;
    }

    .section-top {
        padding: 20px 10px;
    }

    .para-img {
        width: 100%;
    }

    .btn-index {
        font-size: 14px;
        padding: 10px 20px;
    }

    .container-fluid {
        padding: 0 15px;
    }

    .cards-1 {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .card-2 {
        width: 90%;
        height: auto;
        animation: none; /* Disable float animation for better small-screen readability */
    }

    .steps-content h2 {
        font-size: 24px;
    }

    .para-flex {
        padding-top: 20px;
    }

   
}

/* For screens with a maximum height of 450px */
@media screen and (max-height: 450px) {
    .para-img {
        width: 70%;
    }

    .btn-index {
        font-size: 12px;
        padding: 8px 16px;
    }

    .section-top {
        padding: 10px 5px;
    }

    .cards-1 {
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 10px;
    }

    .card-2 {
        width: 150px;
        height: 150px;
        flex-shrink: 0;
    }

    .steps-content h2 {
        font-size: 20px;
    }


}

</style>