<?php
define("INDEX", true);
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEV - Gönüllü Kayıt</title>
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
    <div class="giris">
      <form action="" class="form-giris">
        <h1><i class="fas fa-users"></i>Gönüllü Kayıt</h1>
        <input type="text" name= "KullaniciAdi" class="name-admin" placeholder="Kullanıcı Adı"  require/>
        <input type="text" name= "Kullanıcıemail" class="name-admin" placeholder="E-mail Adresi" require />
        <input type="text" name= "KullaniciAdi" class="name-admin" placeholder="Şifreniz" require />

        <div class="form-grub">
          
          <button type="Submit" class="kayit_btn">Kayıt Ol</button>
        </div>
      </form>
    </div>
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
