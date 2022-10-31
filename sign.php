<?php

$user_num = $_POST['user_num'];
$user_pw = $_POST['user_pw'];
$user_name = $_POST['user_name'];
$gender = $_POST['gender'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];
$user_birth = $_POST['user_birth'];
$user_location = $_POST['user_location'];

$conn = mysqli_connect('localhost','root','123456789','yohan');
$query = "insert into member (id,pwd,name,gender,phone,email,birth,location) 
            values('$user_num','$user_pw','$user_name','$gender','$user_phone','$user_email','$user_birth','$user_location')";
$result = mysqli_query($conn, $query);

if($result){
    ?>
    <script>alert("회원가입이 완료되었습니다."); location.href="..";</script>
    <?php
}
?>