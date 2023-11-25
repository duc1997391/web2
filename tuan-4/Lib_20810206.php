<?php
function filter_sv($arrSv, $isPass = true){
    if ($isPass) return array_filter($arrSv, function($value) {
            return $value->isPass();
        });
    else return array_filter($arrSv, function($value) {
            return $value->isFail();
        });
}
?>