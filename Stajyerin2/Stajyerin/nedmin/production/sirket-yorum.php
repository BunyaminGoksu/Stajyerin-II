<?php require_once 'header.php';
$sirketyorumsor = $db->prepare("SELECT * FROM sirketyorum ORDER BY sirketyorum_zaman ASC ");
$sirketyorumsor->execute();

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
                                    <th>Şirket Ad</th>
                                    <th>Yorum Yapan</th>
                                    <th>Şirket Departman</th>
                                    <th>Şirket Detay</th>
                                    <th>Şirket Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

 
                            <tbody>

                            <?php
                            $say=0;
                            while($sirketyorumcek=$sirketyorumsor->fetch(PDO::FETCH_ASSOC)){ $say++;  ?>
                                <tr>
                                    <td><?php echo $say ?></td>
                                    <td><?php echo $sirketyorumcek['sirketyorum_sirketad'] ?></td>
                                    <td><?php echo $sirketyorumcek['kullanici_mail'] ?></td>
                                    <td><?php echo $sirketyorumcek['sirketyorum_departman'] ?></td>
                                    <td><?php echo substr($sirketyorumcek['sirketyorum_detay'],0,380) ?></td>

                                    <td>
                                        <center><?php

                                                if ($sirketyorumcek['sirketyorum_durum'] == 1) { ?>
                                                <button class="btn btn-success btn-xs">Aktif</button>
                                            <?php } else { ?>
                                                <button class="btn btn-danger btn-xs">Pasif</button>

                                            <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <center><a href="sirket-yorum-duzenle.php?sirketyorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center>
                                    </td>
                                    <td>
                                        <center><a href="../netting/islem.php?sirketyorum_id=<?php echo $sirketyorumcek['sirketyorum_id'] ?>&sirketyorumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
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