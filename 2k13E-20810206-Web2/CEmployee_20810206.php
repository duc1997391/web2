<?php
class CEmployee_20810206 {
    var $ID;
    var $FullName;
    var $DateOfBirth;
    var $AvatarUrl;
    var $AboutMe;

    function __construct($ID, $FullName, $DateOfBirth, $AvatarUrl, $AboutMe ) {
        $this->ID = $ID;
        $this->FullName = $FullName;
        $this->DateOfBirth = $DateOfBirth;
        $this->AvatarUrl = $AvatarUrl;
        $this->AboutMe = $AboutMe;
    }

   public function ShowHtml_20810206 () {
    echo '
    <div class="row mb-5">
        <div class="media tm-flexbox-ie-fix tm-width-ie-fix">
            <div class="tm-media-img-container">
                <div class="text-center pt-31 pb-31 tm-timeline-date tm-bg-pink">'.$this->DateOfBirth.'</div>
                <img class="d-flex img-fluid" src="'.$this->AvatarUrl.'" alt="Generic placeholder image">
            </div>
    
            <div class="media-body tm-flexbox-ie-fix tm-width-ie-fix tm-bg-light-gray">
                <div class="p-5">
                    <h2 class="mb-4 mt-0 tm-blue-text tm-timeline-item-title">'.$this->ID.' - '.$this->FullName.'</h2>
                    <p class="mb-4">
                        '.$this->AboutMe.'
                    </p>
    
                    <a href="#" class="btn btn-primary tm-button-rounded tm-button-pink tm-button-no-border tm-button-normal tm-button-timeline">Read More</a>
                </div>
            </div>
        </div>
    </div>';
   }
}
?>