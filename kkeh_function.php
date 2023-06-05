<?php

    declare(strict_types=1);

    function createOptionNum(int $firstNumber, int $lastNumber, $nameName1)
    {
        /*
        *機能：htmlの選択項目(数字)を作ってくれるよ
        *構文：createOptionNum(最初の数：int,最後の数：int,name=xxxx[]のxxxx)
        *使用場面：期間や年数を入力するところ全般
        *アプデ予定：特になし
        */

        echo '<select name="'.$nameName1.'">'.PHP_EOL;

        for ($i=$firstNumber; $i<$lastNumber+1; $i++) {
            echo "<option value=".$i.">".$i."</option>".PHP_EOL;
        }

        echo '</select>'.PHP_EOL;
    }

    function createOptionWor(array $wordList1, $defaultWord, $nameName2)
    {
        /*
        *機能：htmlの選択項目(文字)を作ってくれるよ
        *構文：createOptionWor(選択したい単語の配列:array,最初に入力されている値(必要なければ適当な単語),name=xxxx[]のxxxx)
        *使用場面：期間や年数を入力するところ全般
        *アプデ予定：特になし
        */
        echo '<select name="'.$nameName2.'">'.PHP_EOL;

        foreach ($wordList1 as $selectWord1) {
            if ($selectWord1 == $defaultWord) {
                echo "<option value=".$selectWord1." selected>".$selectWord1."</option>".PHP_EOL;
            } else {
                echo "<option value=".$selectWord1.">".$selectWord1."</option>".PHP_EOL;
            }
        }

        echo '</select>'.PHP_EOL;
    }

    function createCheckbox(array $wordList2, $nameName3)
    {
        /*
        *機能：htmlのチェックボックスを作ってくれるよ
        *構文：createCheckbox(選択したい単語の配列:array,name=xxxx[]のxxxx)
        *使用場面：チェックボックスを作成したい！！
        *アプデ予定：特になし
        */

        $i=0;

        foreach ($wordList2 as $selectWord2) {
            $i += 1;
            echo '<input type="checkbox" id="'.$i.'" name="'.$nameName3.'[]" value='.$i.'>'.PHP_EOL;
            echo '<label for='.$selectWord2.'>'.$selectWord2.'</label></br>'.PHP_EOL;
        }
    }


    /**
     * PDOインスタンスを取得する関数
     */
    function connect(): PDO
    {
        $pdo = new PDO('mysql:host=localhost; dbname=employee; charset=utf8mb4', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    /**
     * HTMLエスケープする関数
     */
    function escape(?string $value)
    {
        return htmlspecialchars(strval($value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    /**
     * LIKE演算子のワイルドカードをエスケープする関数
     */
    function escapeLike(?string $value)
    {
        return preg_replace('/([_%#])/u', '#${1}', $value);
    }
