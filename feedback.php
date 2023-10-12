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
            
        <p id="tileParagraph" data-aos="fade-up">Knowing your opinions is very important to us</p>
        <form action="feedbackresult.php" method="get" data-aos="fade-up">
            <fieldset>
                <legend class="my-legend"><b>SEND YOUR FEEDBACK</b></legend>
                <label for="name" class="feedbacktext"><b>Name:</b></label>
                <input type="text" id="name" name="name" autocomplete="name" required>

                <label for="email" class="feedbacktext"><b>Email:</b></label>
                <input type="email" id="email" name="email" autocomplete="email" required>

                <label for="product" class="feedbacktext"><b>Product:</b></label>
                <select id="product" name="product" required>
                    <option value="">Select a product</option>
                    <option value="Tamagotchi Gen 1">Tamagotchi Gen 1</option>
                    <option value="Tamagotchi Gen 2">Tamagotchi Gen 2</option>
                    <option value="Tamagotchi Gen 3">Tamagotchi Gen 3</option>
                </select>

                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>

                <label for="comments" class="feedbacktext"><b>Comments:</b></label>
                <textarea id="comments" name="comments" aria-label="Comments" required></textarea>


                <button type="submit"><b>SUBMIT</b></button>
            </fieldset>
        </form>

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