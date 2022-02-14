<?php
    $title='login';
    include_once('inc/header.php');

?>

<!--사용자 입력을 받은 form이 해당 데이터를 action의 곳으로 보냄  -->

<!---->
<!--사용자가 입력한 데이터를 전송하는 방식 -->
<!--method="get"-->
<form action="./request.php" method="post">
    <p>
        <label for="userName">Name</label>

    <!--label과 input을 id로 연결시켜줌 -->
    <!--데이터베이스에서 사용자가 입력한 데이터가 들어갈 필드명이 필요 name-->
        <input type="text" id="userName" name="username">
    </p>

     <p>
        <label for="userEmail">Email</label>

    <!--label과 input을 id로 연결시켜줌 -->
        <input type="email" id="userEmail" name="useremail">
    </p>

    <p><input type="submit" value="로그인"></p>


</form>

<?php
    include('inc/footer.php');

?>