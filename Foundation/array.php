<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array<h1>
    <?php
    // array 
    // 맵으로 이루어진 순서가 있는 집합
    // 맵은 한쌍의 키와 값으로 이루어짐 
    // index번호로 키에 연결된 값을 다룸 

    // $ 배열이름 = array();
    // 빈 배열 만들고 값을 초기화 
    $fruits = array();
    $fruits[0] = "apple";
    $fruits[1] = "banana";
    $fruits[2] = "orange";

    echo $fruits,"<br>";
    echo $fruits[0],"<br>";

    
    // isset() 해당 변수가 세팅이 되어 있는지 아닌지 확인 
    // isset(변수명1,변수명2)  모두 참이면 true 하나라도 안 되면 false 
    if(isset($fruits[1],$fruits[3])){
        echo $fruits[1];
    }
    else{
        echo "과일 배열에는 3번째 값이 없다.";
    }
    echo "<hr>";
    
    
    // 배열 선언과 동시에 초기화 
    $fruits2=array('apple','banana','orange');

    // count() -> 배열의 원소 갯수 반환 
    // 다음 줄 넘길 때 . 으로 연결해도 됨 
 
    for($i=0 ; $i< count($fruits2); $i++){
        echo $fruits2[$i]."<br/>";
        }
 

   
    echo "<hr>";
    
    // foreach 로 배열 나타내기 
    // 배열의 원소 갯수를 몰라도 가능 
    foreach($fruits2 as $item){
        echo $item,"<br>";
    }
    
    echo "<hr>";
    
    //associative array 연관 배열 
    // 숫자가 아니라 문자로 배열 참조
    
    // $prices = array();
    // $prices['apple']=1000;
    // $prices['banana']=2000;
    // $prices['orange']=1500;
    
    // 한번에 초기화 하기
    // 문자를 키값 ! 숫자가 아니라 
    $prices = array('apple'=>1000, 'banana'=>2000, 'orange'=>1500);



    //key 이름에 대한것  $key가 인덱스 대신 들어간 문자 
    //key = apple / banana / orange 
    //해당 인덱스의 값을 price로 찍어줌 1000, 2000,1500
    foreach($prices as $key=>$price){
        echo $key.":".$price."<br>";
    }

    ?>

</body>
</html>
