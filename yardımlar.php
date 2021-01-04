<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEV - Yardımlarımız</title>
    <link rel="stylesheet" href="Assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
  <!-- Header Start -->
     <?php include "inc/Header.php";?>
  <!-- Header End -->
    <div class="Yardımlar Yardım_panel">
      <div class="header-title">
        <h1>SENDE EL VER HAKKINDA</h1>
        <p>
          Sende EL Ver projesi olarak 2020 yılında kuruldu. <br />
          Kuruluşun amacı Hem geri dönüme katkı sağlamak hemde küçük
          dostlarımıza destek vermek
        </p>
      </div>
    </div>

    <!-- Yapılacak yardımlar  start-->

    
    <!-- Yapılacak yardımlar  End-->

    <!-- Yapılan Yardımlar Start -->
    <section class="YapılanYardımlar" id="Hakkımızda1">
      <div class="section-title">
        <h1>Yapılan <span>Y</span>ardımlar</h1>
      </div>

      <div class="yaplacak-yardımlar">
        <div class="helsp">
          <?php include "inc/yapılan-yardım.php";?>
        </div>
      </div>
    </section>
    <!-- Yapılan Yardımlar End -->

    <!-- Footer Start -->
  <?php include "inc/footer.php";?>

    <!-- Footer End -->
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
