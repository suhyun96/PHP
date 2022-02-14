<?php
    $title='request';
    include_once('inc/header.php');

?>

<!--form에서 받은 데이터를 간단하게 출력하기 -->
<?php
    //최상위 슈퍼글로벌 배열 get 조회가능 
    //get으로 넘겨온 어떤 데이터든 
    //input의 name에 지정한 이름을 넣어준다 
    $name=$_POST['username'];
    $email=$_POST['useremail'];
    echo $name."님이 입력한 이메일은". $email."입니다.";
?>

<?php
    include('inc/footer.php');

?>