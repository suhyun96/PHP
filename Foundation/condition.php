<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>
    <?php
        // 조건문의 결과를 result에 담음 
        $result = 1 < 3;  // true이면 1  // flase이면 아무것도 출력 안함 
        // 결과가 1이 나온다 참이니까 
        echo $result , "</br>";

        
        echo $result==true, "<br>";
        

        $first_name='kikai';
        $last_name='choi';
        
        // php는 특이하게 and or 등 알파벳을 쓸 수 있다 
        // && = and 
        // || = or 
        // xor = 둘 중 서로 다르면 참 = true 

        if($first_name == "kikai" or $last_name=="choi"){
            echo "조건은 참이다";
        }else{
            echo "조건은 거짓이다.";
        }


        
    

    ?>

</body>
</html>