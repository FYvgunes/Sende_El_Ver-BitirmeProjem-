<?php echo !defined("INDEX") ? header("Location: ".URL."/404.html") : null; ?>
<footer class="footer">
        <div class="container text-center">
            <small class="copyright"><?php echo $setting['site_footer']; ?></small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <!-- jquery head.php dosyasında eklendi -->       
    <script type="text/javascript" src="<?php echo URL; ?>/en/assets/js/jquery-migrate-1.2.1.min.js"></script>  
    <script type="text/javascript" src="<?php echo URL; ?>/en/assets/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo URL; ?>/en/assets/js/jquery.rss.min.js"></script>  
    <!-- github activity plugin -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?php echo URL; ?>/en/assets/js/main-min.js"></script>