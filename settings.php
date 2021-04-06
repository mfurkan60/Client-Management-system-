<?php require("include/header.php") ?>
<div class="content-wrapper">

    <?php $settings = $db->prepare("SELECT * FROM ayarlar ");
    $settings->execute();
    $settings_row = $settings->fetch(PDO::FETCH_ASSOC);


    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Settings File </strong> If you are not authorized, you cannot leave this page.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">



                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Site Name</label>
                            <input type="text" name="site_baslik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $settings_row['site_baslik'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Site Menanger</label>
                            <input type="text" name="site_yonetici" class="form-control" id="exampleInputPassword1" value="<?php echo $settings_row['site_yonetici'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Site Description</label>
                            <input type="text" name="site_aciklama" class="form-control" id="exampleInputPassword2" value="<?php echo $settings_row['site_aciklama'] ?>">
                        </div>

                        <button type="submit" name="settings" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <?php

                if (isset($_POST['settings'])) { ?>
                    
                <?php
                    $save_settings = $db->prepare("UPDATE ayarlar SET 
                        site_baslik=:site_baslik,
                         site_yonetici=:site_yonetici,
                          site_aciklama=:site_aciklama");
                    $save_settings->execute(array(
                        'site_baslik' => $_POST['site_baslik'],
                        'site_yonetici' => $_POST['site_yonetici'],
                        'site_aciklama' => $_POST['site_aciklama']

                    ));
                } else { ?>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                <?php }

                ?>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




<?php require("include/footer.php") ?>