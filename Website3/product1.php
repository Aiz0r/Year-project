<?php

    $json  = file_get_contents("productsjson.json");
    $productsmass = json_decode($json, true);

    if (isset($_GET['id'])) {


        for ($i = 0; $i < count($productsmass); $i++) {
            if ($_GET['id'] == $productsmass[$i]['id']) {
                $info_tovar = $productsmass[$i];
                break;
            }
        }

        if (isset($info_tovar)) {
            //  к сожалению такой товар не найден...
        }

    } else {

        // перекидываем обратно на каталог или выводим сообщение о том, что к сожалению такой товар не найден...
    }


            if (isset($_POST['id_tovar'])) {


                for ($i = 0; $i < count($productsmass); $i++) {
                    if ($_POST['id_tovar'] == $productsmass[$i]['id']) {
                        $info_tovar = $productsmass[$i];
                        break;
                    }
                }

                $info_tovar['mass'] = $_POST['mass'];

                $json_info = json_encode($info_tovar);

                setcookie('tovar_' . $_POST['id_tovar'], $json_info, time() + 3600);
                setcookie('activ', 1, time() + 3600);

                $add_tovar = "Товар был добавлен в <a href='Cart.php'>корзину</a>! ";

                    for ($i = 0; $i < count($productsmass); $i++) {
                        if ($_POST['id_tovar'] == $productsmass[$i]['id']) {
                            $info_tovar = $productsmass[$i];
                            break;
                        }
                    }

            }

            // var_dump($info_tovar);

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
        td {
            padding: 0 100px;
            
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
        }
        .Text{
            font-size: 105%;
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            margin: 5px;
        }
        .categories {
            width: 9em;
            border: 5px solid #F08080;
            padding: 8px 12px;
            margin: 5px;
        }
        .description {
            font-size: 105%;
            font-family: "Calibri";
            margin-left: 5%;
            margin-right: 5%;
            width: 300px;
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
        .productimg {
            width: 15em;
            height: 600px;
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
        .price{
            font-size: 150%;
            font-family: "Calibri";
            font-weight: 600;
        }
        .page{
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .productcard {
/*            margin-left: 15%;*/
            margin-right: 20%;

        }
        .sendbutton {
            height:40px;
            border-radius: 10px;
        }
        .radiobuttons {
            width: 100px;
            height: 20px;
        }

        #add_new_tovar {
            background-color: #e6b4b4;
            padding: 20px;
            margin: 10px;

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
                        <td>
                            <?php
                            echo "<a href={$block['link']} class = MainText>{$block["text"]}</a>";
                            ?>
                        </td>
                        <?php } ?>
                    </tr>
                </table>
            </div>


                <?php
                    if (isset($add_tovar)) {
                        echo " <div id = 'add_new_tovar'><h2 align='center'>{$add_tovar}</h2></div>";
                    }

                ?>

            <div class = "Text">
            <table class = "productcard">

                <tr>

                <td>
                <div class = "productimg">
                    <img src=<? echo $info_tovar['img']; ?> width='350' >
                </div>
                </td>

                <td>
                <div class = "description">
                    <?php
                        echo $info_tovar['title'] . '<br><br><br>';
                        echo $info_tovar['description'] . '<br>';
                    ?>
                </div>
                </td>

                <td>
                    <div class = "price">
                       <? echo $info_tovar['price']; ?> рублей/кг
                    </div>
                    <p>
                    <form method="POST" action='product1.php'>
                        <select name="mass">
                            <option>1кг</option>
                            <option>2кг</option>
                            <option>3кг</option>
                        </select>
                    </p>
                    <p>
                        <?php
                            if (isset($_GET['id'])) {
                                echo "<input type = 'hidden' value = '{$_GET['id']}' name = 'id_tovar' >";
                            }
                        ?>
                    <input type ='submit' value = 'Добавить в корзину' class = "sendbutton">
                    </p>
                    </form>
                </td>

                </tr>
            </table>
            </div>
        </main>
        <footer>
            <div class = "infointhebottom">
            
            </div>
        </footer>
        </div>
    </body>
</html>

