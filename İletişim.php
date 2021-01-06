<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SEV - İletişim</title>
  <link rel="stylesheet" href="Assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <!-- Header Start -->
  <?php include "inc/Header.php";?>
  <!-- Header End -->
  <div class="Yardımlar İletisim">
    <div class="header-title">
      <h1>İLETİŞİM</h1>
      <p>
        Yardım Etmek veya yardımlarımı destek vermek için bize
        ulaşabilirsiniz. <br />
      </p>
    </div>
  </div>


  <div class="section-title">
    <h1><span>İ</span>letişim</h1>
  </div>
  <section id="contact">
    <div class="contacts">
      <div class="contact">
        <form action="inc/send_mail.php" Method="POST" class="contact-form">
          <div class="form-grub">
            <label for="name"><i class="fas fa-user"></i> Ad Soyadı</label>
            <input type="text" name="name" class="name" />
          </div>
          <div class="form-grub">
            <label for="email"><i class="fas fa-envelope"></i> E-Mail</label>
            <input type="text" name="email" class="email" />
          </div>
          <div class="form-grub">
            <label for="konu"><i class="far fa-edit"></i> Konu</label>
            <input type="text" name="konu" class="konu" />
          </div>
          <div class="form-grub">
            <label for="konu"><i class="far fa-edit"></i> Mesaj</label>
            <textarea name="message"></textarea>
          </div>
          <?php if (isset($_SESSION["alert"])) { ?>
          <p class="alert alert-<?php echo $_SESSION["alert"]["type"]; ?>">
            <?php echo $_SESSION["alert"]["message"]; ?>
          </p>
          <?php unset($_SESSION["alert"]); ?>

          <?php } ?>
          <button class="btn" value="Gönder">Gönder</button>
        </form>
      </div>
      <div class="contact">
        <div class="contact-info">
          <h3>Adres</h3>
          <p>Fatih mah. Sair elmas Sokak no:3- 5 İstanbul/Fatih</p>
          <h3>Tel</h3>
          <p>0533 555 45 54</p>
        </div>
      </div>
    </div>
  </section>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1999.5085074488159!2d28.845747858143618!3d41.056062645522566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2str!4v1605891076970!5m2!1sen!2str"
    width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false"
    tabindex="0"></iframe>

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