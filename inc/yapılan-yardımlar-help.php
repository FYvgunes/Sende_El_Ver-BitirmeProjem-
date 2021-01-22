<head>
    <link rel="stylesheet" href="css/Blog/style.css">

</head>

<?php
echo !defined("INDEX") ? header("Location: " . URL . "/404.html") : null;
// Sayfalama sistemi
$sorgu = $db->query("SELECT yapılan_yardımlar_id FROM yapılan_yardımlar WHERE yapılan_yardımlar_p=0", PDO::FETCH_ASSOC);
$ksayisi = $sorgu->rowCount();
$sayfa = g("s") ? g("s") : 1;
$limit = 4; // 4 Tane gösteriyoruz tek seferde
$ssayisi = ceil($ksayisi / $limit);
$deger = 1;
if ($sayfa > $ssayisi) {
    $sayfa = 1;
} // Kullanıcı rastgele sayfa girebilir get ile, bunu önlemek için gereksiz sorgudan kurtulmak için
$baslangic = (($sayfa * $limit) + $deger) - $limit;

$row = $db->query("SELECT * FROM yapılan_yardımlar WHERE yapılan_yardımlar_p=0 ORDER BY yapılan_yardımlar_id DESC LIMIT  $limit", PDO::FETCH_ASSOC);


            if ($ksayisi > 0) {
                foreach ($row as $yardim) { ?>

<div class="help">
            <div class="imagebox">
              <img src="/Bitirme/<?php echo $yardim['yapılan_yardımlar_url']?>" alt="" />
              <div class="content">
                <h3><?php echo $yardim['yapılan_yardımlar_adres']?></h3>
                <p>
                 <?php echo $yardim['yapılan_yardımlar_text'];?>
                </p>
                <a href="<?php echo URL?>/yapılan-yardım-detay.php?do=<?php echo $yardim['yapılan_yardımlar_id']?>">Detay</a>
              </div>
            </div>
          </div>

 <?php } ?>

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