<?php
    // 1. Phep toan voi 2 so nguyen
    $a = 10;
    $b = 3;
    echo "Cong: " . ($a + $b) . "<br>";
    echo "Tru: " . ($a - $b) . "<br>";
    echo "Nhan: " . ($a * $b) . "<br>";
    echo "Chia: " . ($a / $b) . "<br>";
    echo "Chia lay du: " . ($a % $b) . "<br><hr>";

    // 2. So sanh int va string
    $so = 5;
    $chuoi = "5";
    var_dump($so == $chuoi);  echo "<br>"; // true (chi so sanh gia tri)
    var_dump($so === $chuoi); echo "<br>"; // false (so sanh ca gia tri va kieu du lieu)
    var_dump($so != $chuoi);  echo "<br>"; // false (khac gia tri)
    var_dump($so <> $chuoi);  echo "<br>"; // false (tuong tu !=)
    var_dump($so !== $chuoi); echo "<br><hr>"; // true (khac gia tri hoac khac kieu du lieu)

    // 3. Phep tang truoc (++$x) va tang sau ($x++)
    $x = 5;
    echo "Gia tri ban dau: $x <br>";
    echo "Tang truoc (++\$x): " . (++$x) . " (Sau lenh: $x)<br>"; // Cong 1 truoc roi moi in ra 6
    echo "Tang sau (\$x++): " . ($x++) . " (Sau lenh: $x)<br><hr>"; // In ra 6 truoc roi moi cong thanh 7

    // 4. Noi chuoi bang . va .=
    $s1 = "Xin chao ";
    $s2 = "PHP";
    echo "Dung dau cham (.): " . ($s1 . $s2) . "<br>"; // Ghep 2 chuoi, giu nguyen $s1
    $s1 .= $s2; // Noi $s2 vao thang bien $s1 ($s1 bi thay doi thanh "Xin chao PHP")
    echo "Dung (.=): " . $s1 . "<br><hr>";

    // 5. Dem so ky tu bang strlen() va mb_strlen()
    $khongDau = "Lap trinh";
    $coDau = "Lập trình";
    echo "strlen (khong dau): " . strlen($khongDau) . "<br>"; // Dem theo byte (9 byte = 9 ky tu)
    echo "mb_strlen (co dau): " . mb_strlen($coDau, "UTF-8") . "<br>"; // Dem chinh xac ky tu Unicode co dau (9 ky tu, neu dung strlen se ra 11)
    // 6. Chuyen doi chu hoa va chu thuong
    $txt = "Lap Trinh Web";
    echo "Chu hoa: " . strtoupper($txt) . "<br>";
    echo "Chu thuong: " . strtolower($txt) . "<br><hr>";
    // strtoupper(), strtolower() chi hoat dong voi ky tu khong dau (ASCII)
    // mb_strtoupper(), mb_strtolower() ho tro chuyen doi chinh xac tieng Viet co dau (UTF-8)

    // 7. Ep kieu chuoi ve kieu int
    $c1 = "123 abc";
    $c2 = "abc 123";
    var_dump((int)$c1); echo "<br>"; // int(123) - lay phan so o dau chuoi
    var_dump((int)$c2); echo "<br><hr>"; // int(0) - khong co so o dau nen tra ve 0

    // 8. Khai bao va hien thi cac kieu du lieu co ban
    $kInt = 10;
    $kFloat = 5.5;
    $kString = "PHP";
    $kBool = true;

    var_dump($kInt);    echo "<br>";
    var_dump($kFloat);  echo "<br>";
    var_dump($kString); echo "<br>";
    var_dump($kBool);   echo "<br><hr>";
?>