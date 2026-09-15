<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Viết 1 trang web nhận một giá trị ngẫu nhiên là số tự nhiên N
        có giá trị trong [−100; 100]. Sau đó kiểm tra N có là số dương
        không? Nếu thỏa thì:
            I In ra các ước số của N.
            I Viết hàm kiểm tra xem N có phải là số nguyên tố không?
            I Tính tổng các số nguyên tố < N.
            I Kiểm tra N có là số chính phương?
    -->

    <?php
    $n = rand(-100, 100);
    if ($n <= 0) echo "n = $n <br> n không phải là số nguyên dương";
    else {
        echo "Các ước của $n <br>";
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) echo $i . " ";
        }
        echo "<br>";
        songuyento($n);
        echo "Tổng các số nguyên tố < $n là: " . tongsnt($n) . "<br>";

        $scp = sqrt($n);
        if ($scp * $scp == $n) echo "$n là số chính phương!";
        else echo "$n không phải là số chính phương";
    }
    ?>
    <?php
    function songuyento($n)
    {
        for ($i = 2; $i < $n / 2; $i++) {
            if ($n % $i == 0)
                echo "$n không phải là số nguyên tố <br>";
            return;
        }
        echo "$n là số nguyên tố <br>";
        return;
    }
    function tongsnt($n)
    {
        $tong = 0;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 2; $j < $n / 2; $j++) {
                if ($i % $j == 0)
                    break;
            }
            $tong = $tong + $i;
        }
        return $tong;
    }
    ?>
</body>

</html>