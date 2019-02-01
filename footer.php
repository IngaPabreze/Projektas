<div class="row">
<footer class="scol12 mcol12">
    <div class="row">
        <div class="scol12 mcol12">
            <div class="flex"><a href="https://www.facebook.com/ingameksriunaite"><img src="images/facebook.png" class="mediaLogo"></a><a href="https://linkedin.com/in/inga-pabrėžė-642920116"><img src="images/linkedin.png" class="mediaLogo"></a><a href="https://github.com/IngaPabreze/Projektas"><img src="images/git.png" class="mediaLogo"></a></div>
             <div class="flex copyw">
               <?php echo copywrite(2019).'. All rights reserved.'; ?>
            </div>
        </div>
    </div>
    <?php function copywrite($createDate){
        if($createDate < date('Y')) {
            echo '&copy'.$createDate.'-'.date('Y');
            }else{ echo '&copy'.date('Y');
                 }
        }
    ?>
</footer>
</div>

