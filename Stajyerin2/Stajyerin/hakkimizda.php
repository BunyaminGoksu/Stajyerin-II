<?php require_once 'header.php';


$hakkimizdasor = $db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:hakkimizda_id");
$hakkimizdasor->execute(array(
  'hakkimizda_id' => 0
));
$hakkimizdacek = $hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Anasayfa <i class="fa fa-chevron-right"></i></a></span> <span>Hakkımızda <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Hakkımızda</h1>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section ftco-about img">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-12 about-intro">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="d-flex about-wrap">
              <div class="img d-flex align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
              </div>
              <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(images/about.jpg);">
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4"><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h2>
                <p><?php echo $hakkimizdacek['hakkimizda_icerik'] ?></p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>









<?php require_once 'footer.php' ?>