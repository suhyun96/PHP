<?php

// 주소표시줄에 get 방식으로 넘어오는 값중에 productid라는 값 
//ex productid=10 중 10을 product_id에 저장
$product_id=$_GET['productid'];
$limit = $_GET['limit'];

//변수에 넣을 때 값을 필터시켜줌 
//INPUT_GET : GET 방식으로 넘어옴 :타입
//필터링 처리할 변수명 
//유효성 검사:FILTER_VALIDATE_INT 정수인지 구분  : true랑 false를 알려줌 
$product_id=filter_input(INPUT_GET,'productid',FILTER_VALIDATE_INT);
$limit=filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

// 변수가 숫자가 아닌 게 넘어오면 밑에코드 실행 x 
// if($product_id==false || $limit==false){
//    die(); // 숫자가 아닌 값이 넘어왔으면 아무것도 하지마라 
// }

//사용자가 숫자가 아닌 값 넣었을 때 기본값 출력 되도록 
if($product_id==false){
    $product_id=10;
}
if($limit==false){
    $limit=10;
}


?>

<h1>get input</h1>

<p>
    Showing category: <?= $product_id;?>. - Limit <?= $limit ?>

</p>