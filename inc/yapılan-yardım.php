<?php
echo !defined("INDEX") ? header("Location: ".URL."/tr/404.html") : null;
// Sayfalama sistemi
$sorgu = $db->query("SELECT yapılılacak_yardımlar_id FROM yapılacak_yardımlar WHERE  yapılılacak_yardımlar_p=0", PDO::FETCH_ASSOC);
$ksayisi = $sorgu->rowCount();
$sayfa = g("s") ? g("s") : 1;
$limit = 1; // 15 Tane kayıt gösteriyoruz tek seferde
$ssayisi = ceil($ksayisi/$limit);
if($sayfa>$ssayisi){ $sayfa=1; } // Kullanıcı rastgele sayfa girebilir get ile, bunu önlemek için gereksiz sorgudan kurtulmak için
$baslangic = ($sayfa * $limit) - $limit;

$row = $db->query("SELECT * FROM yapılacak_yardımlar WHERE yapılılacak_yardımlar_p=0 ORDER BY yapılılacak_yardımlar_id DESC", PDO::FETCH_ASSOC); 

if($ksayisi>0){
    foreach($row as $Blog){
        ?>
<div class="help">
            <div class="imagebox">
              <img src="/Bitirme/<?php echo $Blog['yapılılacak_yardımlar_url']?>" alt="" />
              <div class="content">
                <h3><?php echo $Blog['yapılılacak_yardımlar_adres']?></h3>
                <p>
                 <?php echo $Blog['yapılılacak_yardımlar_text'];?>
                </p>
                <a href="<?php echo URL?>/yapılan-yardım-detay.php?do=<?php echo $Blog['yapılılacak_yardımlar_id']?>">Detay</a>
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




































