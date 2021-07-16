<?php

require_once 'header.php';
$sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where kullanici_mail=:kullanici_mail and sirketyorum_durum=:sirketyorum_durum ORDER BY sirketyorum_zaman DESC limit 6");
$sirketyorumsor->execute(array(
    'kullanici_mail' => $_SESSION['userkullanici_mail'],
  'sirketyorum_durum' => 1
  
));

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Anasayfa<i class="fa fa-chevron-right"></i></a></span> <span>Yorumlarım<i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Yorumlarım</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
      

    <?php
    while($sirketyorumcek=$sirketyorumsor->fetch(PDO::FETCH_ASSOC)){
$zaman = explode(" " , $sirketyorumcek['sirketyorum_zaman']);
  
    
    ?>
    
    <div class="col-lg-4 ftco-animate">
        <div class="blog-entry">
          <div class="text d-block">
            <div class="meta">
              <p>
                <a href="#"><span class="fa fa-calendar mr-2"></span><?php echo $zaman[0] ?></a><br>
                <a href="#"><span class="fa fa-user mr-2"></span><?php echo $sirketyorumcek['kullanici_adsoyad'] ?></a>
              </p>
            </div>
            <h3 class="heading"><a href="yorum-detay.php?yorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>"><?php echo $sirketyorumcek['sirketyorum_sirketad'] ?></a></h3>
            <p><?php echo substr($sirketyorumcek['sirketyorum_detay'],0,160) ?>...</p>
            <p><a href="sirket-yorum-duzenle.php?yorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>" class="btn btn-secondary py-2 px-3">Devamını Oku</a></p>
          </div>
        </div>
      </div>


<?php } ?>


    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'footer.php' ?>