<?php
session_start();

if (empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang= "ja">
    <head>
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
        <body>
        <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="logout.php">ログアウト</a></div>
    </header>
    <main>
  <div class="confirm">
    <div class="form-content">
        <h2>会員登録</h2>
        <h3>こんにちは！<?php echo $_SESSION['name']; ?>さん</h3>
        <div class="picture">
        <img src="<?php echo $_SESSION['picture']; ?>">
        </div>
        <form action ="mypage_update.php" method="post">
        <div class="name">
        <p>氏名:  <input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name ="name"/></p>
        <p>メール: <input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name ="mail"/></p>
        <p>パスワード: <input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name ="password"/></p>
        </div>
        
        <div class="comments">
        <textarea rows="3" cols="75" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
        </div>
        <div class="buttons">
    <div class="submit">
            <input type="submit" class="submit_button" size="35" value="この内容に変更する"/>
            </form>
        </div>
    </div>
    </main>
    <footer>
    ©️　2018 InterNous.inc. All rights reserved
    </footer>
        </body>
</html>