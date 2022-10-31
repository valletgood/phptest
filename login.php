<?php
    $user_id = isset($_POST['user_id']) ? $_POST['user_id']:"";
    $user_pwd = isset($_POST['user_pwd']) ? $_POST['user_pwd']:"";

    $conn = mysqli_connect('localhost','root','123456789','yohan');
    $query = "select id, pwd from member where id='$user_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $pwd = $row["pwd"];
    $id = $row["id"];

    if(!$row){
        ?>
        <script>alert('존재하지 않은 회원입니다.'); location.href="..";</script>
        <?PHP
    }
    elseif($user_id == $id && $user_pwd == $pwd){
        echo("<script> alert('로그인이 완료되었습니다.')</script>");
        echo("<script>location.replace('main.php');</script>");
    }
    elseif($user_pwd != $pwd){
        ?>
        <script>alert('비밀번호를 다시 입력해주세요.'); location.href="..";</script>
        <?PHP
    }
    ?>