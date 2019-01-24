    <?php include('header.php'); ?>
    <div class="modal"></div>
    <div class="row">
        <section class="scol12 mcol12">
            <div id="gallery0"></div>
            <div id="gallery1"></div>
            <div id="gallery2"></div>
            <div id="gallery3"></div>
            <div id="gallery4"></div>
        </section>
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script>
        function dataGallery(galleryData){// grazina galerija su pavadinimu dezuteje
        var boxDiv = $("<div>").addClass("box");
        var containerDiv = $("<div>").addClass("container");

        for(i=0;i<galleryData.images.length;i++){
            $(containerDiv).append('<img id="theImg'+h+i+'" src="'+galleryData.images[i]+'" alt="'+galleryData.images[i].substring(galleryData.images[i].lastIndexOf('/')+1)+'"/>');

        }
        return $(boxDiv).append('<h1 class="artitle">'+galleryData.title+'</h1>').append(containerDiv);
        }

        var parameter = {
                dataType:"json",
                url:"gallery.json"
            };
            $.ajax(parameter).done(function(data){
                console.log(data);
                for(h=0;h<data.length;h++){
                $('#gallery'+h+'').append(dataGallery(data[h]));//sudeda galerijas is JSON failo naudodamas funkcija i dezutes pagal ID
                }
                $("[id^=theImg]").click(function(){// nuotrauku reakcijos funkcijos
                    var imagePath = $(this).prop("src");
                    var image = $("<img>").attr("src", imagePath).attr("class","fullImg");
                    $(".modal").prepend(image);
                    $(".modal").fadeIn();
                })
                $("[id^=theImg]").hover(function(){
                      $(this).css("cursor", "pointer").css("border", "5px solid rgba(4, 241, 206, 0.3)").css("margin", "3px");
                      }, function(){
                      $(this).css("cursor", "default").css("border", "none").css("margin", "8px");
                    })
                $(".modal").click(function(){
                        $(".modal").fadeOut(function(){
                        $(".modal").empty();
                        });
                })
            })
    </script>
</body>
</html>
