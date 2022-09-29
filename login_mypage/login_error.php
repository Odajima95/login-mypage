<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
 <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        <main>
            <form action="mypage.php" method="post">  
                <div class="form_contents">
                    <div class="error_message">
                        <div>メールアドレスまたはパスワードが間違っています。</div>
                    </div>

                    <div class="mail_2">
                        <label>メールアドレス</label><br> 
                        <input type="text" class="formbox" size="40" name="mail" pattertn="^[a-z0-9._%+-]+@[a-z0-9.-]+¥.[a-z]{2,3}$" required>
                    </div> 

                    <div class="password_2">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" name="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                    </div>

                    <div class="keep_login">
                        <label><input type="checkbox" name="keep_login" value="keep_login">ログイン状態を保持する</label>
                    </div>

                    <div class="login_go">
                        <input type="submit" class="login_button" size="30" value="ログイン">
                    </div>
                </div>
            </form>
        </main>

        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html> 