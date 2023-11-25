<?php
function includeToVar($file){
    ob_start();
    include($file);
    return ob_get_clean();
}
$publicHeader = includeToVar('./public/public_header.php');
$publicFooter = includeToVar('./public/public_footer.php');

$privateBanner = '';
$privatePageContent = '';
$privatePageTitle = '';
$privatePageClass = '';

$page = 'home';
if (isset($_GET['page'])) $page = $_GET['page'];
switch ($page) {
    case 'about':
        $privateBanner = includeToVar('./private/about_banner.php');
        $privatePageContent = includeToVar('./private/about_content.php');;
        $privatePageTitle = 'About';
        break;
    case 'contact':
        $privateBanner = includeToVar('./private/contact_banner.php');
        $privatePageContent = includeToVar('./private/contact_content.php');;
        $privatePageTitle = 'Contact';
        break;
    case 'single':
        $privateBanner = includeToVar('./private/single_banner.php');
        $privatePageContent = includeToVar('./private/single_content.php');;
        $privatePageTitle = 'Single';
        $privatePageClass = 'single-post single';
        break;
    case 'submit':
        $privateBanner = includeToVar('./private/single_banner.php');
        $privatePageContent = includeToVar('./private/submit_content.php');;
        $privatePageTitle = 'Submit';
        $privatePageClass = 'single-post single';
        break;
    case 'home':
    default:
        $privateBanner = includeToVar('./private/home_banner.php');
        $privatePageContent = includeToVar('./private/home_content.php');;
        $privatePageTitle = 'Home';
        break;
}

include_once('./templates/katt-master.php')
?>
