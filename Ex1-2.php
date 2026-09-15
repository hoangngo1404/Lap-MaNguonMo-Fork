<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang cuu chuong</title>

    <style>
        table {
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- Xây dựng 1 trang web thỏa yêu cầu xuất ra bảng cửu chương từ 1 → 10.-->

    <?php
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>Bảng nhân $i</tr>";
    }
    for ($i = 1; $i <= 10; $i++) {
        echo "<td>";
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j) . "<br>";
        }
        echo "</td>";
    }
    echo "</table>";
    ?>

</body>

</html>