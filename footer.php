<div class="row">
<footer class="scol12 mcol12">
    <div class="row">
        <div class="scol12 mcol6">
            <div class="mapbox"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.4001530043024!2d25.265623315892086!3d54.75535088029849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd90e34177b4cd%3A0xe6b29d0e8d06f12c!2sFizik%C5%B3+g.+55%2C+Vilnius+08426!5e0!3m2!1sen!2slt!4v1544373130482" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
        <div class="scol12 mcol6">
            <adress>
                Adress: Fizikų str. 55<br>
                Phone number: <a href="tel:862212345" style="color:teal">8 622 12345 </a><br>
                Email: <a href="mailto:inga.pabeze5@gmail.com" style="color:teal">inga.pabeze5@gmail.com</a> <br>
            </adress>
            <div class="secondLogoBox "><img src="images/logo2.png" class="logo2"></div>
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
