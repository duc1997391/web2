<!DOCTYPE html>
<html lang="en">
<?php
include_once('./shared/header.php');
?>


<div class="tm-sidebar sticky">
    <?php
    include_once('./shared/banner.php');
    $activeMenu = 'submit';
    include_once('./shared/menu.php');
    ?>
</div>
<?php
function display ($key) {
    if (isset($_POST[$key])) echo $_POST[$key];
    else echo '';
}
?>
<div class="tm-main-content">
    <div class="row mb-5">
        <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
            <div class="tm-media-img-container">
                <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-pink"><?php display('date');?></div>
                <img class="d-flex img-fluid" src="<?php display('avatar');?>" alt="Generic placeholder image">
            </div>

            <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                <div class="p-5">
                    <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title"><?php display('id');?> - <?php display('name');?></h2>
                    <p class="mb-4">
                        <?php display('about');?>
                    </p>

                    <a href="#" class="btn btn-primary tm-button-rounded tm-button-pink tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- tm-main-content -->

<?php
include_once('./shared/footer.php');
?>

</html>