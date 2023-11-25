<!DOCTYPE html>
<html lang="en">
<?php
include_once('./shared/header.php');
?>


<div class="tm-sidebar sticky">
    <?php
    include_once('./shared/banner.php');
    $activeMenu = 'add';
    include_once('./shared/menu.php');
    ?>
</div>

<div class="tm-main-content tm-gallery-container">
    <h1>Thêm 20810206</h1>
    <form action="./submit.php" method="post">
        <ul>
            <li>
                <input type="text" name="id" placeholder="ID" required>
            </li>
            <li>
                <input type="text" name="name" placeholder="Full name" required>
            </li>
            <li>
                <input type="date" name="date" placeholder="Date Of Birth" required>
            </li>
            <li>
                <input type="text" name="avatar" placeholder="Avatar Url" required>
            </li>
            <li>
                <textarea name="about" id="" cols="30" rows="10" placeholder="About me"></textarea>
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </form>
    <style>
        li {
            margin-bottom: 2rem;
        }
    </style>
</div> <!-- tm-main-content -->

<?php
include_once('./shared/footer.php');
?>

</html>