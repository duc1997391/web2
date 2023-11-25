<!DOCTYPE html>
<html lang="en">
<?php
include_once('./shared/header.php');
?>


<div class="tm-sidebar sticky">
    <?php
    include_once('./shared/banner.php');
    include_once('./shared/menu.php');
    ?>
</div>

<div class="tm-main-content tm-gallery-container">
    <?php
    include('./shared/gallery.php')
    ?>
</div> <!-- tm-main-content -->

<?php
include_once('./shared/footer.php');
?>

</html>