<!DOCTYPE html><html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPテスト</title>
</head>
<body>
    <?php echo '<p>Hello World</p>'; ?> 
    <?php
    echo $_SERVER['HTTP_USER_AGENT'];
    // 分岐
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
        echo 'あなたはInternet Explorerを使用しています<br />';
      }
    else{
        echo 'あなたはInternet Explorerを使用していません<br />';
    }
    
    ?>
</body>
</html>