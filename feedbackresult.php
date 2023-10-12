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
        <form action="#" method="post" data-aos="fade-up">
            <fieldset>
				<h3>Thank You for Your Feedback!</h3>
<?php
	$name = $_GET['name'];
  $email = $_GET['email'];
  $product = $_GET['product'];
  $comments = $_GET['comments'];

	echo('<p>Your feedback has been received by our team. </br></br> <b>Name:</b> '.$name.'</br> <b>Email:</b> '.$email.'</br> <b>Product:</b> '.$product.'</br> <b>Comments:</b> '.$comments.'</p> ');
?>
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