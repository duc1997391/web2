<?php
    $num = isset($num) ? $num : 1
?>
<div class="card mb-4">
    <div class="card-body">
        <h2 class="mb-4 text-primary">
            <?php echo $num;?>
        </h2>
        <div>
            <?php
                for ($k=1; $k <= 10; $k++) { 
                    $rs = $num * $k;
            ?>
                <div class="d-item">
                    <span class="num"><?php echo $num;?></span>
                    <span class="px-2">x</span>
                    <span class="num"><?php echo $k;?></span>
                    <span class="px-2"> = </span>
                    <span class="font-weight-bold num"><?php echo $rs;?></span>
                </div>
            <?php 
                }
            ?>
        </div>
    </div>
</div>