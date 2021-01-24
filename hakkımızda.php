<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEV - Hakkımızda</title>
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

    <div class="hakkimizda">
      <div class="header-title">
        <h1>SENDE EL VER HAKKINDA</h1>
        <p>
          Sende EL Ver projesi olarak 2020 yılında kuruldu. <br />
          Kuruluşun amacı Hem geri dönüme katkı sağlamak hemde küçük
          dostlarımıza destek vermek
        </p>
      </div>
    </div>

    <!-- Hakkımızda Start -->

    <section id="Hakkımızda">
      <div class="section-title">
        <h1><span>H</span>akkımızda</h1>
      </div>
      <?php
      $query = $db->prepare('SELECT * FROM hakkımızda');
      $query->execute([]);
      $arr = $query->fetch(PDO::FETCH_ASSOC);
      ?>

      <div class="about">
        <div class="imgbox">
          <img src="Assets/images/res3.jpg" alt="" />
        </div>
        <div class="contentbox">
          <p>
         <?php echo $arr["hakkımızda_1"]?>
          </p>
        </div>
      </div>
      <div class="about">
        <div class="contentbox">
          <p>
          <?php echo $arr["hakkımızda_2"]?>
          </p>
        </div>
        <div class="imgbox">
          <img src="Assets/images/res4.jpg" alt="" />
        </div>
      </div>
      <div class="about">
        <div class="imgbox">
          <img src="Assets/images/res5.jpg" alt="" />
        </div>
        <div class="contentbox">
          <p>
          <?php echo $arr["hakkımızda_3"]?>
          </p>
        </div>
      </div>
    </section>
    <!-- Hakkımızda End -->
    <!-- Hakkımızda kısmı Start -->

    <!-- Hakkımızda kısmı End -->
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
