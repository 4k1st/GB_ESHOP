<aside class="subrevs">
    <div class="container">
        <div class="subrevs__block">
            <div class="reviews"><img class="reviews__image" src="./template/img/user1.png" alt="User photo">
                <div class="reviews__text">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”
                    <div class="reviews__author reviev-author">
                        <div class="reviev-author__name">Bin Burhan</div>
                        <div class="reviev-author__desc">Dhaka, Bd</div>
                    </div>
                    <ul class="reviews__paginator">
                        <li class="rev1"><a href="./index.html#rev1"></a></li>
                        <li class="active"><a href="./index.html#active"></a></li>
                        <li class="rev3"><a href="./index.html#rev3"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="subrevs__block">
            <div class="subscribe">
                <div class="subscribe__h1">Subscribe</div>
                <div class="subscribe__h2">FOR OUR NEWLETTER AND PROMOTION</div>
                <div class="subscribe__input">
                    <input class="text" type="email" placeholder="Enter Your Email">
                    <button class="button" type="submit">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="about container">
    <div class="about__text"><a class="about__logo logo" href="./index.html"><img src="./template/img/logo.png" alt="Logo">bran<span class="logo__d">d</span></a>
        <p>Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships.</p>
        <p>Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize superior initiatives for wireless technologies.<br>Dynamically optimize.</p>
    </div>
    <nav class="about__menu">
        <h2>Company</h2>
        <ul>
            <li><a href="./showcase.html">Home</a></li>
            <li><a href="./showcase.html">Shop</a></li>
            <li><a href="./showcase.html">About</a></li>
            <li><a href="./showcase.html">How it works</a></li>
            <li><a href="./showcase.html">Contact</a></li>
        </ul>
    </nav>
    <nav class="about__menu">
        <h2>Information</h2>
        <ul>
            <li><a href="./showcase.html">Tearms &amp; Condition</a></li>
            <li><a href="./showcase.html">Privacy Policy</a></li>
            <li><a href="./showcase.html">How to Buy</a></li>
            <li><a href="./showcase.html">How to Sell</a></li>
            <li><a href="./showcase.html">Promotion</a></li>
        </ul>
    </nav>
    <nav class="about__menu">
        <h2>Shop Category</h2>
        <ul>
            <li><a href="./showcase.html">Men</a></li>
            <li><a href="./showcase.html">Women</a></li>
            <li><a href="./showcase.html">Child</a></li>
            <li><a href="./showcase.html">Apparel</a></li>
            <li><a href="./showcase.html">Brows All</a></li>
        </ul>
    </nav>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer__copy">© 2017 Brand All Rights Reserved.</div>
        <div class="footer__socials"><a href="./index.html" title="facebook"><i class="fa fa-facebook"></i></a><a href="./index.html" title="twitter"><i class="fa fa-twitter"></i></a><a href="./index.html" title="linkedin"><i class="fa fa-linkedin"></i></a><a href="./index.html" title="pinterest-p"><i class="fa fa-pinterest-p"></i></a><a href="./index.html" title="google-plus"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
</footer>
<script src="js/sendToServer.js"></script>
</body>

</html>








<!--div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer- ->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2015</p>
                <p class="pull-right">Курс PHP Start</p>
            </div>
        </div>
    </div>
</footer><!--/Footer- ->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html--->
