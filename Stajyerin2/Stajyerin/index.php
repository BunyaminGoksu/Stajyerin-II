<?php require_once 'header.php';
error_reporting(E_ALL & ~E_NOTICE);


?>



<?php
if (isset($_SESSION['userkullanici_mail'])) { ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">

        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">

                <div style="margin-left: 650px ; margin-top: -100px;" class="col-md-7 ftco-animate">

                    <h1 class="mb-4">Stajyerine Hoş Geldiniz <?php echo $kullanicicek['kullanici_adsoyad'] ?></h1>
                    <a href="yorumlarim.php"><button style="margin-left:150px;" class="btn btn-primary">Yorumlarım</button></a>
                    <a href="profil-bilgilerim.php"><button  class="btn btn-light">Profil Bilgilerim</button></a>
                    <a href="logout.php"><button class="btn btn-danger">Çıkış Yap</button></a>


                </div>
            </div>
        </div>
    </div>

<?php } else { ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">

                <div class="col-md-7 ftco-animate">

                    <h1 class="mb-4">Stajyerine Hoş Geldiniz</h1>


                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5 order-md-last">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-4"> Kayıt Ol</h3>
                        <form action="nedmin/netting/islem.php" method="POST" class="signup-form">

                            <?php

                            if ($_GET['durum'] == "farklisifre") { ?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
                                </div>

                            <?php } elseif ($_GET['durum'] == "eksiksifre") { ?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
                                </div>

                            <?php } elseif ($_GET['durum'] == "mukerrerkayit") { ?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
                                </div>

                            <?php } elseif ($_GET['durum'] == "basarisiz") { ?>

                                <div class="alert alert-danger">
                                    <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
                                </div>

                            <?php }
                            ?>
                            <div class="form-group">
                                <label class="label" for="name">Adınız Soyadınız</label>
                                <input type="text" class="form-control" required="" name="kullanici_adsoyad" placeholder="Adınızı Soyadınızı Giriniz">
                            </div>
                            <div class="form-group">
                                <label class="label" for="email">E-mail</label>
                                <input type="e-mail" class="form-control" required="" name="kullanici_mail" placeholder="Mailinizi Giriniz">
                            </div>
                            <div class="form-group">
                                <label class="label" for="name">Telefon Numaranız</label>
                                <input type="tel" class="form-control" required="" name="kullanici_gsm" placeholder="Telefon Numarınızı Giriniz">
                            </div>
                            <div class="form-group">
                                <label class="label" for="password">Parola</label>
                                <input id="password-field" type="password" required="" class="form-control" name="kullanici_passwordone" placeholder="Parolanızı giriniz">
                            </div>
                            <div class="form-group">
                                <label class="label" for="password">Parola Tekrar</label>
                                <input id="password-field" type="password" required="" class="form-control" name="kullanici_passwordtwo" placeholder="Parolanızı tekrar giriniz">
                            </div>
                            <div class="form-group d-flex justify-content-end mt-4">
                                <button type="submit" name="kullanicikaydet" class="btn btn-primary submit">Kayıt Ol</button>
                            </div>
                        </form>
                        <p class="text-center">Zaten üye misiniz?<a href="login.php"> Giriş Yap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php }


?>





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
                                <span class="subheading">Enhanced Your Skills</span>
                                <h2 class="mb-4">Learn Anything You Want Today</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
//$kullanicisor1=$db->prepare("SELECT COUNT(*) FROM kullanici");
//$kullanicisor1->execute();
//$say1 = $kullanicisor1->fetchcolumn();
 
$kullanicisor1=$db->prepare("SELECT * FROM kullanici");
$kullanicisor1->execute();
$say1=$kullanicisor1->rowCount();


$sirketyorumsor1=$db->prepare("SELECT * FROM sirketyorum");
$sirketyorumsor1->execute();
$say2=$sirketyorumsor1->rowCount();
?>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div  style="margin-left:370px;" class="row">
            <div  class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-online"></span></div>
                    <div class="text">
                        <strong class="number" data-number="<?php echo $say1 ?>">0</strong>
                        <span>Kayıtlı Kullanıcı</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span <i class="fa fa-comment" aria-hidden="true"></i></span></div>
                    <div class="text">
                        <strong class="number" data-number="<?php echo $say2 ?>">0</strong>
                        <span>Yapılan Yorum</span>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>





<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">
                    <span class="subheading">Stajyerine Hoş Geldin</span>
                    <h2 class="mb-4">We Are StudyLab An Online Learning Center</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <div class="d-flex video-image align-items-center mt-md-4">
                        <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about.jpg);">
                            <span class="fa fa-play-circle"></span>
                        </a>
                        <h4 class="ml-4">Learn anything from StudyLab, Watch video</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Top Quality Content</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Highly Skilled Instructor</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">World Class &amp; Quiz</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Get Certified</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">

                <h2 class="mb-4">Yorumlar</h2>
            </div>
        </div>


        <div class="row d-flex">

            <?php

            $sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_durum=:sirketyorum_durum ORDER BY RAND()  limit 3");
            $sirketyorumsor->execute(array(
                'sirketyorum_durum' => 1
            ));
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
                                </p>
                            </div>
                            <h3 class="heading"><a href="#"><?php echo $sirketyorumcek['sirketyorum_sirketad'] ?></a></h3>
                            <p><?php echo substr($sirketyorumcek['sirketyorum_detay'], 0, 160) ?></p>
                            <p><a href="yorum-detay.php?yorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>" class="btn btn-secondary py-2 px-3">Devamını oku</a></p>
                        </div>



                    </div>
                </div>
            <?php } ?>




        </div>
    </div>
    </div>
</section>

<?php require_once 'footer.php' ?>