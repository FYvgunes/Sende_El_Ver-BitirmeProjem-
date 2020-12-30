<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEV - Giriş Yöntemi</title>
    <link rel="stylesheet" href="Assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body class="body">
      <!-- Header Start -->
   <?php include "inc/Header.php";?>
   <!-- Header End -->

    <section id="giris-yontemi">
      <div class="giris-yontemi">
        <h1>Giriş Yöntemi</h1>
        <button>
          <i class="fas fa-user-secret"></i>
          <a href="<?php echo URL?>/en/admin" style="text-decoration: none;
color: black;">Admin Giriş</a>
        </button>
        <button><i class="fas fa-user"></i><a href="<?php echo URL?>/en/Yardim" style="text-decoration: none;
color: black;">Yardımsever Giriş</a> </button>
        <button><a href="<?php echo URL?>/en/gonullu" style="text-decoration: none;
color: black;"><i class="fas fa-user-circle"></i>Gönüllü Giriş</a></button>
      </div>
    </section>
    <div class="footer-admin">
      <p>Copyright @2020 Desing And Creating by <a href="#">Veysel GÜNEŞ</a></p>
    </div>

    <script type="text/javascript">
      $(document).ready(function () {
        $(window).scroll(function () {
          if (this.scrollY > 10) {
            $(".navbar").addClass("stiyk");
          } else {
            $(".navbar").removeClass("stiyk");
          }
        });
        $(".menu-toggle").click(function () {
          $(this).toggleClass("active");
          $(".navbar-menu").toggleClass("active");
        });
      });
    </script>
  </body>
</html>
