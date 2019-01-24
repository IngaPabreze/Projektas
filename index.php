    <?php include('header.php'); ?>
    <div class="modal"></div>
    <div class="row">
        <section class="scol12 mcol12">
            <div class="row rowDiv"><article class="scol12 mcol6"> <div class="flexCenter"><img src="images/logo.png" class="secondLogo" ></div></article></div>
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
                var nr = [i];
                var fullArticle = $(article).append($(articleBox).append('<h1 class="artitle">'+articleData.title+'</h1>').append('<img class="firstImg" src="'+articleData.url+'" style="float: left">').append('<p>'+articleData.firstParagraph+'</p>').append('<div class="flex"><button id="button'+i+'" class="readmore"></button><button id="button3'+i+'" class="play"></button><button id="button2'+i+'" class="gallery"></button></div>'));
                $(".rowDiv").append(fullArticle);
                $('#button'+i+'').click(function(){
                window.location.href = articleData.buttonUrl;
                });
                $('#button2'+i+'').click(function(){
                     window.location.href = 'gallery.php#gallery'+nr+'';
                });
                $('#button3'+i+'').click(function(){
                    $(".modal").prepend('<div class="videoBox"><iframe src="'+articleData.videoUrl+'" class="video"></iframe></div>');
                    $(".modal").fadeIn();
                });
                $(".modal").click(function(){
                        $(".modal").fadeOut(function(){
                        $(".modal").empty();
                        });
                })
            }
    </script>
</body>
</html>
