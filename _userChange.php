<?php
    require('_conn.php');

    $no = $_SESSION['no'];
    $name = $_POST['name'];
    $pw = $_POST['pw'];
    $pwc = $_POST['pwc'];
    $email = $_POST['email'];
    $id = $_SESSION['id'];

    // 패스워드를 잘못 입력한 경우 처리
    if ($pw != $pwc) {
        echo "<script>alert('패스워드를 확인해주세요.');location.href='user.php'</script>";
    }

    $sql = "UPDATE `user` SET `name`='$name', `email`='$email', `pw`='$pw' WHERE `no`=$no";
    $result = mysqli_query($conn, $sql);

    if($result){
        $sql = "SELECT * FROM `user` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        foreach($result as $user) {
            $_SESSION['no'] =  $user['no'];
            $_SESSION['id'] =  $user['id'];
            $_SESSION['name'] =  $user['name'];
            $_SESSION['email'] =  $user['email'];
        }
        echo "<script>alert('변경이 완료되었습니다.');location.href='user.php'</script>";
    }

?>