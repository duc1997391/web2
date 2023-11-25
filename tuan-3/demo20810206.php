<!DOCTYPE html>
<html lang="en">
<?php
    // header
    require_once('./20810206-SharedParts/header-20810206.php');
    
    $bannerTitle = "Demo php cơ bản";
    $bannerSubtitle = "20810206";
    $isHideBannerBtn = true;
    $isHideBannerBox = true;

    require_once('./20810206-SharedParts/banner-20810206.php')
?>
    <style>
        .d-item .num {
            display: inline-block;
            min-width: 26px;
        }
    </style>
    <section class="py-md">
        <div class="container text-center">
            <?php
                $mssv = '20810206';
                $x = substr($mssv, -1) * 1;
                $randNum = rand(2, 5)
            ?>
            <h6 class="section-title mb-3">Bảng cửu chương của 20810206</h6>
            <h6 class="section-subtitle mb-6">
                Số cuối = 
                <?php echo $x;?>
                <br>
                Số random = 
                <?php echo $randNum;?>
            </h6>
            <div class="row">
                <?php
                    for ($i=0; $i <= $randNum; $i++) { 
                        $num = $x + $i;
                ?>
                    <div class="col-sm-4">
                        <?php require('./20810206-SharedParts/card-20810206.php') ?>
                    </div>
                <?php
                    }
                ?>
            </div>  
        </div>
    </section>
<?php
    // footer
    require_once('./20810206-SharedParts/footer-20810206.php');
?>
</html>