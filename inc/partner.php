<head>
    <link rel="stylesheet" href="css/Blog/style.css">

</head>

<?php
echo !defined("INDEX") ? header("Location: " . URL . "/404.html") : null;
// Sayfalama sistemi
$sorgu = $db->query("SELECT partner_id FROM partnerler WHERE partner_p=0", PDO::FETCH_ASSOC);
$ksayisi = $sorgu->rowCount();
$sayfa = g("s") ? g("s") : 1;
$limit = 4; // 4 Tane gösteriyoruz tek seferde
$ssayisi = ceil($ksayisi / $limit);
$deger = 1;
if ($sayfa > $ssayisi) {
    $sayfa = 1;
} // Kullanıcı rastgele sayfa girebilir get ile, bunu önlemek için gereksiz sorgudan kurtulmak için
$baslangic = (($sayfa * $limit) + $deger) - $limit;

$row = $db->query("SELECT * FROM partnerler WHERE partner_p=0 ORDER BY partner_id DESC LIMIT  $limit", PDO::FETCH_ASSOC);?>
<section id="Partners">
    <div class="section-title">
        <h1><span>P</span>artnerler</h1>
        <p>Yardımları yaparken bizleri destekleyen kuruluşlar</p>
    </div>
    <div class="partners" style="display:flex; flex-wrap:wrap;">

        <?php if ($ksayisi > 0) {
                foreach ($row as $yardim) { ?>

        <div class="partner">
            <img style="width:150px; height:150px;" src="/Bitirme/<?php echo $yardim["partner_url"]?>" alt="">
        </div>

        <?php } ?>
    </div>
</section>

<?php } else { ?>
<section class="section">
    <div class="section-inner">
        <div class="item row">
            <p class="text-center"><i class="fa fa-file-text-o fa-5x"></i></p>
            <p class="text-center">Hiç içerik eklenmemiş.</p>
        </div>
    </div>
</section>
<?php } ?>