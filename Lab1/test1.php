<?php
    $name = "Prum Thanh Kha";
    $ngsinh ="11/11/2007";
    $mssv = "2125110193";
echo "Ho ten: ".$name."<br>";
echo "Ngay sinh: ".$ngsinh."<br>";
echo "Ma so sinh vien: ".$mssv."<br>";

define("HOST","localhost");
define("DATABASE","quanly_sv");
define("USERNAME","root");
define("PASSWORD"," ");

echo "Thong tin ket noi cho CSDL:<br><hr>";
echo "HOST:".HOST."<br>";
echo "DATABASE:".DATABASE."<br>";
echo "USERNAME:".USERNAME."<br>";
echo "PASSWORD:".PASSWORD."<br><hr>";
//Day la single line
/*
    Day la multi line
    VD ve phan biet dau nhay don va kep
*/
echo "Khac nhau giua nhay don va nhay kep:<br>";
echo"Dung nhay kep: Xin chao $name <br>";
echo'Dung nhay don: Xin chao $name <br><hr>';

?>