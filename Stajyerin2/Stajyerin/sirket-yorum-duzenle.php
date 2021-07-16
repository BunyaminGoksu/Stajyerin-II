<?php require_once 'header.php';
error_reporting(E_ALL & ~E_NOTICE);

$sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_id=:sirketyorum_id");
$sirketyorumsor->execute(array(
    'sirketyorum_id' => $_GET['yorum_id']
));

$sirketyorumcek=$sirketyorumsor->fetch(PDO::FETCH_ASSOC);
?>



<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Anasayfa <i class="fa fa-chevron-right"></i></a></span>  <span>Yorum Yap <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Yorum Yap</h1>
            </div>
        </div>
    </div>
</section>
<?php

if(!isset($_SESSION['userkullanici_mail'])){?>
    <h3 class="mb-5" style="font-size: 20px; font-weight: bold; margin-left:500px; padding-bottom:200px; margin-top:200px;">Yorum yapabilmek için üye olmanız gerekli.Üye olmak için <a href="index.php">tıklayınız</a> </h3>
<?php } else{?>
    <section style="margin-left: 210px ;" class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">

                <div class="comment-form-wrap pt-5">

                    <form action="nedmin/netting/islem.php" method="POST" class="p-5 bg-light">
                        <h3 class="mb-5" style="font-size: 20px; font-weight: bold;">Sayın <?php echo $kullanicicek['kullanici_adsoyad'] ?> sizlerin yorumları hem bizim hem diğer stajyerler için oldukça önemli..</h3>
                        <div class="form-group">
                            <label for="name">Şirket Adı *</label>
                            <input type="text" class="form-control" required name="sirketyorum_sirketad" value="<?php echo $sirketyorumcek['sirketyorum_sirketad'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Staj Yaptığınız Departman *</label>
                            <input type="text" class="form-control" required name="sirketyorum_departman"value="<?php echo $sirketyorumcek['sirketyorum_departman'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Staj Yaptığınız Süre</label>
                            <input type="text" class="form-control" required name="sirketyorum_sure" value="<?php echo $sirketyorumcek['sirketyorum_sure'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Staj Yaptığınız İl</label>
                            <input type="text" class="form-control" required name="sirketyorum_il" value="<?php echo $sirketyorumcek['sirketyorum_il'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Staj Yaptığınız İlçe</label>
                            <input type="text" class="form-control" required name="sirketyorum_ilce" value="<?php echo $sirketyorumcek['sirketyorum_ilce'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Şirket Hakkında Yorumunuz</label>
                            <textarea  cols="30" rows="10" class="form-control" required name="sirketyorum_detay"><?php echo $sirketyorumcek['sirketyorum_detay'] ?></textarea>
                        </div>

                        <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
                        <input type="hidden" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>">
                        <input type="hidden" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
                        <input type="hidden" name="sirketyorum_id" value="<?php echo $sirketyorumcek['sirketyorum_id'] ?>">
                        
                        <div align="right" class="form-group">
                            <button type="submit" name="sirketyorumguncelle" class="btn btn-primary">Güncelle</button>
                            <button type="submit" name="sirketyorumsill" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz ?')">Sil</button>

                        </div>

                    </form>
                </div>
            </div>

        </div> <!-- .col-md-8 -->

    </div>
</section> <!-- .section -->
<?php }

?>



<?php require_once 'footer.php' ?>