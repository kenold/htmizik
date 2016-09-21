<?php include 'views/_head.php'; ?>
<body>

    <?php include('views/_nav.php'); ?>

    <?php include('views/_slider.php'); ?>

    <div class="container">
        <?php include 'views/_home.php'; ?>
    </div> <!-- .container -->

    <footer class="text-muted dark">
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-6 footer-widget">
                    <div class="footer-logo"><span class="logo">M</span> Mizik</div>
                    <p class="footer-copyright">© 2016 Mizik. <br>All Rights Reserved.</p>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Log In</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 footer-widget">
                    <h3>Connect</h3>
                    <ul class="footer-links footer-social">
                        <li><a href="#"><i class="icon fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="icon fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="icon fa fa-google-plus"></i> Google+</a></li>
                        <li><a href="#"><i class="icon fa fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                </div>
                <div class="clearfix visible-sm-block"></div>
            </div>
            <!-- .row -->

            <p class="pull-xs-right"><a href="#">Back to top</a></p>

        </div>
        <!-- .container -->
    </footer>

    <!-- JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/vendor/holder.min.js"></script>
    <script>
        $(function() {
            Holder.addTheme("thumb", {
                background: "#55595c",
                foreground: "#eceeef",
                text: "Thumbnail"
            });
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
