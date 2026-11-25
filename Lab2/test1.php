<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ],

];
$classes = [
    "A1" => "A",
    "A2" => "B",
    "A3" => "C",
    "A4" => "D"
];
$faculties = [
    "Công nghệ thông tin",
    "Quản trị kinh doanh",
    "Kế toán",
    "Ngôn ngữ Anh"
];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = [
    "LT" => "Lập trình",
    "DS" => "Đọc sách",
    "AN" => "Âm nhạc",
    "DL" => "Du lịch",
    "TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            padding: 20px;
        }

        /* thanh menu */
        nav {
            background: rgb(4, 40, 94);
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav li {
            flex: 1;
        }

        a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;

        }

        nav ul li:hover {
            background-color: #084298;
        }

        /* section s1 */
        .s1 {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style-type: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid blue;
            border-radius: 5px;
            transition: 0.3s;
        }

        .s1 li:hover {
            background-color: #cfe2ff;
            transform: translateX(5px);
        }

        /* section s2 */
        .s2 {
            max-width: 70%;
            margin: 10px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            border: 1px solid #dddddd;

        }

        .s2 th {
            background-color: #0d6efd;
            color: white;
            padding: 10px;
            border: 1px solid #dddddd;

        }

        .s2 td {
            padding: 11px 10px;
            border: 1px solid #dddddd;
        }

        .s2 tr:nth-child(even) {
            background-color: #f2f2f2f2;
        }

        .s2 tr:hover td {
            background-color: #cfe2ff;
        }

        /* section s3 */

        .s3 {
            width: 520px;
            margin: 30px auto;
            padding: 25px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            background-color: #ffffff;
        }

        .s3 h3 {
            text-align: center;
            color: #1665c1;
            font-size: 18px;
            margin-top: 0;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .s3 form>div {
            margin-bottom: 15px;
        }

        /* Nhãn chính của mỗi dòng (Họ và tên, Khoa, Lớp...) */
        .s3 form>div>label:first-child {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            font-size: 14px;
            color: #333333;
        }

        /* Ô nhập text và hộp chọn select */
        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        /* Các nhãn đi kèm radio và checkbox */
        .s3 div label:not(:first-child) {
            display: inline-block;
            margin-right: 15px;
            font-weight: normal;
            font-size: 14px;
        }

        /* Nhóm 2 nút Submit và Reset */
        .s3 form>div:last-child {
            margin-top: 20px;
            text-align: center;
        }

        .s3 input[type="submit"],
        .s3 input[type="reset"] {
            padding: 9px 22px;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            margin: 0 5px;
        }

        .s3 input[type="submit"] {
            background-color: #1665c1;
            color: white;
        }

        .s3 input[type="submit"]:hover {
            background-color: #114f99;
        }

        .s3 input[type="reset"] {
            background-color: #e0e0e0;
            color: #333333;
        }

        .s3 input[type="reset"]:hover {
            background-color: #cccccc;
        }
    </style>
</head>

<body>
    <!-- ===========MENU=========== -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href=""><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <?php foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            } ?>
        </ul>

    </section>
    <section class="s2">
        <h3>Danh sách sinh vien</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php foreach ($students as $index => $student) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student["id"] ?></td>
                    <td><?= $student["name"] ?></td>
                    <td><?= $student["gender"] ?></td>
                    <td><?= $student["class"] ?></td>
                </tr>

            <?php } ?>
        </table>
    </section>
    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <input type="text" name="fullname" placeholder="Nhập họ và tên">
            </div>

            <div>
                <label>Khoa</label>
                <select name="faculty">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>

            <div>
                <label>Lớp</label>
                <select name="class">
                    <?php foreach ($classes as $key => $class) { ?>
                        <option value="<?= $key ?>">
                            <?= $class ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div>
                <label>Giới tính</label>
                <?php foreach ($genders as $gender) { ?>
                    <label>
                        <input type="radio" name="gender" value="<?= $gender ?>">
                        <?= $gender ?>
                    </label>
                <?php } ?>
            </div>

            <div>
                <label>Sở thích</label>
                <?php foreach ($hobbies as $key => $hobby) { ?>
                    <label>
                        <input type="checkbox" name="hobbies[]" value="<?= $key ?>">
                        <?= $hobby ?>
                    </label>
                <?php } ?>
            </div>

            <div>
                <input type="submit" value="Đăng ký">
                <input type="reset" value="Nhập lại">
            </div>
        </form>
    </section>
</body>

</html>