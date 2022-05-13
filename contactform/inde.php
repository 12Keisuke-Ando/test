<?php
if ($_SERVER['RECEST_METHOD' === 'POST']) {
  if (isset($_POST['text'])) {
      $isset_status = 'POSTED, isset() True';
      $name_value = $_POST['name'];
      $mail_value = $_POST['mail'];
      $age_value = $_POST['age'];
      $comments_value = $_POST['comments'];
  } else {
    $isset_status = 'POSTED, isset() False';
    $name_value = '';
    $mail_value = '';
    $age_value = '';
    $comments_value = '';
  }
} else {
    $isset_status = 'started without POST';
    $name_value = '';
    $mail_value = '';
    $age_value = '';
    $comments_value = '';
}
?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="mail_confirm.php">
        <div>
            <label>名前</label><br>
            <input type="text" class="text" size="35" name="name" value="<?php echo $name_value; ?>">
        </div>
    
        <div>
            <label>メールアドレス</label>
            <br>
            <input type="text" class="text" size="35" name="mail" value="<?php echo $mail_value; ?>">
        </div>
            
        <div>
            <label>年齢</label>
            <br>
            <select class="dropdown" name="age" value="<?php echo $age_value; ?>">
                <option>選択してください</option>
                <script>
                    for (var i =18; i <= 65; i++) {
                        document.write("<option value=" + i + ">"+ i +"歳</option>");
                    }
                </script>
            </select>    
        </div>
        
        <div>
            <label>コメント</label>
            <br>
                <textarea cols="35" rows="7" name="comments">value="<?php echo $comments_value; ?>"</textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>

</body>    
</html>