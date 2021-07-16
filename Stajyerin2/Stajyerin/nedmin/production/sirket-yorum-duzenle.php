<?php include 'header.php';
error_reporting(E_ALL & ~E_NOTICE);

$sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum where sirketyorum_id=:sirketyorum_id ");
$sirketyorumsor->execute(array(
    'sirketyorum_id' => $_GET['sirketyorum_id']
));

$sirketyorumcek = $sirketyorumsor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Yorum Düzenle <small>

                                <?php

                                if ($_GET['durum'] == "ok") { ?>

                                    <b style="color:green;">İşlem Başarılı...</b>


                                <?php }
                                if ($_GET['durum'] == "no") { ?>

                                    <b style="color:red;">İşlem Başarısız...</b>


                                <?php } ?>








                            </small></h2>
                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />


                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şirket Ad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" disabled name="sirketyorum_sirketad" value="<?php echo $sirketyorumcek['sirketyorum_sirketad'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <!-- Ck Editör Başlangıç -->

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yorum Detay <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <textarea class="ckeditor" disabled id="editor1" name="sirketyorum_detay"><?php echo $sirketyorumcek['sirketyorum_detay']; ?></textarea>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Departman <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" disabled required="required" name="sirketyorum_departman" value="<?php echo $sirketyorumcek['sirketyorum_departman'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalıştığı Süre <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" disabled required="required" name="sirketyorum_sira" value="<?php echo $sirketyorumcek['sirketyorum_sure'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalıştığı İl <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" disabled required="required" name="sirketyorum_il" value="<?php echo $sirketyorumcek['sirketyorum_il'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Çalıştığı İlçe <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" disabled required="required" name="sirketyorum_ilce" value="<?php echo $sirketyorumcek['sirketyorum_ilce'] ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Durum<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="heard" class="form-control" name="sirketyorum_durum" required>

                                        <?php
                                        if ($sirketyorumcek['sirketyorum_durum'] == 0) { ?>

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

                            <input type="hidden" name="sirketyorum_id" value="<?php echo $sirketyorumcek['sirketyorum_id'] ?>">


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="sirketyorumduzenle" class="btn btn-success">Güncelle</button>
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