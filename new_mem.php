<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Member Form</title>
    <link rel="stylesheet" href="css/new.css">
</head>
<body>
    <div id="container">
        <div id="form">
            <form name="frm" method="POST" action='./sign.php'>
            학번<input type="text" name="user_num" class=text-field required>
            비밀번호<input type="text" name="user_pw" class=text-field required>
            이름<input type="text" name="user_name" class=text-field required>
            성별<input type="check" name="gender" class=text-field placeholder="남 or 여" required>
            전화번호<input type="text" name="user_phone" class=text-field placeholder="ex) 010-1234-1234" required>
            이메일<input type="text" name="user_email" class=text-field required>
            생년월일<input type="text" name="user_birth" class=text-field placeholder="ex) 1997.12.25" required>
            거주지<input type="text" name="user_location" class=text-field placeholder="ex) 서울" required>
            <input type="submit" value="등록하기" class="sign">
            </form>
        </div>
    </div>
</body>
</html>