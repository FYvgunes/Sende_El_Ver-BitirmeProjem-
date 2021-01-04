<?php
define("INDEX", true);
require_once('config.php');

$yapılılacak_yardımlar_id = $_GET['do'];
$sor = $db->query("SELECT * FROM yapılacak_yardımlar  WHERE yapılılacak_yardımlar_id = '$yapılılacak_yardımlar_id'");
$sorgu = $sor->fetch(PDO::FETCH_ASSOC);

$sorgu1 = $db->prepare("SELECT * FROM yapılacak_yardımlar Where yapılılacak_yardımlar_id=:id");
$sorgu1->execute(array(
    "id" => $yapılılacak_yardımlar_id
));
$islem = $sorgu1->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>SEV - <?php echo kisaMetin($islem['yapılacak_yardımlar_baslik'], 60) ?></title>
  </head>
  <body>
    <!-- Header  Start -->
<?php include "inc/Header.php";?>
    <!-- Footer Start -->
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

    <section id="Hakkımızda">
      <div class="section-title">
        <h1>Yapılan Yardım Detaylar</h1>
      </div>

      <div class="about">
        <div class="imgbox">
          <img src="/Bitirme/<?php echo $islem['yapılılacak_yardımlar_url'] ;?>" alt="" />
        </div>
        <div class="contentbox">
          <p>
           <span style="color:#00b894;">Başlık:</span> 
           <?php echo $islem['yapılacak_yardımlar_baslik'];?>
          </p>
           <p>
            <span style="color:#00b894;">Yapılanlar</span>
           <?php echo $islem['yapılılacak_yardımlar_text'];?>
          </p>
           <p>
            <span style="color:#00b894;">Adres:</span>
           <?php echo $islem['yapılılacak_yardımlar_adres'];?>
          </p>
           <p>
            <span style="color:#00b894;">Tarih:</span>
           <?php echo tarih($islem['yapılacak_yardımlar_tarih']);?>
          </p>
        </div>
      </div>
</section>



   <?php include "inc/footer.php";?>

    <!-- Footer End -->
    <script type="text/javascript" src="Assets/js/slider.js"></script>
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