<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information System</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div id="container">
        <header>
            <div id="logo">
            <img src="images/logo.svg" alt="">
            </div>
        </header>
        <div id="login">
            <form name="frm" method="post" action="./login.php">
                <input type="text" name="user_id" class="textfield" placeholder="학번" required>
                <input type="password" name="user_pwd" class="textfield" placeholder="비밀번호">
            <div id="button">    
                <input type="submit" value="로그인" class="log-button">
                <a href="new_mem.php#ohterpage"><button type="button" class="new-button">회원가입</button>
            </div>
            <button onclick="move()">비밀번호를 잊으셨습니까?</button>
        </div>        
    </div>

<script>
    function move() {
        location.href="find.php";
    }    
</script>

</body>
</html>