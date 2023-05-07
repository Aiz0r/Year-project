<?php

    if (isset($_POST['title_tort'])) {
        $mas_tort = [
            'title' => $_POST['title_tort'],
            'price' => $_POST['price'],
            'korz' => $_POST['korz'],
            'krem' => $_POST['krem'],
            'nach' => $_POST['nach'],
            'mass' => $_POST['mass'],
            'img' => 'Logo.png',
        ];

            $rand_id = rand(0, 10000);
                $json_info = json_encode($mas_tort);

                setcookie('tovar_' . $rand_id, $json_info, time() + 3600);
                setcookie('activ', 1, time() + 3600);

            $add_tovar = "Товар был добавлен в <a href='Cart.php'>корзину</a>! ";

    }
// title_tort
// price
//
//
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
            font-size: 110%;
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            margin-top: 2%;
            margin-left: 10%;

        }
        .categories {
            width: 9em;
            border: 5px solid #F08080;
            padding: 8px 12px;
            margin: 5px;
            border-radius: 10px;
        }
        .description {
            font-size: 105%;
            font-family: "Calibri";
            margin-left: 20%;
            margin-right: 20%;

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
            margin-left: 15%;
            margin-right: 20%;
            border-radius: 10px;

        }
        .sendbutton {
            padding: 10px;
            border-radius: 10px;
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
            <p style="text-align: center;"><img src="../Logo.png" class = "logo" height = '15%' width = '15%'>

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
                <p> Собери свой торт! </p>

                <form method="POST" action="constructor.php">
                    <p>Укажите название <input type = 'text' name = 'title_tort' placeholder="Мой торт" ></p>
                    <input type = 'hidden' name = 'price' value = 'от 1000'>
                    <p> Выберите вид коржей </p>
                    <select name = 'korz'>
                        <option value="bisk">Бисквитный</option>
                        <option value="chok">Шоколадный</option>
                        <option value="van">Ванильный</option>
                    </select>

                    <p> Выберите крем </p>
                    <select name = 'krem'>
                        <option value="chiz"> Крем-чиз</option>
                        <option value="zavar">Заварной</option>
                        <option value="masl">Масляной</option>
                        <option value="tvor">Творожный</option>
                    </select>

                    <p> Выберите начинку</p>

                    <select name = 'nach'>
                        <option value="vishn">Вишневая</option>
                        <option value="klub">Клубничная</option>
                        <option value="solen">Соленая карамель</option>
                        <option value="beznach"> Без начинки</option>
                    </select>

                    <p> Выберите массу</p>

                     <select name="mass">
                            <option>1кг</option>
                            <option>2кг</option>
                            <option>3кг</option>
                        </select>
                    <p>
                    <input type ='submit' value = 'Добавить в корзину' class = "sendbutton">
                    </p>


                </form>
            </div>
        </main>
        <footer>
            <div class = "infointhebottom">

            
            </div>
        </footer>
        </div>
    </body>
</html>