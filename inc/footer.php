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
           <?php
      foreach($row1 as $header)
      {?>
      <li>
        <a href="<?php echo $header['Header_url']?>"><?php echo $header['Header_title']?></a>
      </li>
      <?php }?>
           
            <li><a href="giris_yontemi.php">Giriş</a></li>
            <li><a href="kayit_yöntemi.php">üye Ol</a></li>
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
