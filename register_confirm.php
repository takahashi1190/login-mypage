<?php
$temp_pic_name = $_FILES['picture']['tmp_name'];
$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,$path_filename);
?>

<!DOCTYPE HTML>
<html lang= "ja">
    <head>
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
        <body>
        <header>
        <img src="4eachblog_logo.jpg">
    </header>
    <main>
  <div class="confirm">
    <div class="form-content">
        <h2>会員登録　確認</h2>
        <h3>こちらの内容で宜しいでしょうか？</h3>
        <div class="name">
        <p>氏名: <?php echo $_POST['name']; ?></p>
        </div>
        <div class="mail">
        <p>メール: <?php echo $_POST['mail']; ?></p>
        </div>
        <div class="password">
        <p>パスワード: <?php echo $_POST['password']; ?></p>
        </div>
        <div class="picture">
        <p>プロフィール写真: <?php echo $_FILES['picture']['name']; ?></p>
        </div>
        <div class="comments">
        <p>コメント: <?php echo $_POST['comments']; ?></p>
        </div>
        <div class="buttons">
    <div class="submit">
        <form action="register_insert.php" method="post">
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name ="name"/>
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name ="mail"/>
            <input type="hidden" value="<?php echo $_POST['password']; ?>" name ="password"/>
            <input type="hidden" value="<?php echo $path_filename; ?>" name ="path_filename"/>
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name ="comments"/>
            <input type="submit" class="fix_button" size="35" value="戻って修正する"/>
            <input type="submit" class="submit_button" size="35" value="登録する"/>
        </form>
        </div>
    </div>
    </main>
    <footer>
    ©️　2018 InterNous.inc. All rights reserved
    </footer>
        </body>
</html>