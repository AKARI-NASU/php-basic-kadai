<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UFT-8">
  <title>PHP基礎編_5章課題</title>
</head>

<body>
    <p>
        <?php
        // 変数に値を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 変数に合計点を算出
        $score_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        
        // 変数に平均点を算出
        $score_average = $score_total / 10;

        // 平均点を出力する
        echo $score_average;
        ?>
    </p>
</body>

</html>
