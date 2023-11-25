<?php
include_once('./CEmployee_20810206.php');

$images = [
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSI_75r6_muaRy2NP06PHHyD9ytNPGxxzLCBQ&usqp=CAU',
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYtlodiBA2Bt8bpowq_wOQUVtETpw3iVkHuVKPXXZV-eL6HPG120qjsfJvjjOt1vEHkqE&usqp=CAU',
    'https://images.livemint.com/img/2022/08/01/600x338/Cat-andriyko-podilnyk-RCfi7vgJjUY-unsplash_1659328989095_1659328998370_1659328998370.jpg',
    'https://cdn.theatlantic.com/thumbor/B7U27JF25tScMZkCe5Pl9EqXjao=/0x131:2555x1568/960x540/media/img/mt/2017/06/shutterstock_319985324/original.jpg',
    'https://images.unsplash.com/photo-1529778873920-4da4926a72c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y3V0ZSUyMGNhdHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80',
    'https://media.wired.co.uk/photos/60c8730fa81eb7f50b44037e/16:9/w_2560%2Cc_limit/1521-WIRED-Cat.jpeg',
    'https://t4.ftcdn.net/jpg/00/97/58/97/360_F_97589769_t45CqXyzjz0KXwoBZT9PRaWGHRk5hQqQ.jpg',
    'https://www.purina.co.uk/sites/default/files/styles/square_medium_440x440/public/2022-06/Burmese-Cat.jpg?itok=p26MJciw'
];

$about = [
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, totam?',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque maiores provident recusandae?',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus atque mollitia nesciunt quae!',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. At corporis quasi nam nesciunt quia quam incidunt?',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, totam?',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque maiores provident recusandae?',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repellendus atque mollitia nesciunt quae!',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. At corporis quasi nam nesciunt quia quam incidunt?'
];

$data_20810206 = [
    new CEmployee_20810206('001', 'Tran Minh Duc', '13/12/1997', $images[0], $about[0]),
    new CEmployee_20810206('002', 'Nguyen Van Hai', '13/11/1996', $images[1], $about[1]),
    new CEmployee_20810206('003', 'Tran Van Giau', '21/01/1997', $images[2], $about[2]),
    new CEmployee_20810206('004', 'Nguyen Tan Phat', '10/02/1997', $images[3], $about[3]),
    new CEmployee_20810206('005', 'Tran Nhat Minh', '15/10/1997', $images[4], $about[4]),
    new CEmployee_20810206('006', 'Pham Minh Nhat', '03/02/1998', $images[5], $about[5]),
    new CEmployee_20810206('007', 'Nguyen Thi Trang', '04/03/1997', $images[6], $about[6]),
    new CEmployee_20810206('007', 'Nguyen Van Troi', '25/05/2000', $images[7], $about[7])
];
?>
