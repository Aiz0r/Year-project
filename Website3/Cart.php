<?php

/*
    if (isset($_POST['id_tovar'])) {
        $json  = file_get_contents("Products/productsjson.json");
        $productsmass = json_decode($json, true);

        for ($i = 0; $i < count($productsmass); $i++) {
            if ($_POST['id_tovar'] == $productsmass[$i]['id']) {
                $info_tovar = $productsmass[$i];
                break;
            }
        }

        $json_info = json_encode($info_tovar);

        setcookie('tovar_' . $_POST['id_tovar'], $json_info, time() + 3600);


    }
*/

        if (isset($_COOKIE['activ'])) {
            foreach ($_COOKIE as $key => $value) {
                $mas[$key] = json_decode($value, true);
            }

        }


        // var_dump($_COOKIE);


//id_tovar
// mass

?>

<!DOCTYPE html>
<html>
	<head>
    </head>
    <style>
        .logo
        {
            text-align: center;
        }
        .linkspart
        {
            background: #F08080;
            text-decoration: none;
            border-radius: 10px;
        }
        .td {
            padding: 0 100px;
            border-radius: 10px;
            
        }
        .container {
            width: 100%;
            max-width: 1024px; 
            padding: 0 15px;
            margin: 0 auto;
        }
        .MainText{
            font-size: 115%;
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            border-radius: 10px;
        }
        .Text{
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            margin: 10px;
            margin-left: 4%;
/*            margin-right: 30%;*/
            margin-top: 5%;
            display: flex;
            flex-wrap: wrap;
        }
        .categories {
            width: 9em;
            border: 5px solid #F08080;
            padding: 8px 12px;
            margin: 5px;
            border-radius: 10px;
        }
        .textincategories{
            font-size: 110%;
            font-family: "Calibri";
            font-weight: 400;
        }
        .products {
            width: 9em;
            padding: 8px 12px;
            margin: 5px;
        }
        header {
            background-color: white;
            height: 20%;
        }
        footer {
            background-color: white;
            height: 10%;
        }
        main {
             flex: 1;
             background-color: #FFA873;
             border-radius: 10px;
         }

        .infointhebottom 
        {
            padding: 8px 12px;
            margin: 5px;
        }
        .productscards
        {
            background-color: white;
        }
        .product-wrapper
        {
            display: block;
            width: 100%;
            float: left;
            transition: width .2s;
        }
        .product
        {
            display: block;
            border: 1px solid #FFA07A;
            border-radius: 3px;
            position: relative;
            background: #FF6347;
            margin: 0 35px 20px 0;
            text-decoration: none;
            color: #474747;
            z-index: 0;
            height: 300px;
            border-radius: 10px;
        }
        @media only screen and (min-width: 450px) {
            .product-wrapper {
                width: 50%;
            }
        }

        @media only screen and (min-width: 768px) {
            .product-wrapper {
                width: 33.333%;
            }
        }

        @media only screen and (min-width: 1000px) {
            .product-wrapper {
                width: 25%;
            }
        }
        .page{
            height: 100vh;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
        }
        .cart{
              border: 5px solid #F08080;
                border-collapse: collapse;
                border-radius: 10px;
        }

        .forma_order {
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            margin: 10px;
            margin-left: 20%;
            border-radius: 10px;

        }
    </style>
    <body> 
        <div class = "page">
        Контактный телефон: +375 29 646 9370
        <header>
        <div class="container">
            <p style="text-align: center;"><img src="Logo.png" class = "logo" height = '15%' width = '15%'>

        </div>
        </header>
        <main>
        <div class = linkspart style="height: 50px;">
                <table>
                    <tr>
                        <?php
                        $link1 = ['text' => 'Главная', 'link' =>'MainPage.php'];
                        $link2 = ['text' => 'О нас', 'link' =>'Info.php'];
                        $link3 = ['text' => 'Доставка', 'link' =>'Delivery.php'];
                        $link4 = ['text' => 'Свой торт', 'link' =>'constructor.php'];
                        $link5 = ['text' => 'Корзина', 'link' =>'Cart.php'];
                        
                        $links = [$link1, $link2, $link3, $link4, $link5];

                        for ($i = 0; $i < count($links); $i++) { //генератор ccылок
                            $block = $links[$i];
                    
                        ?>
                        <td class = "td">
                            <?php
                            echo "<a href={$block['link']} class = MainText>{$block["text"]}</a>";
                            ?>
                        </td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
            <div class = "Text">
                <table class = "cart">
                    <?php
                        if (isset($mas)) {
                            foreach ($mas as $key => $value) {
                                if ($key != 'activ') {
                                    $img = $value['img'];
                                    $title = $value['title'];
                                    $price =  $value['price'];
                                    $kolvo = $value['mass'];



                    ?>
                    <tr class = "cart">
                        <td class = "cart">
                            <img src=<?php echo $img; ?> class = "logo" height = '130px' width = '130px'>
                        </td>
                        <td class = "cart">
                            <?php echo $title; ?>
                        </td>
                        <td class = "cart">
                            <?php echo $price; ?>
                        </td>
                        <td class = "cart">
                            <?php echo $kolvo; ?>
                        </td>
                    </tr>

                    <?php
                                }
                            }
                        }

                    ?>
                </table>


            <?php
                if (isset($mas)) {

            ?>

            <div class = "forma_order">
                <form method="POST" action="obr_zakaz.php">
                        <p class = "Text">
                            Введите свое имя:
                        </p>
                        <p class = "Text">
                            <input placeholder ="Ваше имя" type='text' name= 'namePolz'>
                        </p>
                        <p class = "Text">
                            Ваш e-mail:
                        </p>
                        <p class = "Text">
                            <input placeholder ="Ваш адрес эл. почты" type='text' name= 'emailPolz'>
                        </p>
                        <p class = "Text">
                            Ваш телефон:
                        </p>
                        <p class = "Text">
                            <input placeholder ="Ваш телефон" type='input' name= 'number'>
                        </p>
                        <p class = "Text">
                            Комментарий к заказу:
                        </p>
                        <p class = "Text">
                            <textarea name="comment" cols="40" rows="3"></textarea></p>
                        </p>
                        <input type ='submit' value = 'Оформить заказ' class = "Text">

                </form>
            </div>
            <?php
                } else {
                    echo "<h1 > Корзина пуста :( </h1>";
                }

            ?>

<!--                 <form action="Order.php">
                        <button class = "Text">Оформить заказ</button>
                </form>
                 -->
            </div>
            
            
            
            
        
        </main>
        <footer>
            <div class = "infointhebottom">
            
            </div>
        </footer>
        </div>
    </body>
</html>