<?php
define("INDEX", true);

require_once('config.php');
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

    <title>SEV - Anasayfa</title>
  </head>
  <body>
    <!-- Header  Start -->

    <div class="navbar">
      <a href="#" class="logo">SEV</a>
      <button class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-menu">
        <ul>
          <li>
            <a href="#">Anasayfa</a>
          </li>
          <li>
            <a href="#">Hakkımızda</a>
          </li>
          <li>
            <a href="#">Yardımlar</a>
          </li>
          <li>
            <a href="#">iletişim</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-sign-out-alt"></i></a>
          </li>
          <li>
            <a href="#"><i class="fas fa-user-plus"></i></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main">
      <div class="slider" id="Slider">
        <div class="slides">
          <h1>Kalan Yemekleri Çöpe ATMA</h1>
          <p>
            Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için
            hazırlanaıp barınak ve uygun ye konumdaki yerlere hayvanlara vermke
            için topluyoruz
          </p>
        </div>
        <div class="slides current">
          <h1>Kalan Yemekleri Çöpe ATMA</h1>
          <p>
            Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için
            hazırlanaıp barınak ve uygun ye konumdaki yerlere hayvanlara vermke
            için topluyoruz
          </p>
        </div>
        <div class="slides">
          <h1>Kalan Yemekleri Çöpe ATMA</h1>
          <p>
            Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için
            hazırlanaıp barınak ve uygun ye konumdaki yerlere hayvanlara vermke
            için topluyoruz
          </p>
        </div>
        <div class="slides">
          <h1>Kalan Yemekleri Çöpe ATMA</h1>
          <p>
            Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için
            hazırlanaıp barınak ve uygun ye konumdaki yerlere hayvanlara vermke
            için topluyoruz
          </p>
        </div>
        <div class="slides">
          <h1>Kalan Yemekleri Çöpe ATMA</h1>
          <p>
            Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için
            hazırlanaıp barınak ve uygun ye konumdaki yerlere hayvanlara vermke
            için topluyoruz
          </p>
        </div>
      </div>
      <a id="prev" class="prev"><</a>
      <a id="next" class="next">></a>
      <a href="#" class="suppart_btn">Yardım Bekleyen Küçük Dostlarımız</a>
    </div>
    <!-- <h1></h1>
        <p>
          Yemediğiniz yemkeleri çöpe atmayarak küçük doslarımız için hazırlanaıp
          barınak ve uygun ye konumdaki yerlere hayvanlara vermke için
          topluyoruz
        </p> -->
    <!-- <a href="#" class="btn">Yardıma Muhtaçlar</a> -->

    <!-- Header End -->

    <!-- Made Helps Start -->
    <section class="Helps" id="Helps">
      <div class="section-title">
        <h1><span>Y</span>ardımlar</h1>
        <p>Etrafımızda olan küçük dostlarımız için oluşturulan yardımlar</p>
      </div>
      <div class="helpcards">
        <div class="helpcard">
          <div class="imagebox">
            <img src="Assets/images/res7.jpg" alt="" />
          </div>
          <div class="contentbox">
            <h4>
              Fatih Mah. Sair Sok. <br />
              istanbul - Bağcılar
            </h4>
            <p>
              Bulundukları Ortamda Toplamda 5 adet kedi var. Yemeğe ihtiyaçları
              var
            </p>
            <a href="#" class="help-btn">Yardım Detay</a>
          </div>
        </div>
        <div class="helpcard">
          <div class="imagebox">
            <img src="Assets/images/res3.jpg" alt="" />
          </div>
          <div class="contentbox">
            <h4>
              Fatih Mah. Sair Sok. <br />
              istanbul - Bağcılar
            </h4>
            <p>
              Bulundukları Ortamda Toplamda 5 adet kedi var. Yemeğe ihtiyaçları
              var
            </p>
            <a href="#" class="help-btn">Yardım Detay</a>
          </div>
        </div>
        <div class="helpcard">
          <div class="imagebox">
            <img src="Assets/images/res6.jpg" alt="" />
          </div>
          <div class="contentbox">
            <h4>
              Fatih Mah. Sair Sok. <br />
              istanbul - Bağcılar
            </h4>
            <p>
              Bulundukları Ortamda Toplamda 5 adet kedi var. Yemeğe ihtiyaçları
              var
            </p>
            <a href="#" class="help-btn">Yardım Detay</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Made Helps End -->

    <!--to do Made Helps Start -->
    <section class="Helps" id="Helps">
      <div class="section-title">
        <h1>Yapılan<span>Y</span>ardımlar</h1>
        <p>Yardım Ettiğimiz küçük dostlarımız</p>
      </div>
      <div class="helpcards">
        <div class="helpcard">
          <div class="imagebox">
            <img src="Assets/images/res4.jpg" alt="" />
          </div>
          <div class="contentbox">
            <h4>
              Fatih Mah. Sair Sok. <br />
              istanbul - Bağcılar
            </h4>
            <p>
              Bulundukları Ortamda Toplamda 5 adet kedi var. Yemeğe ihtiyaçları
              var
            </p>
            <a href="#" class="help-btn">Yardım Detay</a>
          </div>
        </div>
        <div class="helpcard">
          <div class="imagebox">
            <img src="Assets/images/res2.jpg" alt="" />
          </div>
          <div class="contentbox">
            <h4>
              Fatih Mah. Sair Sok. <br />
              istanbul - Bağcılar
            </h4>
            <p>
              Bulundukları Ortamda Toplamda 5 adet kedi var. Yemeğe ihtiyaçları
              var
            </p>
            <a href="#" class="help-btn">Yardım Detay</a>
          </div>
        </div>
        <div class="helpcard">
          <div class="imagebox">
            <img src="Assets/images/res2.jpg" alt="" />
          </div>
          <div class="contentbox">
            <h4>
              Fatih Mah. Sair Sok. <br />
              istanbul - Bağcılar
            </h4>
            <p>
              Bulundukları Ortamda Toplamda 5 adet kedi var. Yemeğe ihtiyaçları
              var
            </p>
            <a href="#" class="help-btn">Yardım Detay</a>
          </div>
        </div>
      </div>
    </section>

    <!-- to do Made Helps End -->

    <!-- Partners Start -->

    <section id="Partners">
      <div class="section-title">
        <h1><span>P</span>artnerler</h1>
        <p>Yardımları yaparken bizleri destekleyen kuruluşlar</p>
      </div>
      <div class="partners">
        <div class="partner">
          <h1>LOGO</h1>
        </div>
        <div class="partner">
          <h1>LOGO</h1>
        </div>
        <div class="partner">
          <h1>LOGO</h1>
        </div>
        <div class="partner">
          <h1>LOGO</h1>
        </div>
      </div>
      <div class="partners">
        <div class="partner">
          <h1>LOGO</h1>
        </div>
        <div class="partner">
          <h1>LOGO</h1>
        </div>
        <div class="partner">
          <h1>LOGO</h1>
        </div>
        <div class="partner">
          <h1>LOGO</h1>
        </div>
      </div>
    </section>

    <!-- Partners End -->

    <!-- Helps Button Start -->
    <section class="Help_button">
      <a href="#">YARDIMDA BULUN</a>
    </section>
    <!-- Helps Button End -->

    <!-- Footer Start -->
    <footer>
      <div class="footers">
        <div class="footer">
          <div class="logo">SEV</div>
          <p>
            Sende El Ver kuruluşumuz olarak Yardıma muhtac küçük dosylarımuz
            için Lokanta Ev Vs yerlerde fazla kalan yemekleri dostlarımıza
            ulaştırıyoruz. Böylece hem yemeklerimiz çöpe gitmemiş oluyor. Hemde
            küçük dostlarımız mutlu etmiş oluyoruz.
          </p>
        </div>
        <div class="footer">
          <h2>Site Haritası</h2>
          <ul>
            <li><a href="#">Anasayfa</a></li>
            <li><a href="#">Hakkımızda</a></li>
            <li><a href="#">Yardımlar</a></li>
            <li><a href="#">İletişim</a></li>
            <li><a href="#">Giriş</a></li>
            <li><a href="#">üye Ol</a></li>
          </ul>
        </div>
        <div class="footer">
          <h2>Kısa Kısa</h2>
          <ol>
            <li><a href="#">- Sık sorulan Sorular</a></li>
            <li><a href="#">- Hangi Bölgelerde hizmet veriyorsunuz</a></li>
            <li><a href="#">- gönüllü olarak yardım edebilir miyiz</a></li>
            <li><a href="#">- Ne zamandır hizmet veriyorsunuz</a></li>
          </ol>
        </div>
      </div>
      <hr />
      <div class="sociol_icon">
        <ul>
          <li><img src="Assets/images/icons/facebook.svg" alt="" /></li>
          <li><img src="Assets/images/icons/google-plus.svg" alt="" /></li>
          <li><img src="Assets/images/icons/instagram.svg" alt="" /></li>
          <li><img src="Assets/images/icons/linkedin.svg" alt="" /></li>
          <li><img src="Assets/images/icons/twitter.svg" alt="" /></li>
        </ul>
        <h4>Bizi Sosyal Medyadan Takip Ediniz</h4>
        <h4>
          Copyright @2020 Desing And Creating by <a href="#">Veysel GÜNEŞ</a>
        </h4>
      </div>
    </footer>

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
