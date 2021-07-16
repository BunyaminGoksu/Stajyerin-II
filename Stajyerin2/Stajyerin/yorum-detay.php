<?php require_once 'header.php';
$sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_id=:sirketyorum_id");
$sirketyorumsor->execute(array(
    'sirketyorum_id' => $_GET['yorum_id']
));


$sirketyorumcek = $sirketyorumsor->fetch(PDO::FETCH_ASSOC);

$yorumsor = $db->prepare("SELECT * FROM yorumlar where sirketyorum_id=:sirketyorum_id and yorum_onay=:yorum_onay");
$yorumsor->execute(array(
    'sirketyorum_id' => $_GET['yorum_id'],
    'yorum_onay' => 1
));
$say = $yorumsor->rowCount();

?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Anasayfa <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="yorumlar.php">Yorumlar <i class="fa fa-chevron-right"></i></a></span> <span>Yorum Detay <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Yorum Detay</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">

                <p>Şirket İl : <?php echo $sirketyorumcek['sirketyorum_il'] ?></p>
                <p style="margin-top:-20px;">Şirket İlçe : <?php echo $sirketyorumcek['sirketyorum_ilce'] ?></p>
                <p style="margin-top:-20px;">Çalıştığı Departman : <?php echo $sirketyorumcek['sirketyorum_departman'] ?></p>
                <p style="margin-top:-20px;">Çalıştığı Süre : <?php echo $sirketyorumcek['sirketyorum_sure'] ?></p>

                <h2 class="mb-3"><?php echo $sirketyorumcek['sirketyorum_sirketad'] ?></h2>
                <p><?php echo $sirketyorumcek['sirketyorum_detay'] ?></p>



                <p align="right">Yazan : <?php echo $sirketyorumcek['kullanici_adsoyad'] ?></p>





                <div class="pt-5 mt-5">
                    <h3 class="mb-5" style="font-size: 20px; font-weight: bold;"><?php echo $say ?> Yorum</h3>


                    <ul class="comment-list">
                        <?php

                        while ($yorumcek = $yorumsor->fetch(PDO::FETCH_ASSOC)) {
                            $say++;


                        ?>

                            <li class="comment">

                                <div class="comment-body">
                                    <h3><?php echo $yorumcek['kullanici_adsoyad'] ?></h3>
                                    <div class="meta"><?php echo $yorumcek['yorum_zaman'] ?></div>
                                    <p><?php echo $yorumcek['yorum_detay'] ?></p>
                                </div>
                            </li>
                        <?php } ?>


                    </ul>
                    <!-- END comment-list -->


                    <div class="comment-form-wrap pt-5">


                        <form action="nedmin/netting/islem.php" method="POST" class="p-5 bg-light">

                            <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">Yorum Yap</h3>
                            <div class="form-group">
                                <textarea cols="30" rows="10" class="form-control" name="yorum_detay" placeholder="Lütfen yorumunuzu buraya yazınız"></textarea>
                            </div>

                            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
                            <input type="hidden" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>">
                            <input type="hidden" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
                            <input type="hidden" name="sirketyorum_id" value="<?php echo $sirketyorumcek['sirketyorum_id'] ?>">




                            <div align="right" class="form-group">
                                <button type="submit" name="yorumyap" class="btn btn-primary">Yorum Yap</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate pl-md-4 py-md-5">
                
                <?php

                $sirketyorumsor1 = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_durum=:sirketyorum_durum ORDER BY sirketyorum_zaman DESC limit 3");
                $sirketyorumsor1->execute(array(
                    'sirketyorum_durum' => 1
                ));



                ?>

                <div class="sidebar-box ftco-animate">
                    <h3>Son Yorumlar</h3>


                    <?php

                    $zaman = explode(" ", $sirketyorumcek['sirketyorum_zaman']);
                    while ($sirketyorumcek1 = $sirketyorumsor1->fetch(PDO::FETCH_ASSOC)) {  ?>

                        <div class="block-21 mb-4 d-flex">

                            <div class="text">
                                <h3 class="heading"><a href="#"><?php echo substr($sirketyorumcek1['sirketyorum_sirketad'], 0, 150) ?></a></h3>
                                <p><?php echo substr($sirketyorumcek1['sirketyorum_detay'], 0, 150) ?>... <a href="yorum-detay.php?yorum_id=<?php echo $sirketyorumcek1['sirketyorum_id'] ?>">Devamını Oku</a></p>
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> <?php echo $zaman[0] ?></a></div>
                                    <div><a href="#"><span class="fa fa-user"></span> <?php echo $sirketyorumcek1['kullanici_adsoyad'] ?></a></div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>




            </div>

        </div>
    </div>
</section> <!-- .section -->

<?php require_once 'footer.php' ?>