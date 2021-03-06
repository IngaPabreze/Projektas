<?php
  require __DIR__.'/src/app.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="row">
        <section class="scol12 mcol12">
            <div class="scol10 mcol7 center">
                <form id="contact" action="contactme.php" method="post">
                    <input type="text" name="name" placeholder="Name *" required autofocus class="width100">
                    <input type="text" name="lastname" placeholder="Surname" class="width100">
                    <input type="email" name="email" placeholder="example@example.com *" class="width100" required>
                    <textarea rows="10" cols="80" name="message" placeholder="Your message...*" required></textarea>
                    <input class="button send" type="submit" name="submit" value="Send">
                </form>
            </div>
        </section>
    </div>
    <?php include('footer.php'); ?>
   <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
</body>
</html>
