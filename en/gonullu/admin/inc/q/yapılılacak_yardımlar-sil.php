<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null;

$id = g('id');
$sor = $db->query("SELECT * FROM yapılacak_yardımlar WHERE yapılılacak_yardımlar_id={$id} AND yapılılacak_yardımlar_p=0");
$icerik = $sor->fetch(PDO::FETCH_ASSOC);
$icerik_varmi = $sor->rowCount();
if ($icerik_varmi > 0) {
    null;
} else {
    header("Location: " . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
    exit;
}
?>
<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-trash-o"></i> Yapılacak Yardımı Sil</h2>
        <div class="item row">
            <?php
            $sil = $db->prepare("DELETE FROM yapılacak_yardımlar WHERE yapılılacak_yardımlar_id={$id}");
            $sil->execute();
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yapilacak_yardimlar");
            ?>
            <p class="alert alert-success">Yapılan yardım Silindi</p>
        </div>
    </div>
</section>