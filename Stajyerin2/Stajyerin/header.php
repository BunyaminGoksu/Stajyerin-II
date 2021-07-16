<?php 
error_reporting(E_ALL & ~E_NOTICE);

require_once 'nedmin/netting/baglan.php';
ob_start();
session_start();


$ayarsor = $db->prepare("SELECT * FROM ayar where ayar_id=:ayar_id");

$ayarsor->execute(array(
  'ayar_id' => 0
));

$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);


$menusor = $db->prepare("SELECT * FROM menu where menu_durum=:menu_durum ORDER BY menu_sira ASC");
$menusor->execute(array(
  'menu_durum' => 1
));


$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['userkullanici_mail']
));
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $ayarcek['ayar_title'] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span>Staj</span>yerin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Anasayfa</a></li>

          

          <?php

          while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { ?>
            <li class="nav-item"><a href="<?php echo $menucek['menu_url'] ?>" class="nav-link"><?php echo $menucek['menu_ad'] ?></a></li>
          <?php  }

          ?>


        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->