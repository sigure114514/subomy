<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>予約確認ページ</title>
<link rel="stylesheet" href="./../user_css/main.css">
<link rel="stylesheet" href="./../user_css/reserve.css">
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="center">
        </div>
    </div>

    <form action="" method="get">
    <div id="content">
        <div class="center">

            <table>
                <tr>
                    <th>店名</th>
                    <td><?php echo $shop_info['name'];?></td>
                </tr>
                <tr>
                    <th>人数</th>
                    <td><?php echo $number;?></td>
                </tr>
                <tr>
                    <th>日付</th>
                    <td><?php echo $date;?></td>
                </tr>
                <tr>
                    <th>時間</th>
                    <td><?php echo $time;?></td>
                </tr>
                <tr>
                    <th>コース</th>
                    <td><?php echo $course['name'];?></td>
                </tr>
                <tr>
                    <th>コース料金</th>
                    <td><?php echo $course['price'];?></td>
                </tr>
                <tr>
                    <th>コース備考</th>
                    <td><?php echo $course['other'];?></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $shop_id;?>">
            <input type="hidden" name="num" value="<?php echo $number;?>">
            <input type="hidden" name="date" value="<?php echo $date;?>">
            <input type="hidden" name="time" value="<?php echo $time;?>">
            <input type="hidden" name="course_id" value="<?php echo $course_id;?>">
            <input type="submit" name="back" value="戻る">
            <input type="submit" name="confirm" value="確定">

        </div>
    </div>
    </form>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>