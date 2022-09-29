<?php
session_start();
if(isset($_SESSION['id'])){ 
    header("Location:mypage.php:");
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
                    <div class="mail">
                        <label>メールアドレス</label><br> 
                        <input type="text" class="formbox" size="40" name="mail" 
                        value="<?php  echo $_COOKIE['mail'];?>"
                        >
                    </div> 

                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" name="password"
                        value="<?php echo $_COOKIE['password'];?>"
                        >
                    </div>

                    <div class="keep_login">
                        <label><input type="checkbox" name="keep_login" value="keep_login"
                        <?php 
                        if(isset($_COOKIE['keep_login'])){  
                            echo "checked='checked'"; 
                        }
                        ?>>ログイン状態を保持する</label>
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