<?php

require_once 'header.php';

if (isset($_POST['arama'])) {

    
    $aranan =$_POST['aranan'];
     $sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_sirketad LIKE ? ");
     $sirketyorumsor->execute(array("%$aranan%"));
 
     $say = $sirketyorumsor->rowCount();
 } else {
 
 
    header("Location:index.php?durum_bos");
 }




?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Anasayfa<i class="fa fa-chevron-right"></i></a></span> <span>Yorumlar<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Yorumlar</h1>
                
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">


            <?php
            if ($say==0) {
                echo "Bu kategoride ürün bulunamadı";
                
            }
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
                       <!-- <?php

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

                        ?> !-->
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php' ?>