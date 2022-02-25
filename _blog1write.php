<?php
    require('_conn.php');
    $sql = "INSERT INTO `blog1` (`no`, `title`, `category`, `content`, `id`, `img_file`, `img_size`, `name`, `del_flg`, `reg_date`, `mod_date`) VALUES (NULL, '테스트입니다.', '테스트', '테스트 컨텐츠 입니다.', 'dldydtn207@gmail.com', '', '', '리노트입니다', '0', current_timestamp(), NULL);";
    mysqli_query($conn, $sql);
?>