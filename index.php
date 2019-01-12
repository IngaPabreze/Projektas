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

<!--           include('../app/views/content.php');-->
    <div class="row">
        <section class="scol12 mcol12">
            <div class="row rowDiv"><article class="scol12 mcol6"> <div class="secondLogoBox"><img src="images/logo.png" class="flexCenter"></div></article></div>
        </section>
    </div>
    <?php include('footer.php'); ?>
   <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
   <script>0
            var parameter = {
                dataType:"json",
                url:"articles.json"
            };
            $.ajax(parameter).done(function(data){
               console.log(data);
                for(i=0;i<data.length;i++){
                drawArticle(data[i]);
                }
            })

            function drawArticle(articleData){
                var rowDiv = $("<div>").addClass("row");
                var article = $("<article>").addClass("scol12").addClass(articleData.mColClass);
                var articleBox = $("<div>").addClass("box");
                var nr = articleData.articleNr;
                var fullArticle = $(article).append($(articleBox).append('<h1 class="artitle">'+articleData.title+'</h1>').append('<img class="firstImg" src="'+articleData.url+'" style="float: left">').append('<p>'+articleData.firstParagraph+'</p>').append($('<div class="flex"><button id="button'+nr+'">Read more</button><button>Video</button><button id="button2'+nr+'">Gallery</button></div>')));
                $(".rowDiv").append(fullArticle);
                $('#button'+nr+'').click(function(){
                window.location.href = articleData.buttonUrl;
                });
                $('#button2'+nr+'').click(function(){
                window.location.href = 'gallery.php#'+articleData.id+'';
                });
            }
    </script>
</body>
</html>
