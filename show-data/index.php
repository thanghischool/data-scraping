<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <img src="https://www.senbay.vn/Images/Logo/senbay.png" alt="">
        <h1 style="display: inline-block; float: right; line-height: 60px">Tổng đài <span
                style="color:coral; font-size: 60px">0868.003.442</span></h3>
    </header>

    <div class="nav">
        <ul>
            <li><a href="">TRANG CHỦ</a></li>
            <li><a href="">VÉ NỘI ĐỊA</a></li>
            <li><a href="">VÉ QUỐC TẾ</a></li>
            <li><a href="">TIN TỨC</a></li>
            <li><a href="">TIN KHUYẾN MẠI</a></li>
            <li><a href="" style="color: #ffc107!important">QUẢN LÝ ĐẶT CHỖ</a></li>
            <li><a href="">LIÊN HỆ</a></li>
        </ul>
    </div>

    <div class="inf">
        <div style="padding: 5px;">
            <p style="color: #fff;">TP Hồ Chí Minh đi đến Hà Nội</p>
            <p style="color: #FF0;">Chủ Nhật, 20/08/2023 (05/07 ÂL), 1 khách</p>
        </div>
    </div>

    <div class="search" style="margin: 10px;">
        <input type="checkbox" name="" id="">
        <label for="">Tất cả</label>
        <input type="checkbox" name="" id="">
        <label for="">Vietjack</label>
        <input type="checkbox" name="" id="">
        <label for="">Vietnam Airline</label>
        <input type="checkbox" name="" id="">
        <label for="">Asen</label>
        <select>
            <option value="0">Thời gian bay</option>
            <option value="1">11:50</option>
            <option value="2">9:30</option>
            <option value="3">10:00</option>

        </select>

        <div class="text-search"
            style="border: red 1px solid; width: 100px; text-align: center; border-radius: 5px; float: right">
            <p style="color: red;">Tìm Kiếm</p>
        </div>
    </div>


    <div class="header-show" style="display: inline-block; width: 100%">
        <ul>
            <li>
                <p>Hãng máy bay</p>
            </li>
            <li>
                <p>Mã máy bay</p>
            </li>
            <li>
                <p>Giờ bay- Giờ hạ cánh</p>
            </li>
            <li>
                <p>Giá bay</p>
            </li>
        </ul>

    </div>
    <?php
    if (file_exists("data-airline.csv")) {
        $file = fopen("data-airline.csv", "r");
        $array = [];

        while (($data = fgetcsv($file)) !== false) {
            $array[] = $data; // Thêm $data vào mảng $array
        }

        fclose($file);

        echo '<div class="parent">';
        foreach ($array as $row) {
            echo '
            <div class="show-data" style="display: inline-block; width: 100%">
            <ul>
            <li>
                <img src="./image/' . $row[0] . '" alt="">
                </li>
               
                    <li>
                    <p>' . $row[1] . '</p>
                    </li>
                    <li style="margin: 0 50px">
                    <p>' . $row[2] . ':' . $row[3] . '</p>
                    </li>
                    
                    
                    <li>
                    <p>' . $row[5] . '</p>
                    </li>

                    <div class="sub-parent" style="background-color: #026a40; width: 75px; height: 30px; text-align: center">
                    <span style="line-height: 30px; color: #fff">Đặt vé</span>
                    </div>
                
            </ul>
        </div> .<br />
        ';
        }

        echo '</div>';
    }


    ?>
    <img src="./image/" alt="">
</body>

</html>