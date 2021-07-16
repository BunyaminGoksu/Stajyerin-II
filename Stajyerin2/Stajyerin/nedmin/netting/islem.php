<?php
error_reporting(E_ALL & ~E_NOTICE);

ob_start();
session_start();

include 'baglan.php';

include '../production/fonksiyon.php';


if (isset($_POST['profilguncelle'])) {

    $kullanici_id = $_POST['kullanici_id'];

    $ayarkaydet = $db->prepare("UPDATE kullanici SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    kullanici_adsoyad=:kullanici_adsoyad,
    kullanici_gsm=:kullanici_gsm
    WHERE  kullanici_id={$_POST['kullanici_id']}");


    $update = $ayarkaydet->execute(array(
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_gsm' => $_POST['kullanici_gsm']

    ));

    if ($update) {
        header("Location:../../profil-bilgilerim.php?id=$kullanici_id&durum=ok");
    } else {
        header("Location:../../profil-bilgilerim.php?id=$kullanici_id&durum=no");
    }
}


if (isset($_POST['kullanicigiris'])) {

    $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
    $kullanici_password = md5($_POST['kullanici_password']);

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:kullanici_mail and kullanici_password=:kullanici_password and kullanici_yetki=:kullanici_yetki and kullanici_durum=:kullanici_durum");
    $kullanicisor->execute(array(
        'kullanici_mail' => $kullanici_mail,
        'kullanici_password' => $kullanici_password,
        'kullanici_yetki' => 1,
        'kullanici_durum' => 1


    ));

    $say = $kullanicisor->rowCount();

    if ($say == 1) {

        $_SESSION['userkullanici_mail'] = $kullanici_mail;
        header("Location:../../index.php?durum=ok");
    } else {
        header("Location:../../index.php?durum=no");
    }
}


if (isset($_POST['admingiris'])) {

    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_password = $_POST['kullanici_password'];

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:kullanici_password and kullanici_yetki=:yetki");
    $kullanicisor->execute(array(

        'mail' => $kullanici_mail,
        'kullanici_password' => $kullanici_password,
        'yetki' => 5

    ));

    $say = $kullanicisor->rowCount();

    if ($say == 1) {

        $_SESSION['kullanici_mail'] =  $kullanici_mail;

        header("Location:../production/index.php?durum=ok");
        exit;
    } else {
        header("Location:../production/login.php?durum=no");

        exit;
    }
}


if (isset($_POST['kullanicikaydet'])) {


    echo $kullanici_adsoyad = htmlspecialchars($_POST['kullanici_adsoyad']);
    echo $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
    echo $kullanici_gsm = htmlspecialchars($_POST['kullanici_gsm']);

    echo $kullanici_passwordone = $_POST['kullanici_passwordone'];
    echo $kullanici_passwordtwo = $_POST['kullanici_passwordtwo'];


    if ($kullanici_passwordone == $kullanici_passwordtwo) {


        if (strlen($kullanici_passwordone) >= 6) {

            $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:kullanici_mail");
            $kullanicisor->execute(array(
                'kullanici_mail' => $kullanici_mail
            ));

            $say = $kullanicisor->rowCount();

            if ($say == 0) {

                $password = md5($kullanici_passwordone);

                $kullanici_yetki = 1;
                $kullanicikaydet = $db->prepare("INSERT INTO kullanici SET
                
                kullanici_adsoyad=:kullanici_adsoyad,
                kullanici_mail=:kullanici_mail,
                kullanici_gsm=:kullanici_gsm,
                kullanici_password=:kullanici_password,
                kullanici_yetki=:kullanici_yetki");

                $insert = $kullanicikaydet->execute(array(
                    'kullanici_adsoyad' => $kullanici_adsoyad,
                    'kullanici_mail' => $kullanici_mail,
                    'kullanici_gsm' => $kullanici_gsm,
                    'kullanici_password' => $password,
                    'kullanici_yetki' => $kullanici_yetki

                ));
                if ($insert) {

                    header("Location:../../login.php?durum=loginbasarili");
                } else {
                    header("Location:../../index.php?durum=basarisiz");
                }
            } else {
                header("Location:../../index.php?durum=mukerrerkayit");
            }
        } else {
            header("Location:../../index.php?durum=eksiksifre");
        }
    } else {
        header("Location:../../index.php?durum=farklisifre");
    }
}



if (isset($_POST['kullaniciduzenle'])) {

    echo $kullanici_id = $_POST['kullanici_id'];

    $kullanicikaydet = $db->prepare("UPDATE kullanici SET 
    
    kullanici_adsoyad=:kullanici_adsoyad,
    kullanici_durum=:kullanici_durum
    WHERE kullanici_id={$_POST['kullanici_id']}");

    $update = $kullanicikaydet->execute(array(
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_durum' => $_POST['kullanici_durum']

    ));
    if ($update) {

        Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");
    } else {
        Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
    }
}

if ($_GET['kullanicisil'] == "ok") {

    $sil = $db->prepare("DELETE from kullanici where kullanici_id=:kullanici_id");
    $kontrol = $sil->execute(array(
        'kullanici_id' => $_GET['kullanici_id']
    ));

    if ($kontrol) {

        Header("Location:../production/kullanici.php?durum=ok");
    } else {

        Header("Location:../production/kullanici.php?durum=no");
    }
}





if (isset($_POST['genelayarkaydet'])) {


    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author
    WHERE ayar_id=0
    ");


    $update = $ayarkaydet->execute(array(
        'ayar_title' => $_POST['ayar_title'],
        'ayar_description' => $_POST['ayar_description'],
        'ayar_keywords' => $_POST['ayar_keywords'],
        'ayar_author' => $_POST['ayar_author']
    ));

    if ($update) {
        header("Location:../production/genel-ayar.php?durum=ok");
    } else {
        header("Location:../production/genel-ayar.php?durum=no");
    }
}


if (isset($_POST['iletisimayarkaydet'])) {


    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    ayar_tel=:ayar_tel,
    ayar_gsm=:ayar_gsm,
    ayar_faks=:ayar_faks,
    ayar_mail=:ayar_mail,
    ayar_ilce=:ayar_ilce,
    ayar_il=:ayar_il,
    ayar_adres=:ayar_adres,
    ayar_mesai=:ayar_mesai
    WHERE ayar_id=0
    ");


    $update = $ayarkaydet->execute(array(
        'ayar_tel' => $_POST['ayar_tel'],
        'ayar_gsm' => $_POST['ayar_gsm'],
        'ayar_faks' => $_POST['ayar_faks'],
        'ayar_mail' => $_POST['ayar_mail'],
        'ayar_ilce' => $_POST['ayar_ilce'],
        'ayar_il' => $_POST['ayar_il'],
        'ayar_adres' => $_POST['ayar_adres'],
        'ayar_mesai' => $_POST['ayar_mesai']
    ));

    if ($update) {
        header("Location:../production/iletisim-ayar.php?durum=ok");
    } else {
        header("Location:../production/iletisim-ayar.php?durum=no");
    }
}



if (isset($_POST['apiayarkaydet'])) {


    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    ayar_analystic=:ayar_analystic,
    ayar_maps=:ayar_maps,
    ayar_zopim=:ayar_zopim
    
    WHERE ayar_id=0
    ");


    $update = $ayarkaydet->execute(array(
        'ayar_analystic' => $_POST['ayar_analystic'],
        'ayar_maps' => $_POST['ayar_maps'],
        'ayar_zopim' => $_POST['ayar_zopim']

    ));

    if ($update) {
        header("Location:../production/api-ayar.php?durum=ok");
    } else {
        header("Location:../production/api-ayar.php?durum=no");
    }
}




if (isset($_POST['sosyalayarkaydet'])) {


    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    ayar_facebook=:ayar_facebook,
    ayar_twitter=:ayar_twitter,
    ayar_google=:ayar_google,
    ayar_youtube=:ayar_youtube
    WHERE ayar_id=0
    ");


    $update = $ayarkaydet->execute(array(
        'ayar_facebook' => $_POST['ayar_facebook'],
        'ayar_twitter' => $_POST['ayar_twitter'],
        'ayar_google' => $_POST['ayar_google'],
        'ayar_youtube' => $_POST['ayar_youtube']
    ));

    if ($update) {
        header("Location:../production/sosyal-ayar.php?durum=ok");
    } else {
        header("Location:../production/sosyal-ayar.php?durum=no");
    }
}


if (isset($_POST['mailayarkaydet'])) {


    $ayarkaydet = $db->prepare("UPDATE ayar SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    ayar_smtphost=:ayar_smtphost,
    ayar_smtpuser=:ayar_smtpuser,
    ayar_smtppassword=:ayar_smtppassword,
    ayar_smtpport=:ayar_smtpport
    WHERE ayar_id=0
    ");


    $update = $ayarkaydet->execute(array(
        'ayar_smtphost' => $_POST['ayar_smtphost'],
        'ayar_smtpuser' => $_POST['ayar_smtpuser'],
        'ayar_smtppassword' => $_POST['ayar_smtppassword'],
        'ayar_smtpport' => $_POST['ayar_smtpport']
    ));

    if ($update) {
        header("Location:../production/mail-ayar.php?durum=ok");
    } else {
        header("Location:../production/mail-ayar.php?durum=no");
    }
}


if (isset($_POST['hakkimizdakaydet'])) {


    $ayarkaydet = $db->prepare("UPDATE hakkimizda SET 
    

    /*Tablo güncelleme işlemi kodları */
    
    hakkimizda_baslik=:hakkimizda_baslik,
    hakkimizda_icerik=:hakkimizda_icerik,
    hakkimizda_vizyon=:hakkimizda_vizyon,
    hakkimizda_misyon=:hakkimizda_misyon
    WHERE hakkimizda_id=0
    ");


    $update = $ayarkaydet->execute(array(
        'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
        'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
        'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
        'hakkimizda_misyon' => $_POST['hakkimizda_misyon']

    ));

    if ($update) {
        header("Location:../production/hakkimizda.php?durum=ok");
    } else {
        header("Location:../production/hakkimizda.php?durum=no");
    }
}



if (isset($_POST['menuduzenle'])) {

    $menu_id = $_POST['menu_id'];
    $menu_seourl = seo($_POST['menu_ad']);


    $menukaydet = $db->prepare("UPDATE menu SET

   menu_ad=:menu_ad,
   menu_detay=:menu_detay,
   menu_url=:menu_url,
   menu_sira=:menu_sira,
   menu_seourl=:menu_seourl,
   menu_durum=:menu_durum
   WHERE menu_id={$_POST['menu_id']}");

    $update = $menukaydet->execute(array(
        'menu_ad' => $_POST['menu_ad'],
        'menu_detay' => $_POST['menu_detay'],
        'menu_url' => $_POST['menu_url'],
        'menu_sira' => $_POST['menu_sira'],
        'menu_seourl' => $menu_seourl,
        'menu_durum' => $_POST['menu_durum'],

    ));

    if ($update) {

        header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");
    } else {
        header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");
    }
}


if (isset($_POST['menukaydet'])) {

    $menu_seourl = seo($_POST['menu_ad']);


    $ayarekle = $db->prepare("INSERT INTO menu SET
    menu_ad=:menu_ad,
    menu_detay=:menu_detay,
    menu_url=:menu_url,
    menu_sira=:menu_sira,
    menu_seourl=:menu_seourl,
    menu_durum=:menu_durum
    ");

    $insert = $ayarekle->execute(array(
        'menu_ad' => $_POST['menu_ad'],
        'menu_detay' => $_POST['menu_detay'],
        'menu_url' => $_POST['menu_url'],
        'menu_sira' => $_POST['menu_sira'],
        'menu_seourl' => $menu_seourl,
        'menu_durum' => $_POST['menu_durum']
    ));

    if ($insert) {
        header("Location:../production/menu.php?durum=ok");
    } else {
        header("Location:../production/menu.php?durum=no");
    }
}


if ($_GET['menusil'] == "ok") {

    $sil = $db->prepare("DELETE from menu where menu_id=:menu_id");
    $kontrol = $sil->execute(array(
        'menu_id' => $_GET['menu_id']
    ));

    if ($kontrol) {

        Header("Location:../production/menu.php?durum=ok");
        exit;
    } else {

        Header("Location:../production/menu.php?durum=no");
    }
}


if (isset($_POST['sirketyorumyap'])) {


    $kullanici_id = $_POST['kullanici_id'];
    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_adsoyad = $_POST['kullanici_adsoyad'];



    $yorumyap = $db->prepare("INSERT INTO sirketyorum SET

    kullanici_id=:kullanici_id,
    kullanici_mail=:kullanici_mail,
    kullanici_adsoyad=:kullanici_adsoyad,
    sirketyorum_sirketad=:sirketyorum_sirketad,
    sirketyorum_departman=:sirketyorum_departman,
    sirketyorum_sure=:sirketyorum_sure,
    sirketyorum_il=:sirketyorum_il,
    sirketyorum_ilce=:sirketyorum_ilce,
    sirketyorum_detay=:sirketyorum_detay
    ");



    $insert = $yorumyap->execute(array(

        'kullanici_id' => $kullanici_id,
        'kullanici_mail' => $kullanici_mail,
        'kullanici_adsoyad' => $kullanici_adsoyad,
        'sirketyorum_sirketad' => $_POST['sirketyorum_sirketad'],
        'sirketyorum_departman' => $_POST['sirketyorum_departman'],
        'sirketyorum_sure' => $_POST['sirketyorum_sure'],
        'sirketyorum_il' => $_POST['sirketyorum_il'],
        'sirketyorum_ilce' => $_POST['sirketyorum_ilce'],
        'sirketyorum_detay' => $_POST['sirketyorum_detay']
    ));

    if ($insert) {

        header("Location:../../yorum-yap.php?durum=ok");
    } else {
        header("Location:../../yorum-yap.php?durum=no");
    }
}



if (isset($_POST['sirketyorumduzenle'])) {

    echo $sirketyorum_id = $_POST['sirketyorum_id'];


    $ayarkaydet = $db->prepare("UPDATE sirketyorum SET 
    sirketyorum_durum=:sirketyorum_durum
    WHERE  sirketyorum_id={$_POST['sirketyorum_id']}");


    $update = $ayarkaydet->execute(array(
        'sirketyorum_durum' => $_POST['sirketyorum_durum']

    ));

    if ($update) {
        header("Location:../production/sirket-yorum.php?yorum_id=$sirketyorum_id&durum=ok");
    } else {
        header("Location:../production/sirket-yorum.php?yorum_id=$sirketyorum_id&durum=no");
    }
}
if ($_GET['sirketyorumsil'] == "ok") {

    $sil = $db->prepare("DELETE from sirketyorum where sirketyorum_id=:sirketyorum_id");
    $kontrol = $sil->execute(array(
        'sirketyorum_id' => $_GET['sirketyorum_id']
    ));

    if ($kontrol) {

        Header("Location:../production/sirket-yorum.php?durum=ok");
    } else {

        Header("Location:../production/sirket-yorum.php?durum=no");
    }
}




if(isset($_POST['yorumyap'])){


    $sirketyorum_id =$_POST['sirketyorum_id'];

    $yorumyap=$db->prepare("INSERT INTO yorumlar SET

    kullanici_id=:kullanici_id,
    sirketyorum_id=:sirketyorum_id,
    kullanici_adsoyad=:kullanici_adsoyad,
    yorum_detay=:yorum_detay
   
    ");



$insert=$yorumyap->execute(array(

    'kullanici_id' => $_POST['kullanici_id'],
    'sirketyorum_id' => $_POST['sirketyorum_id'],
    'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
    'yorum_detay' => $_POST['yorum_detay']
   
));

if($insert){

    header("Location:../../yorum-detay.php?yorum_id=$sirketyorum_id&durum=ok");
}else{
    header("Location:../../yorum-detay.php?yorum_id=$sirketyorum_id&durum=no");

}




}



if (isset($_POST['yorumduzenle'])) {

    echo $sirketyorum_id = $_POST['sirketyorum_id'];


    $ayarkaydet = $db->prepare("UPDATE yorumlar SET 
    yorum_onay=:yorum_onay
    WHERE  yorum_id={$_POST['yorum_id']}");


    $update = $ayarkaydet->execute(array(
        'yorum_onay' => $_POST['yorum_onay']

    ));

    if ($update) {
        header("Location:../production/yorumlar.php?yorum_id=$sirketyorum_id&durum=ok");
    } else {
        header("Location:../production/yorumlar.php?yorum_id=$sirketyorum_id&durum=no");
    }
}




if (isset($_POST['sirketyorumguncelle'])) {

    $sirketyorum_id = $_POST['sirketyorum_id'];


    $yorumkaydet = $db->prepare("UPDATE sirketyorum SET

sirketyorum_sirketad=:sirketyorum_sirketad,
sirketyorum_departman=:sirketyorum_departman,
sirketyorum_sure=:sirketyorum_sure,
sirketyorum_il=:sirketyorum_il,
sirketyorum_ilce=:sirketyorum_ilce,
sirketyorum_detay=:sirketyorum_detay
   WHERE sirketyorum_id={$_POST['sirketyorum_id']}");

    $update = $yorumkaydet->execute(array(
        'sirketyorum_sirketad' => $_POST['sirketyorum_sirketad'],
        'sirketyorum_departman' => $_POST['sirketyorum_departman'],
        'sirketyorum_sure' => $_POST['sirketyorum_sure'],
        'sirketyorum_il' => $_POST['sirketyorum_il'],
        'sirketyorum_ilce' => $_POST['sirketyorum_ilce'],
        'sirketyorum_detay' => $_POST['sirketyorum_detay']

    ));

    if ($update) {

        header("Location:../../sirket-yorum-duzenle.php?yorum_id=$sirketyorum_id&durum=ok");
    } else {
        header("Location:../../sirket-yorum-duzenle.php?yorum_id=$sirketyorum_id&durum=no");
    }
}


if (isset($_POST['sirketyorumsill'])) {


    $sirketyorum_id=$_POST['sirketyorum_id'];

    $sil = $db->prepare("DELETE from sirketyorum where sirketyorum_id=:sirketyorum_id");
    $kontrol = $sil->execute(array(
        'sirketyorum_id' => $_POST['sirketyorum_id']
    ));

    if ($kontrol) {

        Header("Location:../../yorumlarim.php?durum=ok");
    } else {

        Header("Location:../../yorumlarim.php?durum=no");
    }
}

?>