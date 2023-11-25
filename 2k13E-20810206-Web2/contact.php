<!DOCTYPE html>
<html lang="en">
<?php
include_once('./shared/header.php');
?>


<div class="tm-sidebar sticky">
    <?php
    include_once('./shared/banner.php');
    $activeMenu = 'contact';
    include_once('./shared/menu.php');
    ?>
</div>

<div class="tm-main-content">
    <?php
    include('./shared/contact_content.php')
    ?>
</div> <!-- tm-main-content -->

<?php
include_once('./shared/footer.php');
?>
<script>  

/* Google map
------------------------------------------------*/
var map = '';
var center;

function initialize() {
    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(37.769725, -122.462154),
        scrollwheel: false
    };

    map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

    google.maps.event.addDomListener(map, 'idle', function() {
      calculateCenter();
  });

    google.maps.event.addDomListener(window, 'resize', function() {
      map.setCenter(center);
  });
}

function calculateCenter() {
    center = map.getCenter();
}

function loadGoogleMap(){
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
    document.body.appendChild(script);
} 

$(document).ready(function(){           

    // Google Map
    loadGoogleMap();    

    // Update the current year in copyright
    $('.tm-current-year').text(new Date().getFullYear());        
});
</script>

</html>