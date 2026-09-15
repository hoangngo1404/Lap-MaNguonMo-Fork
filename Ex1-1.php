<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In so chan ngau nhien 1-100</title>
</head>

<body>
    <!-- Viết 1 trang web nhận một giá trị ngẫu nhiên là số tự nhiên N
    có giá trị từ 1 → 100. Hãy xuất ra trình duyệt những số chẵn
    nằm trong khoảng 1 → N đó.
    -->
    <?php
    $n = rand(1, 100);
    echo "Những số chẵn nằm trong khoảng 1->n: <br>";
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) echo "$i ";
    }
    ?>
</body>

</html>