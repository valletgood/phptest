<script>
let findpwd = prompt('학번을 입력하세요');
</script>


<?php
$findpwd = "<script>document.write(findpwd);</sciprt>";

$conn = mysqli_connect('localhost', 'root', '123456789', 'yohan');
$query = "select from member where id = '$findpwd'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if(!$row){
    ?>
        <script> alert('저장된 회원정보가 없습니다.');</script>
        <?php
}
?>


