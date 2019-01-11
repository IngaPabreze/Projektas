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
    <div class="modal"></div>
    <div class="row">
        <section class="scol12 mcol12">
<!--
            <div class="box">
                <h1 class="artitle">Galerija</h1>

                <div id="theDiv" class="container"></div>
            </div>
-->
        </section>
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script>

        var parameter = {
                dataType:"json",
                url:"gallery.json"
            };
            $.ajax(parameter).done(function(data){
                console.log(data);
                for(h=0;h<data.length;h++){
                $("section").append(dataGallery(data[h]));//sudeda galerijas is JSON failo naudodamas funkcija
                $("[id^=theImg]").click(function(){// nuotrauku reakcijos funkcijos
                    var imagePath = $(this).prop("src");
                    var image = $("<img>").attr("src", imagePath).attr("class","fullImg");
                    $(".modal").prepend(image);
                    $(".modal").fadeIn();
                })
                $("[id^=theImg]").hover(function(){
                      $(this).css("cursor", "pointer").css("border", "5px solid rgba(4, 241, 206, 0.15)");
                      }, function(){
                      $(this).css("cursor", "default").css("border", "none");
                    })
                $(".modal").click(function(){
                        $(".modal").fadeOut(function(){
                        $(".modal").empty();
                        });
                })
                }
            })

        function dataGallery(galleryData){// grazina galerija su pavadinimu dezuteje
        var boxDiv = $("<div>").addClass("box");
        var containerDiv = $("<div>").addClass("container");

        for(i=0;i<galleryData.images.length;i++){
            $(containerDiv).append('<img id="theImg'+h+i+'" src="'+galleryData.images[i]+'" alt="'+galleryData.images[i].substring(galleryData.images[i].lastIndexOf('/')+1)+'"/>');

        }
        return $(boxDiv).append('<h1 class="artitle" id="'+galleryData.id+'">'+galleryData.title+'</h1>').append(containerDiv);
        }


    </script>
</body>
</html>