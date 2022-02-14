<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>

<?php
    $title="home";
    // include 해당 경로의 파일을 불러온다
    // title 변수가 화면에 표시됨 
    //$title="home";이 밑에 있으면 include에서 title 변수를 찾을 수 없어서 에러뜸 
    //include에서 에러 떠도 밑에 코드 실행은 시켜줌 
    //단순히 반복되는 코드에서 사용 
    //에러가 있더라도 치명적이지 않을 때 사용 
    include('inc/header.php');
    include('inc/header.php');

    //include_once('inc/header.php');
    //여려번 출력이 아니라 중복되는 거 있어도 한 번만 출력
    
    //require는 fucntion.php 안에 있는 코드에서 
    //require는 에러 뜨면 밑에 코드 실행 시키지 않음 
    // 어디라도 잘못되면 치명적이니까 멈추고 싶을 때 
    // 데이터베이스 연동할 때
    require('inc/function.php')

    //require는 두번 불러올 수 없음 두 번 선언했다면서 fetal error 나옴
    //require_once로 한번만 출력하도록 지정하는 것이 바람직 
?>


<!-- 다른 php에 있는 함수를 잘 사용 중 require -->
<?php
        $fruits = [
            'apple',
            "banana",
            "mango",
            'orange'
        ];

        $result= sum(10,20);
        echo $result;

        echo output($fruits);
?>


<!--php footer 부분을 include로 불러들이기 -->
<?php 
    include('inc/footer.php');
?>
