 <!-- Page Banner -->
 <section class="header" id="banner">
    <div class="overlay">
        <h6 class="subtitle">
            <?php echo isset($bannerSubtitle) ? $bannerSubtitle : 'Lập trình Web2'  ?>
        </h6>
        <h1 class="title">
            <?php echo isset($bannerTitle) ? $bannerTitle : 'Bài tập 3'  ?>
        </h1>
        <?php
            $isHideBannerBtn = isset($isHideBannerBtn) ? $isHideBannerBtn : false;
            if (!$isHideBannerBtn) {
        ?>
            <div class="buttons text-center">
                <a href="#about" class="btn btn-primary rounded w-lg btn-lg my-1 banner-btn">About me</a>
                <a href="#contact" class="btn btn-outline-light rounded w-lg btn-lg my-1 banner-btn">Contact me</a>
            </div>
        <?php
            }
        ?> 
    </div>      
</section>
<!-- End Of Page Banner -->
<?php
    $isHideBannerBox = isset($isHideBannerBox) ? $isHideBannerBox : false;
    if (!$isHideBannerBox) {
?>
    <!-- Box -->
    <div class="box text-center">
        <div class="box-item">
            <i class="ti-vector"></i>
            <h6 class="box-title">UX/UI Design</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi, repellat esse laborum explicabo quia.</p>
        </div>
        <div class="box-item">
            <i class="ti-filter"></i>
            <h6 class="box-title">Web Development</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi, repellat esse laborum explicabo quia.</p>
        </div>
        <div class="box-item">
            <i class="ti-mobile"></i>
            <h6 class="box-title">App Design</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis excepturi, repellat esse laborum explicabo quia.</p>
        </div>
    </div>
    <!-- End of Box -->
<?php
    }
?>
