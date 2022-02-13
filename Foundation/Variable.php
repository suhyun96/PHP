<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수에 관해서</title>
</head>
<body>
    <h2>지역 변수</h2>
    
    <?php
        function sum($x,$y){
            // 지역 변수 local variable 
            // 지역 변수는 선언된 { } 안에서만 적용 됨     
            $result = $x+$y; 
            $local = 10;
            return $result."<br>";
        }

        //global variable 전역변수 
        //어디에서든 쓸 수 있는 변수명 
        // local과 global variable 은 이름은 같아도 역할이 다르다 
        $result = sum(10,20);
        
        echo $result;
       
        // 지역 변수인 local을 불렀으니 에러 뜸 $local은 함수를 통하지 않고 직접적으로 부를 수 없다
        echo $local;


    ?>
    <hr>
    <h1>지역변수와 전역변수</h1>

    <?php
        function myfunc(){
            // 지역변수로써 함수 외부에서는 출력 불가 
            $var = 10;
            echo $var."<br>";
        }

        myfunc();
        // $var은 함수 안에서만 쓰는 지역변수니까 호출 불가 
        echo $var;


    ?>

    <hr>

    <h1>전역변수를 함수에서 사용하기 </h1>
    <?php
        $var2 = 20;

        function myfunc2(){
            // 전역 변수를 함수안에 쓴다고 해서 바로 쓸 수 있는 것은 아니다
            // 이대로면 지역 변수 var2인 줄 알아서 에러냄 초기화 안 하고 써서 그런가
            echo $var2."<br>";

            // 전역 변수라는 걸 함수문 내에서 알려줘야함 
            global $var2;
            echo $var2."<br>";
            
            //전역 변수들은 GLOBALS라는 배열에 저장이됨
            //다음과 같은 형식으로 global 변수 사용 가능 
            //변수명이 인덱스 역할 
            //문자니까 var을 따옴표로 감싼다 $쓰면 에러  
            //어떻게 보면 이것도 associative array 느낌 
            echo $GLOBALS['var2'];
        }
        myfunc2();
        

        // 초기화 안 하고 선안만 하면 에러 뜸 
        echo $local;
    ?>

    <hr>

    <h1>정적 변수</h1>
    <pre>
        function myfunc(){
            
            $var = 10;
            echo $var."<br>";
        }

        myfunc();

        로컬 변수 $var의 경우 myfunc()으로 호출되면 메모리 할당 된 후 
        함수가 끝나면 바로 메모리에서 값이 제거가 됨 
        즉 그 값을 다시 쓸 수가 없음 

        정적 변수
        - 변수가 메모리 상에 남아있어서 사용이 가능하다 
        - 정적으로 계속 메모리 상에 남아 있음
        - static $변수  

    </pre>
    

    <?php
        function increment(){
            // 정적 변수 static 
            // 함수가 종료된 후에도 값이 메모리상에 남아 있음 
            // 그냥 로컬 변수는 바로 휘발되버린다. 
            static $count = 0;
            echo $count."<br>";
            $count++;
        }

        increment();
        increment();
    ?>
</body>
</html>