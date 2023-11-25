<!-- Services -->
<section class="services">
    <div class="container-fluid">
        <div class="heading mb-5 text-center">
            <h2>Danh sách bài đã nộp</h2>
        </div>

        <div class="row" style="gap: 10px 0;">
            <?php
            function getIcon($t)
            {
                include('./allowed_file_type.php');
                if (in_array($t, $allowedImages)) return "bi-file-image";
                if (in_array($t, $allowedTexts)) return "bi-file-text";
                if (in_array($t, $allowedDocs)) return "bi-filetype-doc";
                if (in_array($t, $allowedZips)) return "bi-file-earmark-zip";
                return "";
            }
            $db = file("lophoc.data");
            $len = count($db);

            for ($i = $len - 1; $i >= 0; $i--) {
                $mssv;
                $name;
                $time;
                $fileName;
                $fileType;
                $newLocation;
                list($mssv, $name, $time, $fileName, $fileType, $newLocation) = explode(";", $db[$i]);
            ?>
                <div class="col-md-4 text-left" style="padding: 0 5px">
                    <div class="service-item text-left" style="height: 100%;">
                        <a href="<?php echo $newLocation; ?>" download target="_blank">
                            <div class="icon">
                                <div>
                                    <i class="bi <?php echo getIcon($fileType); ?>"></i>
                                </div>
                                <h6 class="h6" style="text-decoration: underline;text-overflow: ellipsis;overflow: hidden;">
                                    <?php echo $fileName; ?>
                                </h6>
                            </div>
                        </a>
                        <div class="text-left">
                            <h4 class="text-left">
                                <?php echo $name; ?>
                                <br>
                                <span style="color: #535ba0;"> <?php echo $mssv; ?></span>
                            </h4>
                        </div>
                        <h6 class="color-gray">
                            <em> <?php echo $time; ?></em>
                        </h6>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>