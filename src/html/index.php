<?php
    // ループの回数
    $loop = 9;

    // GETパラメータがあって、インド式のとき
    if (isset($_GET['lang']) && $_GET['lang'] == 'in') {
        $loop = 99;
    } else {
        $loop = 9;
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>九九の表</title>
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
<h1>九九の表</h1>

<table>
<?php
    // 縦方向（行を作る）のループ
    for ($row = 0; $row <= $loop; $row++) {
?>
    <tr>
        <!-- $row==0のときは、何も書かない（表の左上のセル） -->
        <!-- $row!=0のときは、一番左の列はヘッダ列になる -->
        <th><?php if ($row != 0) echo $row ?></th>
<?php
        // 横方向（列を作る）のループ
        for ($col = 1; $col <= $loop; $col++) {
            if ($row == 0) {
?>
        <!-- $row==0、つまり、一番上の行はヘッダ行になる -->
        <th><?= $col ?></th>
<?php
            } else {
?>
        <!-- ヘッダ行以外は縦横の値を掛け算する -->
        <?php $r = $row * $col ?>
        <!-- 偶数のときはセルの背景に色を付ける -->
        <td<?php if ($r % 2 == 0) echo ' class="even"' ?>><?= $r ?></td>
<?php
            }
        }
?>
    </tr>
<?php
    }
?>
</table>

<ul>
    <li><a href="./">日本式</a></li>
    <li><a href="./?lang=in">インド式</a></li>
</ul>

</div>
</body>
</html>
