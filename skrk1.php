<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>経歴編集_職務経歴管理システム</title>
</head>

<?php
    require "test.php";
    require "kkeh_function.php"
?>

<body>
    <h3>編集</h3>
    <h5><?= "追加の",$tab,"を入力してください" ?></h5>
    <form name="aaaaa" action="skrk2.php" method="post">
        <select name="fromWhenYear">
            <?php
                $nowYear = date('Y');
                #echo $nowYear;
                createOptionNum(1920,$nowYear+2);
            ?>
        </select>
        <span>年</span>
        <select name="fromWhenMonth">
            <?php
                #echo $nowYear;
                createOptionNum(1,12);
            ?>
        </select>
        <span>月から</span></br>
        <select name="fromWhenYear">
            <?php
                createOptionNum(1920,$nowYear+2);
            ?>
        </select>
        <span>年</span>
        <select name="fromWhenMonth">
            <?php
                createOptionNum(1,12);     
            ?>
        </select>
        <span>月まで</span></br>
        <button type="submit" name="operation" value="send">更新</button>
    </form>
</body>
</html>
