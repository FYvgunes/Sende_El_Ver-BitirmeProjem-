<?php
define("INDEX", true);
require_once('../config.php');
?>

<?php
if ($_POST) {


    $Kullanıcı_adi= p('KullaniciAdi');
    $Kullanıcı_Email = p('Kullanıcıemail');
    $Kullanıcı_sifre= sifre('Kullanicisifre');
   
if(empty($Kullanıcı_adi) || empty($Kullanıcı_Email) || empty( $Kullanıcı_sifre)){
			 $alert = array(
                        "message" => "Lütfen Bütün alanları doldurun",
                        "type" => "rgba(241, 65, 65, 0.74);"
                        
                    );
                    $_SESSION["alert"]=$alert;
                    header("location:/Bitirme/gonullu_uyeol.php");
		}else{
			$sorgu = $db->prepare("SELECT COUNT(*) FROM user WHERE user_username ='{$Kullanıcı_adi}'");
			$sorgu->execute();
			$say = $sorgu->fetchColumn();
			if($say>0){
                 $alert = array(
                        "message" => "Eklemeye çalıştığınız içerik zaten mevcut. Aynı başlıkta içerik kabul etmiyoruz başka bir başlıkla tekrar deneyebilirsin.",
                        "type" => "rgba(241, 65, 65, 0.74);"
                        
                    );
                    $_SESSION["alert"]=$alert;
                   
                    header("location:/Bitirme/gonullu_uyeol.php");
				
			}else{
				$insert = $db->exec("INSERT INTO user SET  user_username='{$Kullanıcı_adi}', user_email ='{$Kullanıcı_Email}', user_sifre ='{$Kullanıcı_sifre}' ");
				//$insert->execute();
				$alert = array(
                        "message" => "Kaynınız Başarılı bir şekilde ğerçekleştirildi",
                        "type" => "rgba(89, 190, 89, 0.808)"
                        
                    );
                    $_SESSION["alert"]=$alert;
                    header("location:/Bitirme/gonullu_uyeol.php");
                    


                 
			  }
           
		}


   
}
?>