<?php

include 'connection.php';

if (!$_SESSION['email']) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Cobtact page of Prabesh Gupta">
    <meta name="keywords"
        content="Prabesh Gupta, imprabesh, prabeshgupta, imprabeshgupta, prabesh gupta official website, prabesh site, prabesh official site, prabeshgupta website, prabesh gupta facebook, prabesh gupta homepage, prabesh introduction, prabesh photos, prabesh qualification, prabesh images, prabesh gupta photos, prabesh gupta, nepal, prabesh gupta nepal, prabesh gupta nepali, prabesh, gupta, designer, digital marketer, dynamic site, login prabesh gupta, register on prabesh gupta">
    <meta name="author" content="Prabesh Gupta">

    <title>Prabesh Gupta</title>
    <link rel="stylesheet" href="https://s.pageclip.co/v1/pageclip.css" media="screen">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

</head>

<body>
    <header>
        <h1>Welcome to Official Website of Prabesh Gupta</h1>
        <p>Designer and Digital Marketer</p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="interest.php">Interest</a>
        <a href="qualification.php">Qualification</a>
        <a href="gallery.php">Gallery</a>
        <a href="contact.php">Contact</a>
        <div class="nav-right">
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
    </nav>

    <div class="contactInfo">
        <h2 style="padding: 10px;">Contact me for more information</h2>
    </div>


    <div class="contact">
        <form action="https://send.pageclip.co/ppazQOS5x0yhz4aBVRkDVlsXCTa1xYCH/contact-form" class="pageclip-form"
            method="post">

            <fieldset>
                <legend><strong>Enter your details</strong><br><br>
                </legend>
                <label for="">Enter Fullname </label>
                <input type="text" name="name" required /><br><br>

                <label for="">Enter email </label>
                <input type="text" name="email" required /><br><br>

                <label for="">Subject </label>
                <input type="text" name="subject" required /><br><br>

                <label for="">Gender </label>
                <input type="radio" name="gender" id="Male" value="Male" checked>Male
                <input type="radio" name="gender" id="Female" value="Female">Female
                <input type="radio" name="gender" id="Others" value="Others">Others<br><br>

                <label for="">Language </label>
                <input type="checkbox" name="language[English]" id="English">English
                <input type="checkbox" name="language[Nepali]" id="Nepali" checked>Nepali
                <input type="checkbox" name="language[Others]" id="Others">Others <br><br>

                <label for="">Choose Country </label>
                <select name="Country">
                    <option value="Nepal" selected>Nepal</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="France">France</option>
                    <option value="Others">Others</option>
                </select><br><br>

                <label for="">File upload </label>
                <input type="file" name="file" id="File"><br><br>

                <label for="">Message</label>
                <textarea name="body" cols="30" rows="10" required></textarea><br><br>

                <input type="hidden" name="version" value="v1" />
                <button type="submit" class="pageclip-form__submit">
                    <span>Send</span>
                </button>




            </fieldset>
        </form>
    </div>
    <footer>
        <p>Copyright &copy;2023 Prabesh Gupta</p>
    </footer>
    <script src="https://s.pageclip.co/v1/pageclip.js" charset="utf-8"></script>

</body>

</html>