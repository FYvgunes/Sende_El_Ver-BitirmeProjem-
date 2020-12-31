<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null;

$id = g('id');
$sor = $db->query("SELECT * FROM yardimci WHERE yardimci_id={$id} AND yardimci_p=0");
$icerik = $sor->fetch(PDO::FETCH_ASSOC);
$icerik_varmi = $sor->rowCount();
if ($icerik_varmi > 0) {
    null;
} else {
    header("Location: " . URL . "/en/admin/index.php?do=yardimci");
    exit;
}
?>
<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-trash-o"></i> Yardımsever Sil</h2>
        <div class="item row">
            <?php
            $sil = $db->prepare("DELETE FROM yardimci WHERE yardimci_id={$id}");
            $sil->execute();
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=yardimci");
            ?>
            <p class="alert alert-success">Yardımsever Silindi</p>
        </div>
    </div>
</section>