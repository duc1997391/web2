<!DOCTYPE html>
<html lang="en">
<?php
include_once('./shared/header.php');
?>


<div class="tm-sidebar sticky">
    <?php
    include_once('./shared/banner.php');
    $activeMenu = 'timeline';
    include_once('./shared/menu.php');
    ?>
</div>

<div class="tm-main-content">
    <?php
    include('./shared/timeline_content.php')
    ?>
</div> <!-- tm-main-content -->

<?php
include_once('./shared/footer.php');
?>

</html>