<!--------------- Start Footer ------------------->
<div class="footersite">
    <div class="container">
        <div class="row">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-site')) : else : ?><?php endif; ?>
        </div>
    </div>

    <div class="copyrightfooter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 pull-right testcopy">
                    طراحی و پیاده سازی در دوره طراحی قالب وردپرس از سایت کارسازشو
                </div>
                <div class="col-xs-12 col-sm-6 pull-left socialfooter hidden-xs">
                    <a href="#">
                        <span class="glyphicon glyphicon-send"></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php wp_footer(); ?>

</body>
</html>
