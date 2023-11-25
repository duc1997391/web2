<?php
$data = [];

$value = '';
if (isset($_POST['name'])) $value = $_POST['name'];
array_push($data, ['Name', $value]);

$value = '';
if (isset($_POST['email'])) $value = $_POST['email'];
array_push($data, ['Email', $value]);

$value = '';
if (isset($_POST['password'])) $value = $_POST['password'];
array_push($data, ['Password', $value]);

$value = '';
if (isset($_POST['phone'])) $value = $_POST['phone'];
array_push($data, ['Phone Number', $value]);

$value = '';
if (isset($_POST['gender'])) $value = $_POST['gender'];
array_push($data, ['Gender', $value]);

$value = '';
if (isset($_POST['language'])) $value = $_POST['language'];
array_push($data, ['Language', $value]);

$value = '';
if (isset($_POST['zipcode'])) $value = $_POST['zipcode'];
array_push($data, ['Zip Code', $value]);

$value = '';
if (isset($_POST['about'])) $value = $_POST['about'];
array_push($data, ['About', $value]);
?>


<article class="content-1170 center-relative">
    <div class="content-wrapper">
        <h1 class="entry-title">
            Register information
        </h1>
        <div class="entry-content">
            <?php
                foreach ($data as $key => $value) {
                ?>
                <div style="display: flex; gap: 15px; padding: 10px 0;">
                    <h6 style="padding: 0;"><?php echo $value[0] ?>: </h6>
                    <span><?php echo $value[1] ?></span>
                </div>
                <?php
                }
            ?>
        </div>
        <div class="clear"></div>
        <div class="full-width-content">
            <div class="wp-caption">
                <img src="demo-images/katt_home_image01_slider03.jpg" alt="">
                <p class="wp-caption-text">Creative community <span class="image-caption-text">DTTSP</span></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="resume-entry-content">
            <br>
            <p>I still keep in mind a certain wonderful sunset which I witnessed when and steamboating was new to me. A broad expanse of the river was turned too blood in the middle distance the red hue brightened into gold, through which a solitary log came floating, black and conspicuous in one place a long calm slanting mark lay sparkling upon the water in another the surface was broken by boiling, tumbling rings, that were as many-tinted as an opal where the ruddy flush was faintest, was a smooth spot that was covered with graceful circles and radiating lines.</p>
            <br>
            <p>Ever so delicately traced the shore on our left was densely wooded, and the som ber shadow that fell from this forest was broken in one place by a long, ruffled trail that shone like silver and high above the forest wall.</p>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="zigzag absolute zigzag1" style="left:-9%; top:8%">
        <img src="images/zigzag.png" alt="">
    </div>
    <div class="zigzag absolute zigzag2" style="right:-7%; top:20%">
        <img src="images/zigzag.png" alt="">
    </div>
    <div class="zigzag absolute zigzag3" style="right:20%; top:40%">
        <img src="images/zigzag.png" alt="">
    </div>
    <div class="zigzag absolute zigzag4" style="left:50%; top:70%">
        <img src="images/zigzag.png" alt="">
    </div>
</article>