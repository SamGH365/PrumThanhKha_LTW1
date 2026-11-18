<?php
    // 1. Dung trim() loai bo khoang trang dau va cuoi
    $s1 = "   Lap trinh PHP   ";
    echo "trim(): '" . trim($s1) . "'<br><hr>";

    // 2. Dung ltrim() va rtrim()
    $s2 = "   Hoc web co ban   ";
    echo "ltrim() (xoa ben trai): '" . ltrim($s2) . "'<br>";
    echo "rtrim() (xoa ben phai): '" . rtrim($s2) . "'<br><hr>";

    // 3. Cat chuoi bang substr() (> 30 ky tu)
    $s3 = "Chao mung ban den voi mon Lap trinh Web 1";
    echo "10 ky tu dau: " . substr($s3, 0, 10) . "<br>";
    echo "Tu ky tu thu 5 den het: " . substr($s3, 4) . "<br><hr>";

    // 4. Thay the chuoi bang str_replace() (> 30 ky tu)
    $s4 = "Hom nay toi hoc ngon ngu lap trinh PHP co ban";
    echo "Sau khi thay the: " . str_replace("PHP", "MySQL", $s4) . "<br><hr>";
?>