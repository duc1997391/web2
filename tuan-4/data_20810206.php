<?php
function getName() {
    $ho = array('Nguyễn', 'Trần', 'Lê', 'Phạm', 'Hoàng', 'Huỳnh', 'Võ', 'Phan', 'Trương', 'Ngô');
    $dem = array('Quốc', 'Văn', 'Thị', 'Ngọc', 'Hữu', 'Minh', 'Xuân', 'Thu', 'Cẩm', 'Hồng');
    $ten = array('Đức', 'Bình', 'Mai', 'Dũng', 'Long', 'Phát', 'Nhật', 'Tuấn', 'Vinh', 'Tùng');
    return $ho[rand(0, 9)] . ' ' . $dem[rand(0, 9)] . ' ' . $ten[rand(0, 9)];
}

$data_20810206 = [];
for ($i=0; $i < 30; $i++) { 
    array_push($data_20810206, array(
        "MSSV" => rand(1000000, 9999999),
        "Ten" => getName(),
        "DTB" => rand(10, 100) / 10
    ));
}
?> 
    