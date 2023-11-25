<!DOCTYPE html>
<html lang="en">
<?php
include_once('./shared/header.php');
?>


<div class="tm-sidebar sticky">
    <?php
    include_once('./shared/banner.php');
    $activeMenu = 'show';
    include_once('./shared/menu.php');
    ?>
</div>

<div class="tm-main-content">
    <?php
    include_once('./Data_20810206_Employee.php');
    foreach ($data_20810206 as $key => $value) {
        $value->ShowHtml_20810206();
    }

    ?>
</div> <!-- tm-main-content -->

<?php
include_once('./shared/footer.php');
?>

</html>