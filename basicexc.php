<?php

/* In số từ 1 đến 100 theo thứ tự tăng dần

    for($i = 0; $i <=100; $i++){
    echo $i . "<Br>";
}
 */

/* In số từ 1 đến 100 theo thứ tự giảm dần
    c1:
    for($i = 100; $i >= 0; $i--){
    echo $i . "<br>";
}

*/

/*Bài tập C: in bảng số từ 1 đến 100
In một bảng số thỏa mãn điều kiện:

Bảng số gồm 10 hàng và 10 cột
Các giá trị trong cột là liên tiếp nhau
Các giá trị trong hàng hơn kém nhau 10
*/
$flag = false;
for($i = 1; $i <= 100; $i++){
    if($i%10==1){
        echo "<br>";
    }
    echo $i;
}