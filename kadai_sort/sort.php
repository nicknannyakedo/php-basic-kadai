<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 独自のソート関数を定義
        function sort_2way($array, $order)
        {
            if ($order === true) {
                sort($array); // 昇順ソート（キーはリセットされる）
                echo "昇順ソート結果：<br>";
            } else {
                rsort($array); // 降順ソート
                echo "降順ソート結果：<br>";
            }

            // ソート結果を1行ずつ出力
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートの呼び出し
        sort_2way($nums, true);

        echo "<br>"; // 区切りの改行

        // 降順ソートの呼び出し
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
