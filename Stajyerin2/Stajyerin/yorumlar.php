<?php

require_once 'header.php';



$sayfada = 6; // sayfada gösterilecek içerik miktarını belirtiyoruz.
$sorgu = $db->prepare("select * from sirketyorum");
$sorgu->execute();
$toplam_icerik = $sorgu->rowCount();
$toplam_sayfa = ceil($toplam_icerik / $sayfada);
// eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if ($sayfa < 1) $sayfa = 1;
// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if ($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;
$limit = ($sayfa - 1) * $sayfada;

$sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_durum=:sirketyorum_durum ORDER BY sirketyorum_zaman DESC limit $limit,$sayfada");
$sirketyorumsor->execute(array(
  'sirketyorum_durum' => 1
));



?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Anasayfa<i class="fa fa-chevron-right"></i></a></span> <span>Yorumlar<i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Yorumlar</h1>
        <div class="sidebar-box mt-md-5 bg-light">
        
                    <form action="arama.php" method="POST" class="search-form" role="form">
                    <div class="form-group">
													<!--<label for="search" class="col-sm-2 control-label">Search</label>-->
													<button  name="arama" class="btn btn-primary float-right " style="padding-left: -20px;"><i class="fa fa-search"></i> </button>
													<div class="col-sm-11">
														<input type="text" name="aranan" minlength="3" class="form-control" id="search">
													</div>
												</div>
                    </form>
                </div>
      </div>
      

    </div>
    
  </div>
</section>


<section class="ftco-section bg-light">



  <div class="container">
    <div class="row d-flex">


      <?php
      while ($sirketyorumcek = $sirketyorumsor->fetch(PDO::FETCH_ASSOC)) {
        $zaman = explode(" ", $sirketyorumcek['sirketyorum_zaman']);



      ?>

        <div class="col-lg-4 ftco-animate">
          <div class="blog-entry">
            <div class="text d-block">
              <div class="meta">
                <p>
                  <a href="#"><span class="fa fa-calendar mr-2"></span><?php echo $zaman[0] ?></a><br>
                  <a href="#"><span class="fa fa-user mr-2"></span><?php echo $sirketyorumcek['kullanici_adsoyad'] ?></a>
                  <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span>3</a>
                </p>
              </div>
              <h3 class="heading"><a href="yorum-detay.php?yorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>"><?php echo $sirketyorumcek['sirketyorum_sirketad'] ?></a></h3>
              <p><?php echo substr($sirketyorumcek['sirketyorum_detay'], 0, 160) ?>...</p>
              <p><a href="yorum-detay.php?yorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>" class="btn btn-secondary py-2 px-3">Devamını Oku</a></p>
            </div>
          </div>
        </div>


      <?php } ?>


    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <?php

            $s = 0;

            while ($s < $toplam_sayfa) {

              $s++; ?>

              <?php

              if ($s == $sayfa) { ?>

                <li class="active">

                  <a href="yorumlar.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                </li>

              <?php } else { ?>


                <li>

                  <a href="yorumlar.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                </li>

            <?php   }
            }

            ?>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
  
</section>

<?php require_once 'footer.php' ?>