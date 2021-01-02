<?php echo !defined("INDEX") ? header("Location: " . URL . "/en/404.html") : null; ?>
<aside class="skills aside section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-globe"></i> Hızlı Menü</h2>
        <div class="content">



            <!-- Contact Start -->

            <p><a style="text-transform:capitalize; text-transform:uppercase; font-weight: 600;" href="<?php echo URL . "/en/admin/index.php?do=yapilacak_yardimlar"; ?>"><i class="fa fa-paw"></i> Yapılacak Yardımlar</a>
            <p><a style="text-transform:capitalize; text-transform:uppercase; font-weight: 600;" href="<?php echo URL . "/en/admin/index.php?do=yapilan_yardimlar"; ?>"><i class="fa fa-paw"></i> Yapılan Yardımlar</a>
            <p><a style="text-transform:capitalize; text-transform:uppercase; font-weight: 600;" href="<?php echo URL . "/en/admin/index.php?do=yardimci"; ?>"><i class="fa fa-users"></i> Yardımseverler</a>
            <p><a style="text-transform:capitalize; text-transform:uppercase; font-weight: 600;" href="<?php echo URL . "/en/admin/index.php?do=user"; ?>"><i class="fa fa-users"></i> Gönüllüler</a>

            <p><a style="text-transform:capitalize; text-transform:uppercase; font-weight: 600;" href="<?php echo URL . "/en/admin/index.php?do=contacttr"; ?>"><i class="fas fa-fa-phone"></i> İletişim</a>

                <!-- Contact End -->

                <p><a style=" text-transform: uppercase;font-weight: 700;" href="<?php echo URL . "/en/admin/index.php?do=guvenlik"; ?>"><i class="fa fa-key"></i> Şifre Değiştir</a></p>
                <p><a style=" text-transform: uppercase;font-weight: 700;" href="<?php echo URL . "/en/admin/index.php?do=ayar"; ?>"><i class="fa fa-cog"></i> Ayarları Değiştir</a></p>
                <p><a style=" text-transform: uppercase;font-weight: 700;" href="<?php echo URL . "/en/admin/index.php?do=mesaj"; ?>"><i class="fa fa-comments"></i> Mesajları Göster</a></p>
                <p><a style=" text-transform: uppercase;font-weight: 700;" href="<?php echo URL . "/en/admin/index.php?do=cikis"; ?>"><i class="fa fa-sign-out"></i> Çıkış Yap</a></p>
        </div>
    </div>
</aside>