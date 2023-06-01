<?php

    /*
    *機能：htmlの選択項目(数字)を作ってくれるよ
    *構文：createOptionNum(最初の数：int 最後の数：int)
    *使用場面：期間や年数を入力するところ全般
    *アプデ予定：特になし
    */

    function createOptionNum (int $firstNumber , int $lastNumber)
    {
        for($i=$firstNumber; $i<$lastNumber+1; $i++){
                    echo "<option value=".$i.">".$i."</option>".PHP_EOL;
        }
    }

    /*
    *機能：htmlの選択項目(文字)を作ってくれるよ
    *構文：createOptionWor(選択したい単語の配列:array)
    *使用場面：期間や年数を入力するところ全般
    *アプデ予定：初期値を登録できるようにしたい
    */

    function createOptionWor (array $wordList)
    {
        foreach($wordList as $selectWord){
            /*
            データベースができたら初期値の変更のための条件分岐
            */
            echo "<option value=".$selectWord.">".$selectWord."</option>".PHP_EOL;

        }
    } 