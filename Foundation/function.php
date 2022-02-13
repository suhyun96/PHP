<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>함수 정리 </h1>

    <!--  pre 태그 : html처럼 출력해라 -->
   
    <pre>
        function 함수이름(매개변수1, 매개변수2){
            ....할일....
        }

        함수이름(); 
        
        ex_
        function class_total(){
            echo "hello";
        }
        
    </pre>


    <?php
    // 함수는 조금 복잡한 일의 반복을 피하기 위해 사용 
    // 코드의 가독성이 높아지고 기능별 모듈화 가능 -> 유지보수 용이

        function sum($x,$y){
            return $x+$y;
            
        }
        echo sum(10,20);

    ?>

    <hr>

    <h1>배열 출력</h1>
    
    <?php
        $fruits = [
            'apple',
            "banana",
            "mango",
            'orange'
        ];
        //print_r : 변수값의 정보를 출력
        print_r($fruits);

        
        // html에서 소스코드 검사하면 나오듯이 출력 됨 
        // 이런 형식을 계속 사용한다고 한다면 손으로 일일이 작성하기 보다는 
        // 함수로 만들어서 쓰는 편이 용이 
        echo '<pre>';
        print_r($fruits);
        echo '</pre>';
    ?>

    <h1>함수 생성으로 배열 출력</h1>
    <?php
        function output($value){
            echo '<pre>';
            print_r($value);
            echo '</pre>';
        }


        output($fruits);
    ?>

</body>
</html>