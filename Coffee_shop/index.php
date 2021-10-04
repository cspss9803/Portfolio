<html lang="zh_tw">
<head>
    <meta charset="UTF-8">
    <title>晨間咖啡</title>
    <link rel="shortcut icon" href="./img/coffee.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="./scss/style.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php 
    $pruduct1 = "貓咪泡咖啡";
    $pruduct2 = "愛情靈藥";
    $pruduct3 = "卡布奇諾";
    $pruduct4 = "咖啡聖代";
    $pruduct5 = "巧克力熱可可";
    $pruduct6 = "黑糖鮮奶咖啡";
    $pruduct7 = "焦雲檸檬塔";
    $pruduct8 = "粉雪奶油蛋糕";
    $pruduct9 = "藍莓奶油蛋糕";

    $pruduct1_count = 0;
    $pruduct2_count = 0;
    $pruduct3_count = 0;
    $pruduct4_count = 0;
    $pruduct5_count = 0;
    $pruduct6_count = 0;
    $pruduct7_count = 0;
    $pruduct8_count = 0;
    $pruduct9_count = 0;
    $pruduct_counts = 0;
    $pruduct_counts_total = $pruduct1_count+$pruduct2_count+$pruduct3_count+$pruduct4_count+$pruduct5_count+$pruduct6_count+$pruduct7_count+$pruduct8_count+$pruduct9_count;

    $pruduct1_price = 45;
    $pruduct2_price = 99;
    $pruduct3_price = 39;
    $pruduct4_price = 49;
    $pruduct5_price = 40;
    $pruduct6_price = 60;
    $pruduct7_price = 35;
    $pruduct8_price = 45;
    $pruduct9_price = 45;
    $pruduct_price_total = $pruduct1_price*$pruduct1_count+$pruduct2_price*$pruduct2_count+$pruduct3_price*$pruduct3_count+$pruduct4_price*$pruduct4_count+$pruduct5_price*$pruduct5_count+$pruduct6_price*$pruduct6_count+$pruduct7_price*$pruduct7_count+$pruduct8_price*$pruduct8_count+$pruduct9_price*$pruduct9_count;


 ?>
    <nav>
        <div class="logo"></div>
        <div class="logo"></div>
        <div class="shopping_car_button"></div>
        <div class="shopping_car_button"></div>
        <div class="shopping_counts">0</div>
        <aside class="shopping_car shopping_car_hide">
            <form class="shopping_car_form" action="coffee_res.php">
                <div class="shopping_car_form_title">購物車</div>
                <div class="shopping_car_form_line"></div>
                <div class="shopping_car_form_products_box">
                    <div class="shopping_car_form_product_tag">
                        <div class="shopping_car_form_product_titleText">品項</div>
                        <div class="shopping_car_form_product_count">數量</div>
                        <div class="shopping_car_form_product_price">價格</div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p1_name" type="text"  readonly="true" value="<?php echo $pruduct1; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p1_number" type="number"  readonly="true" value="<?php echo $pruduct1_count; ?>" oninput="count_change(event,1);"></div>
                        <div class="shopping_car_form_product_price"><input name="p1_price" type="number" readonly="true" value="<?php echo $pruduct1_price*$pruduct1_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p2_name" type="text" readonly="true" value="<?php echo $pruduct2; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p2_number" type="number" readonly="true" value="<?php echo $pruduct2_count; ?>" oninput="count_change(event,2);"></div>
                        <div class="shopping_car_form_product_price"><input name="p2_price" type="number" readonly="true" value="<?php echo $pruduct2_price*$pruduct2_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p3_name" type="text" readonly="true" value="<?php echo $pruduct3; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p3_number" type="number" readonly="true" value="<?php echo $pruduct3_count; ?>" oninput="count_change(event,3);"></div>
                        <div class="shopping_car_form_product_price"><input name="p3_price" type="number" readonly="true" value="<?php echo $pruduct3_price*$pruduct3_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p4_name" type="text" readonly="true" value="<?php echo $pruduct4; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p4_number" type="number" readonly="true" value="<?php echo $pruduct4_count; ?>" oninput="count_change(event,4);"></div>
                        <div class="shopping_car_form_product_price"><input name="p4_price" type="number" readonly="true" value="<?php echo $pruduct4_price*$pruduct4_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p5_name" type="text" readonly="true" value="<?php echo $pruduct5; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p5_number" type="number" readonly="true" value="<?php echo $pruduct5_count; ?>" oninput="count_change(event,5);"></div>
                        <div class="shopping_car_form_product_price"><input name="p5_price" type="number" readonly="true" value="<?php echo $pruduct5_price*$pruduct5_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p6_name" type="text" readonly="true" value="<?php echo $pruduct6; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p6_number" type="number" readonly="true" value="<?php echo $pruduct6_count; ?>" oninput="count_change(event,6);"></div>
                        <div class="shopping_car_form_product_price"><input name="p6_price" type="number" readonly="true" value="<?php echo $pruduct6_price*$pruduct6_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p7_name" type="text" readonly="true" value="<?php echo $pruduct7; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p7_number" type="number" readonly="true" value="<?php echo $pruduct7_count; ?>" oninput="count_change(event,7);"></div>
                        <div class="shopping_car_form_product_price"><input name="p7_price" type="number" readonly="true" value="<?php echo $pruduct7_price*$pruduct7_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p8_name" type="text" readonly="true" value="<?php echo $pruduct8; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p8_number" type="number" readonly="true" value="<?php echo $pruduct8_count; ?>" oninput="count_change(event,8);"></div>
                        <div class="shopping_car_form_product_price"><input name="p8_price" type="number" readonly="true" value="<?php echo $pruduct8_price*$pruduct8_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product">
                        <div class="shopping_car_form_product_titleText"><input name="p9_name" type="text" readonly="true" value="<?php echo $pruduct9; ?>"></div>
                        <div class="shopping_car_form_product_count"><input name="p9_number" type="number" readonly="true" value="<?php echo $pruduct9_count; ?>" oninput="count_change(event,9);"></div>
                        <div class="shopping_car_form_product_price"><input name="p9_price" type="number" readonly="true" value="<?php echo $pruduct9_price*$pruduct9_count; ?>"></div>
                    </div>
                    <div class="shopping_car_form_product_tag">
                        <div class="shopping_car_form_product_titleText">總計</div>
                        <div class="shopping_car_form_product_count"><input name="all_count" type="number" value="0" readonly="true" style="background-color: rgb(233, 233, 233);"></div>
                        <div class="shopping_car_form_product_price"><input name="all_price" type="number" value="<?php echo $pruduct_price_total ?>" readonly="true" style="background-color: rgb(233, 233, 233);"></div>
                    </div>
                    <div class="shopping_car_form_consumer_info">
                        <div class="shopping_car_form_consumer_info_title">聯絡資訊</div>
                        <input type="text" name="user_name" placeholder="請輸入姓名" required>
                        <input type="tel" name="user_phone" placeholder="請輸入電話" required maxlength="10" maxlength="10">
                        <input type="email" name="user_mail" placeholder="請輸入信箱" required>
                        <input type="text" name="user_address" placeholder="請輸入地址" required>
                    </div>
                </div>
                <div class="shopping_car_form_button_box">
                    <input type="submit" value="直接購買" class="shopping_car_form_sumit"></input>
                    <div class="shopping_car_form_sumit_cover"></div>
                    <input type="reset" value="清除全部" class="shopping_car_form_cancel" onclick="productCount(0,0)"></input>
                </div>
            </form>
        </aside>
        <div class="shopping_car_cover"></div>
    </nav>
    <main>
        <div class="banner">
            <div class="banner_title">美好日常，就用咖啡來點綴</div>
            <div class="bannner_text">用咖啡來調劑疲憊的身心，用歡愉的心情拉開一天的序幕。</div>
            <div class="banner_button">
                <div class="banner_button_background"></div>
                <span class="banner_button_text">開始吧!</span>
            </div>
        </div>
        <div class="products_box">
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct1; ?>&nbsp; <span> <?php echo $pruduct1_price ?>$</span><span></span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(1,1)">購買</div>
                        <div class="price"><?php echo $pruduct1_price*$pruduct1_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(1,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct1_count ?></div>
                            <div class="add_button" onclick="productCount(1,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct2; ?>&nbsp; <span> <?php echo $pruduct2_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(2,1)">購買</div>
                        <div class="price"><?php echo $pruduct2_price*$pruduct2_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(2,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct2_count ?></div>
                            <div class="add_button" onclick="productCount(2,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct3; ?>&nbsp; <span> <?php echo $pruduct3_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(3,1)">購買</div>
                        <div class="price"><?php echo $pruduct3_price*$pruduct3_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(3,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct3_count ?></div>
                            <div class="add_button" onclick="productCount(3,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct4; ?>&nbsp; <span> <?php echo $pruduct4_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(4,1)">購買</div>
                        <div class="price"><?php echo $pruduct4_price*$pruduct4_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(4,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct4_count ?></div>
                            <div class="add_button" onclick="productCount(4,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct5; ?>&nbsp; <span> <?php echo $pruduct5_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(5,1)">購買</div>
                        <div class="price"><?php echo $pruduct5_price*$pruduct5_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(5,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct5_count ?></div>
                            <div class="add_button" onclick="productCount(5,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct6; ?>&nbsp; <span> <?php echo $pruduct6_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(6,1)">購買</div>
                        <div class="price"><?php echo $pruduct6_price*$pruduct6_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(6,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct6_count ?></div>
                            <div class="add_button" onclick="productCount(6,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct7; ?>&nbsp; <span> <?php echo $pruduct7_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(7,1)">購買</div>
                        <div class="price"><?php echo $pruduct7_price*$pruduct7_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(7,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct7_count ?></div>
                            <div class="add_button" onclick="productCount(7,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct8; ?>&nbsp; <span> <?php echo $pruduct8_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(8,1)">購買</div>
                        <div class="price"><?php echo $pruduct8_price*$pruduct8_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(8,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct8_count ?></div>
                            <div class="add_button" onclick="productCount(8,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product_img"></div>
                <div class="product_text_box">
                    <div class="product_text"><?php echo $pruduct9; ?>&nbsp; <span> <?php echo $pruduct9_price ?>$</span></div>
                    <div class="buy_box">
                        <div class="buy_button" onclick="productCount(9,1)">購買</div>
                        <div class="price"><?php echo $pruduct9_price*$pruduct9_count ?> $</div>
                        <div class="buy_count">
                            <div class="subtrat_button" onclick="productCount(9,-1)">-</div>
                            <div class="buy_count_number"><?php echo $pruduct9_count ?></div>
                            <div class="add_button" onclick="productCount(9,1)">+</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_background"></div>
        <div class="inf_box">
            <div class="connection">
                <p>電話: 0912345678</p>
                <p>地址: 台西市甜點街53號二分之一樓</p>
                <p>信箱: coffeeshop@coffee.com</p>
            </div>
            <div class="social_link_box">
                <div class="social_link">
                    <a href="#"><div class="link">
                        <img src="./img/a1.png" alt="twitter">
                    </div></a>
                    <div class="block"></div>
                    <a href="#"><div class="link">
                        <img src="./img/a2.png" alt="pinterest">
                    </div></a>
                    <div class="block"></div>
                    <a href="#"><div class="link">
                        <img src="./img/a3.png" alt="pie">
                    </div></a>
                    <a href="#"><div class="link">
                        <img src="./img/a4.png" alt="instagram">
                    </div></a>
                    <div class="block"></div>
                    <a href="#"><div class="link">
                        <img src="./img/a5.png" alt="coffee">
                    </div></a>
                    <div class="block"></div>
                    <a href="#"><div class="link">
                        <img src="./img/a6.png" alt="facebook">
                    </div></a>
                    <a href="#"><div class="link">
                        <img src="./img/a7.png" alt="cake">
                    </div></a>
                    <div class="block"></div>
                    <a href="#"><div class="link">
                        <img src="./img/a8.png" alt="youtube">
                    </div></a>
                    <div class="block"></div>
                    <a href="#"><div class="link">
                        <img src="./img/a9.png" alt="line">
                    </div></a>
                </div>
            </div>
        </div>
        <div class="copyright">Copyright © All rights reserved.</div>
    </footer>
</body>
<script src="./js/main.js"></script>
</html>