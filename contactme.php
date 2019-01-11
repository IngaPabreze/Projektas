<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/layout.css">
     <link rel="stylesheet" href="css/nav.css">
     <link rel="stylesheet" href="css/style.css">
</head>
    <style>


    </style>

<body>
    <?php include('header.php'); ?>
    <div class="row">
        <section class="scol12 mcol12">
            <div></div>

            <div class="scol6 mcol6 center">
                <form>
                    <input type="text" id="firstname" placeholder="Name" class="width100">
                    <input type="text" id="lastname" placeholder="Surname" class="width100">
                    <input type="text" id="lastname" placeholder="example@example.com" class="width100">

                        <p>Will you come back?</p>
                        Yes<input type="radio" name="visit" value="yes">
                        No<input type="radio" name="visit" valuo="no">
                        Maybe <input type="radio" name="visit" valuo="maybe">


                    <textarea rows="10" cols="80" name="opinion" placeholder="Your opinion"></textarea>
                    <input class="button width100" type="submit" value="Send">
                </form>
            </div>

        </section>
    </div>
    <?php include('footer.php'); ?>
   <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script>

    </script>
</body>
</html>
