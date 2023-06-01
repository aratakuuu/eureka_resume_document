<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>経歴編集_職務経歴管理システム</title>
</head>

<?php
    require "test.php";
    require "kkeh_function.php";
?>

<body>
    <h3>編集</h3>
    <h5><?= "新しい",$tab,"を選択してください" ?></h5>
    <form name="aaaaa" action="yksk2.php" method="post">
        <select name="yksk">
            <?php
                createOptionWor($ykskTest);
            ?>
        </select></br>
        <button type="submit" name="operation" value="send">更新</button>
    </form>
</body>
</html>
