 <!-- Page Banner -->
 <section class="header" id="banner">
    <div class="overlay">
        <h6 class="subtitle">
            <?php echo isset($bannerSubtitle) ? $bannerSubtitle : 'Lập trình Web2'  ?>
        </h6>
        <h1 class="title">
            <?php echo isset($bannerTitle) ? $bannerTitle : 'Bài tập 4'  ?>
        </h1>
        <?php
            $isHideBannerBtn = isset($isHideBannerBtn) ? $isHideBannerBtn : false;
            if (!$isHideBannerBtn) {
        ?>
            <div class="buttons text-center">
                <a href="#about" class="btn btn-primary rounded w-lg btn-lg my-1 banner-btn">About me</a>
                <a href="#ds-sinh-vien" class="btn btn-outline-light rounded w-lg btn-lg my-1 banner-btn">Danh sách sinh viên</a>
            </div>
        <?php
            }
        ?> 
    </div>      
</section>
