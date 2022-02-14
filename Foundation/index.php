<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    <h1>문서의 제목 </h1>

    <?php 
    
    // echo는 문자열을 출력해주는 함수 
    echo "hello world" ;
    echo "</br>";
    /*
    여러 문장 
    주석 처리 
     */

    # 한줄 주석

    $name="suhuyn";
    echo $name;
    echo "<br>";
    echo "안녕하세요 ";
    // php에서는 문자열 연결을 점으로 함 
    echo "반갑습니다 ".$name,"<br>";
    
    // 큰따옴표 안에서 변수 사용 가능 
    echo "큰 따옴표 안에 변수 $name","<br>";
    // 작은 따옴표는 변수 사용 불가 글자로 인식 
    echo '작은 따옴표 안에 변수 $name',"<br>";


    ?>

</body>
</html>