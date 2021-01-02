<?php echo !defined("INDEX") ? header("Location: " . URL . "/404.php") : null;

$id = g('id');
$sor = $db->query("SELECT * FROM user WHERE user_id={$id} ");
$icerik = $sor->fetch(PDO::FETCH_ASSOC);
$icerik_varmi = $sor->rowCount();
if ($icerik_varmi > 0) {
    null;
} else {
    header("Location: " . URL . "/en/admin/index.php?do=user");
    exit;
}
?>
<section class="section">
    <div class="section-inner">
        <h2 class="heading"><i class="fa fa-trash-o"></i> Yardımsever Sil</h2>
        <div class="item row">
            <?php
            $sil = $db->prepare("DELETE FROM user WHERE user_id={$id}");
            $sil->execute();
            header("Refresh: 2; url=" . URL . "/en/admin/index.php?do=user");
            ?>
            <p class="alert alert-success">Yardımsever Silindi</p>
        </div>
    </div>
</section>