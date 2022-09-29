<?php 
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['form_mypage'])){ 
    header("Location:login_error.php"); 
}

?>

<!DOCTYPE html>
 <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>編集画面</title>
	    <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログアウト</a></div>
        </header>
        <main>
            <div class="会員情報">
                <h2>会員情報</h2>
                
                <div class="hello">
                    <div>こんにちは！<?php echo $_SESSION['name'];?>さん</div>
                </div>
                
                <div class="profile_picture">
                    <img src="<?php echo $_SESSION['picture'];?>">
                </div>

                <form action="mypage_update.php" method="post"> 
                    <div class="right_2">   
                        <p>氏名：
                        <input type="text" class="formbox" size="30" name="name" value="<?php echo $_SESSION['name'];?>" required>
                        </p> 

                        <p>メール：
                        <input type="text" class="formbox" size="30" name="mail" value="<?php echo $_SESSION['mail'];?>" required>
                        </p>

                        <p>パスワード：
                        <input type="text" class="formbox" size="30" name="password" value="<?php echo $_SESSION['password'];?>" required>
                        </p>
                    </div>

                    <div class="comments">
                        <textarea rows="5" cols="70" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                    </div>
                

                    <div class="rewrite_button_2">
                        <input type="submit" class="button" value="この内容に変更する">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>

