<html>
<head>
    <meta charset="UTF-8">
    <title>晨間咖啡</title>
    <link rel="shortcut icon" href="./img/coffee.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./scss/coffee_res.css">
</head>
<body>
<?php
    $p1_name = $_GET['p1_name'];
    $p1_number = $_GET['p1_number'];
    $p1_price = $_GET['p1_price'];

    $p2_name = $_GET['p2_name'];
    $p2_number = $_GET['p2_number'];
    $p2_price = $_GET['p2_price'];

    $p3_name = $_GET['p3_name'];
    $p3_number = $_GET['p3_number'];
    $p3_price = $_GET['p3_price'];
    
    $p4_name = $_GET['p4_name'];
    $p4_number = $_GET['p4_number'];
    $p4_price = $_GET['p4_price'];
    
    $p5_name = $_GET['p5_name'];
    $p5_number = $_GET['p5_number'];
    $p5_price = $_GET['p5_price'];
    
    $p6_name = $_GET['p6_name'];
    $p6_number = $_GET['p6_number'];
    $p6_price = $_GET['p6_price'];
    
    $p7_name = $_GET['p7_name'];
    $p7_number = $_GET['p7_number'];
    $p7_price = $_GET['p7_price'];
    
    $p8_name = $_GET['p8_name'];
    $p8_number = $_GET['p8_number'];
    $p8_price = $_GET['p8_price'];
    
    $p9_name = $_GET['p9_name'];
    $p9_number = $_GET['p9_number'];
    $p9_price = $_GET['p9_price'];
    
    $all_count = $_GET['all_count'];
    $all_price = $_GET['all_price'];

    $user_name = $_GET['user_name'];
    $user_phone = $_GET['user_phone'];
    $user_mail = $_GET['user_mail'];
    $user_address = $_GET['user_address'];

    
?>
<div class="order">
    <div class="title"><?php echo $user_name; ?> 您好  訂單已送出!</div>
    <div class="list">
        <div class="item_tag">
            <div class="name text">商品</div>
            <div class="count text">數量</div>
            <div class="price text">價格</div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p1_name; ?></div>
            <div class="count text"><?php echo $p1_number; ?></div>
            <div class="price text"><?php echo $p1_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p2_name; ?></div>
            <div class="count text"><?php echo $p2_number; ?></div>
            <div class="price text"><?php echo $p2_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p3_name; ?></div>
            <div class="count text"><?php echo $p3_number; ?></div>
            <div class="price text"><?php echo $p3_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p4_name; ?></div>
            <div class="count text"><?php echo $p4_number; ?></div>
            <div class="price text"><?php echo $p4_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p5_name; ?></div>
            <div class="count text"><?php echo $p5_number; ?></div>
            <div class="price text"><?php echo $p5_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p6_name; ?></div>
            <div class="count text"><?php echo $p6_number; ?></div>
            <div class="price text"><?php echo $p6_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p7_name; ?></div>
            <div class="count text"><?php echo $p7_number; ?></div>
            <div class="price text"><?php echo $p7_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p8_name; ?></div>
            <div class="count text"><?php echo $p8_number; ?></div>
            <div class="price text"><?php echo $p8_price; ?></div>
        </div>
        <div class="item">
            <div class="name text"><?php echo $p9_name; ?></div>
            <div class="count text"><?php echo $p9_number; ?></div>
            <div class="price text"><?php echo $p9_price; ?></div>
        </div>
        <div class="item_tag">
            <div class="name text">總計</div>
            <div class="count text"><?php echo $all_count; ?></div>
            <div class="price text" style="color: rgb(228, 14, 14);"><?php echo $all_price; ?></div>
        </div>
        <div class="item_info">
            <div class="customer text">電話: <?php echo $user_phone ?></div>
            <div class="mail text">信箱: <?php echo $user_mail ?></div>
            <div class="address text">地址: <?php echo $user_address ?></div>
        </div>
    </div>
</div>
</body>
</html>
