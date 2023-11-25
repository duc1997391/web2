<!DOCTYPE html>
<html lang="en">
    <?php
    include_once('./data_20810206.php');
    include_once('./CSinhVien_20810206.php');
    include_once('./Lib_20810206.php');
    $arSinhvien_20810206 = array();
    foreach ($data_20810206 as $key => $value) {
        $newSv = new CSinhVien_20810206($value['MSSV'], $value['Ten'], $value['DTB']);
        array_push($arSinhvien_20810206, $newSv);
    }
    // print_r($arSinhvien_20810206);
    // echo '------------------';
    // print_r(filter_sv($arSinhvien_20810206));
    // echo '------------------';
    // print_r(filter_sv($arSinhvien_20810206, false));

    // header
    include_once('./20810206-SharedParts/header-20810206.php');
    // banner
    include_once('./20810206-SharedParts/banner-20810206.php');
    // // about
    include_once('./20810206-SharedParts/about-20810206.php');
?>

 <section id="ds-sinh-vien">
    <div class="container">
        <h6 class="section-title mb-5 text-center">Danh sách sinh viên</h6>
        <div class="row">
            <div class="col-md-6 col-12 mb-5" style="background-color: #f3fff3;">
                <h6 class="section-subtitle text-center mb-5 mt-2">Sinh viên đậu</h6>
                <div class="row">
                    <?php
                        $arrPassSv = filter_sv($arSinhvien_20810206);
                        foreach ($arrPassSv as $key => $value) {
                            $sv = $value
                        ?>
                        <div class="col-12 col-lg-6">
                            <?php include('./20810206-SharedParts/sv-card-20810206.php') ?>
                        </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-5" style="background-color: #fff9f9;">
                <h6 class="section-subtitle text-center mb-5 mt-2">Sinh viên rớt</h6>
                <div class="row">
                    <?php
                        $arrFailSv = filter_sv($arSinhvien_20810206, false);
                        foreach ($arrFailSv as $key => $value) {
                            $sv = $value
                        ?>
                        <div class="col-12 col-lg-6">
                            <?php include('./20810206-SharedParts/sv-card-20810206.php') ?>
                        </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    //footer
    include_once('./20810206-SharedParts/footer-20810206.php');
    ?>
</html>