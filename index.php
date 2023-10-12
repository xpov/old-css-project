<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamagotchi</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="preload" href="styles/style.css" as="style">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!------------------HEADER SECTION---------------------->
    <header>
        <?php
	       include("includes/global-nav.php");
        ?>

        <div class="text-box">
            <h1>TAMAGOTCHI</h1>
            <p>We will not be responsible for all the hours you want to spend with your
                tamagotchi!!!!</p>
        </div>
    </header>
    <!------------------MAIN SECTION  ---------------------->
    <main>


        <!----------------COMMERCIAL SECTION--------------------->

        <section class="commercial">
            <h2>Be happy with your tamagotchi!!</h2>
            <p>It's amazing how much fun that can be!</p>

            <div class="row">
                <div class="commercial-col" data-aos="fade-right">
                    <div>
                        <div id="video-container">
                            <video id="myVideo" onended="restartVideo()">
                                <source src="video/Commercial.mp4" type="video/mp4">
                            </video>
                            <button id="playBtn" onclick="toggleVideo()">Play</button>
                        </div>
                    </div>
                </div>
                <div class="commercial-col" data-aos="fade-left">
                    <div>
                        <p>The characters are colorful creatures with simple designs based on animals, objects, or
                            people. The gameplay is easy and all people can try it. Tamagotchis are a small alien
                            species that deposited an egg on Earth to see what life was like, and it is up to the player
                            to raise the egg into an adult creature. The creature goes through several stages of growth
                            and will develop differently depending on the care the player provides, with better care
                            resulting in an adult creature that is smarter, happier, and requires less attention.</p>
                        <img src="images/tamagotchi.png" alt="tamagotchi" height="160px" width="160px"
                            onclick="playSound()" onmouseover="showMessage()" onmouseout="hideMessage()">
                        <p id="message">Touch Me</p>
                        <audio id="myAudio" src="audio/happyEffect.mp3"></audio>
                    </div>
                </div>

        </section>
    </main>
    <!-------------------FOOTER SECTION------------------------->

    <footer id="about_us">
        <p>Made with <i class="fa-regular fa-heart"></i> by Alexis Mora, Gabriela Bueno and Ilia</p>
    </footer>

    <!------------------JavaScript ------------------------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/whatsApp.js"></script>
</body>

</html>