<?php 
mb_internal_encoding("utf8"); 

$temp_pic_name=$_FILES['picture']['tmp_name'];

$original_pic_name=$_FILES['picture']['name'];

$path_filename='./image/'.$original_pic_name; 

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
 <html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>会員登録 確認</title>
	<link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>

    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <body>
        <div class="confirm">
            <h2>会員登録 確認</h2> 
            <h3>こちらの内容で登録しても宜しいでしょうか？</h3><br>

            <div class="name">
                <label>氏名：</label>
                <?php
                    echo $_POST['name']; 
                ?>
                <br>
            </div>

            <div class="mail">
                <label>メール：</label>
                <?php
                    echo $_POST['mail'];
                ?>
                <br>
            </div>

            <div class="password">
                <label>パスワード：</label>
                <?php
                    echo $_POST['password'];
                ?>
                <br>
            </div>

            <div class="picture">
                <label>プロフィール写真：</label>
                <?php
                    echo $_FILES['picture']['name']; 
                ?>
                <br>
            </div>

            <div class="comments">
                <label>コメント：</label>
                <?php
                    echo $_POST['comments'];
                ?>
            </div><br>
            
            <div class="submit">
                <div class="rewrite_button">
                    <form action="register.php"> 
                        <input type="submit" value="戻って修正する">
                    </form>
                </div>

                <div class="submit_button">
                    <form action="register_insert.php" method="post"> 
                        <input type="submit" value="登録する"> 
                        <input type="hidden" value="<?php echo $_POST['name'];?>" name="name"> 
                        <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['password'];?>" name="password">
                        <input type="hidden" value="<?php echo $path_filename;?>" name="path_filename"> 
                        <input type="hidden" value="<?php echo $_POST['comments']?>" name="comments">
                    </form> 
                </div>
            </div>
        </div>

        <footer>
            ©︎ 2018 InterNous.inc. All rights reserved
        </footer>
    
    </body>
 </html>
