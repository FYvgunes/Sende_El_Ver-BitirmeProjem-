<?php
echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null;
?>
<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-file-text-o"></i> Header<br />
        <small><a href="<?php echo URL . "/en/admin/index.php?do=Header-ekle"; ?>"><i class="fa fa-plus"></i> Header Ekle</a></small>
        </h2>
        <div class="item row">
            <?php
            $sorgu = $db->query("SELECT Header_id  FROM Header ", PDO::FETCH_ASSOC);
            $ksayisi = $sorgu->rowCount();
            $sayfa = g("s") ? g("s") : 1;
            $limit = 12; // 12 Tane gösteriyoruz tek seferde
            $ssayisi = ceil($ksayisi / $limit);
            if ($sayfa > $ssayisi) {
                $sayfa = 1;
            } // Kullanıcı rastgele sayfa girebilir get ile, bunu önlemek için gereksiz sorgudan kurtulmak için
            $baslangic = ($sayfa * $limit) - $limit;

            $row = $db->query("SELECT * FROM Header  ORDER BY Header_id DESC  LIMIT $baslangic, $limit", PDO::FETCH_ASSOC);
            foreach ($row as $content) {
            ?>
            <div class="list-group-item list-trend">
                <div class="clearfix content-heading">
                    <i class="fa fa-users  pull-left img-trend"
                        style="color:#00b894; font-size:25px; margin-top:10px"></i>
                    <!-- <img class="pull-left img-trend" src="/Bitirme/Assets/images/avatar.svg" alt=""> -->
                    <h3 class="txt-trend"><?php echo $content['Header_title']; ?> -
                        <span><?php echo $content['Header_id']; ?></span> <br />

                        <small> | <a
                                href="<?php echo URL . "/en/admin/index.php?do=Header-duzenle&id=" . $content['Header_id']; ?>"><i
                                    class="fa fa-edit"></i> Düzenle</a> | <a
                                onclick="return confirm('Yardımseveri silmek istediğinizden emin misiniz?');"
                                href="<?php echo URL . "/en/admin/index.php?do=header-sil&id=" . $content['Header_id']; ?>"><i
                                    class="fa fa-trash-o"></i> Sil</a></small></h3>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>