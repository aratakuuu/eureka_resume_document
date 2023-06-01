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
    *構文：createOptionWor(選択したい単語の配列:array 最初に入力されている値(必要なければ適当な単語))
    *使用場面：期間や年数を入力するところ全般
    *アプデ予定：初期値を登録できるようにしたい
    */

    function createOptionWor (array $wordList , $defaultWord)
    {
        foreach($wordList as $selectWord){
            if($selectWord == $defaultWord){
                echo "<option value=".$selectWord." selected>".$selectWord."</option>".PHP_EOL;
            }else{
                echo "<option value=".$selectWord.">".$selectWord."</option>".PHP_EOL;
            }    
        }
    } 