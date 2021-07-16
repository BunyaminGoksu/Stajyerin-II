<?php include 'header.php';
error_reporting(E_ALL & ~E_NOTICE);

$yorumsor = $db->prepare("SELECT * FROM yorumlar where yorum_id=:yorum_id ");
$yorumsor->execute(array(
    'yorum_id' => $_GET['yorum_id']
));

$yorumcek = $yorumsor->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Menü Düzenle <small>

                                <?php

                                if ($_GET['durum'] == "ok") { ?>

                                    <b style="color:green;">İşlem Başarılı...</b>


                                <?php }
                                if ($_GET['durum'] == "no") { ?>

                                    <b style="color:red;">İşlem Başarısız...</b>


                                <?php } ?>








                            </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-yorum" role="yorum">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />


                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Ad Soyad<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" disabled name="yorum_ad" value="<?php echo $yorumcek['kullanici_adsoyad'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <!-- Ck Editör Başlangıç -->

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yorum Detay <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <textarea class="ckeditor" id="editor1"  disabled name="yorum_detay"><?php echo $yorumcek['yorum_detay']; ?></textarea>
                                </div>
                            </div>

                            <script type="text/javascript">
                                CKEDITOR.replace('editor1',

                                    {

                                        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',

                                        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',

                                        filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',

                                        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                                        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                                        filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                                        forcePasteAsPlainText: true

                                    }

                                );
                            </script>

                            <!-- Ck Editör Bitiş -->

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şirket Yorum ID <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" disabled name="sirketyorum_id" value="<?php echo $yorumcek['sirketyorum_id'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                           


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yorum Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="yorum_onay" required>

                                        <?php
                                        if ($yorumcek['yorum_onay'] == 0) { ?>

                                            <option value="0">Pasif</option>
                                            <option value="1">Aktif</option>

                                        <?php  } else { ?>

                                            <option value="1">Aktif</option>
                                            <option value="0">Pasif</option>

                                        <?php }
                                        ?>

                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="yorum_id" value="<?php echo $yorumcek['yorum_id'] ?>">


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="yorumduzenle" class="btn btn-success">Güncelle</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>








    </div>
</div>
<!-- /page content -->

<?php include 'footer.php' ?>