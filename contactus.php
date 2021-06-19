<!DOCTYPE html>

<?php 
  include 'includes/header.php'; 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <h1>Contact Us</h1>
    <form action="https://formspree.io/f/xpzkrbag" method="POST">
        <label>
            Your email:
            <input type="email" name="_replyto">
        </label><br>
        <label>
            Your message:
            <textarea name="message"></textarea>
        </label><br>

        <!-- your other form fields go here -->

        <button type="submit">Send</button>
    </form>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15887.931668026793!2d100.322455!3d5.4195653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9ad76b9c61d0bd3!2sUOW%20Malaysia%20KDU%20Penang%20University%20College!5e0!3m2!1sen!2smy!4v1624089311753!5m2!1sen!2smy"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</body>

</html>