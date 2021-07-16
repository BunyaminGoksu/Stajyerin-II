<?php require_once 'header.php';
$yorumsor = $db->prepare("SELECT * FROM yorumlar ORDER BY yorum_onay ASC ");
$yorumsor->execute();

?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">




        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Yorum Listeleme</h2>

                        <div class="clearfix"></div>
                        
                    </div>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Kullanıcı Ad Soyad</th>
                                    <th>Yorum Detay</th>
                                    <th>Şirket Yorum ID</th>
                                    <th>Yorum Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

 
                            <tbody>

                            <?php
                            $say=0;
                            while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)){ $say++;  ?>
                                <tr>
                                    <td><?php echo $say ?></td>
                                    <td><?php echo $yorumcek['kullanici_adsoyad'] ?></td>
                                    <td><?php echo substr($yorumcek['yorum_detay'],0,120) ?></td>
                                    <td><?php echo $yorumcek['sirketyorum_id'] ?></td>
                                    <td>
                                        <center><?php

                                                if ($yorumcek['yorum_onay'] == 1) { ?>
                                                <button class="btn btn-success btn-xs">Aktif</button>
                                            <?php } else { ?>
                                                <button class="btn btn-danger btn-xs">Pasif</button>

                                            <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center><a href="yorum-duzenle.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center>
                                    </td>
                                    <td>
                                        <center><a href="../netting/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bitiyor -->







        </div>
    </div>
</div>
<!-- /page content -->

<?php require_once 'footer.php' ?>