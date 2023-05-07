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
            border-radius: 10px;
        }
        .MainText{
            font-size: 115%;
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
        }
        /*
        .categories {
            width: 9em;
            border: 5px solid #F08080;
            padding: 8px 12px;
            margin: 5px;
        }*/
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
        .description {
            font-size: 110%;
            font-family: "Calibri";
            font-weight: 500;
            text-decoration: none;
            padding: 10px;
            
        }
        .productscards
        {
            display: flex;
            margin: 15px;
            border-radius: 10px;
        }
        .img{
            height: '10%';
            width: '10%';
            text-align: center;
            border-radius: 10px;
        }
        /*
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
        }
        */
        .page{
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .title{
            font-size: 120%;
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            margin: 5px;
            text-align: center;
        }
        .mainpageflex-container {
            display: flex;
            width: 600px;
            border-radius: 10px;
        }
        .categories-flex {
            flex-basis: 40%;
            flex-grow: 1;
            border-radius: 10px;
         }
        .products-flex{
            flex-basis: 40%;
            flex-grow: 4;
            border-radius: 10px;
        }
/*
    Добавленные в момент правки стили:
 */

    #content {
        display: flex;
    }

    #categories {
        width: 9em;
        border: 5px solid #F08080;
        padding: 8px 12px;
        margin: 5px;
        
    }
    .asText {
        background:none;
        border:none;
        margin:0;
        padding:0;
        font-size: 100%;
        font-family: "Calibri";
        font-weight: 400;
        padding-top: 10%;
    }

    #categories p {
        font-size: 130%;
        font-family: "Calibri";
        font-weight: 400;
        margin: 7px;
    }

    #tovar_list {
        display: flex;
        flex-wrap: wrap;
        margin: 20px;
    }

    .product {
        flex: 25%;
        border: 1px solid #FFA07A;
        border-radius: 3px;
        background: #FF6347;
        margin: 0 35px 20px 0;
        text-decoration: none;
        color: #474747;
        min-height: 300px;
        transition: width .2s;
        width: 100%;
        text-decoration: none;
    }


    .category_element button {
        cursor: pointer;
    }

    </style>
    <body> 
        <div class = "page">
        Контактный телефон: +375 29 646 9370
        <header>
        <div class="container"> 
            <p style="text-align: center;"><img src="Logo.png" class = "logo" height = '15%' width = '15%'></p>
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

<div id = 'content'>
    <div id ='categories'>
        <p class = "asText">
         Категории:
        </p>
        <form method="post">
        <p class = 'category_element'>
            <button class = "asText" value = "Torts" name = "CategoryChoose"> Торты </button>
        </p>
        <p class = 'category_element'>
            <button class = "asText" value = "Zefir" name = "CategoryChoose"> Зефир </button>
        </p>
        <p class = 'category_element'>
            <button class = "asText" value = "Marsh" name = "CategoryChoose"> Маршмеллоу </button>
        </p>
        <p class = 'category_element'>
            <button class = "asText" value = "Milk" name = "CategoryChoose"> Птичье молоко </button>
        </p>
        <p class = 'category_element'>
            <button class = "asText" value = "Pryan" name = "CategoryChoose"> Пряники </button>
        </p>
        <p class = 'category_element'>
            <button class = "asText" value = "Leden" name = "CategoryChoose">Леденцы </button>
        </p>
        <p class = 'category_element'>
            <button class = "asText" value = "Deserts" name = "CategoryChoose"> Тематические десерты </button>
        </p>
        </form>
    </div>
    <?php 
        $categ = "all";
        if (isset($_POST['CategoryChoose']))
        {
            switch ($_POST['CategoryChoose']) {
                case "Torts":
                    $categ = "Torts";
                    break;
                case "Zefir":
                    $categ = "Zefir";
                    break;
                case "Marsh":
                    $categ = "Marsh";
                    break;
                case "Milk":
                    $categ = "Milk";
                    break;
                case "Pryan":
                    $categ = "Pryan";
                    break;
                case "Leden":
                    $categ = "Leden";
                    break;
                case "Deserts":
                    $categ = "Deserts";
                    break;
                }
        }
    ?>
   <div id = 'tovar_list'>
                <?php


                    $json  = file_get_contents("productsjson.json");
                    $productsWITHALL = json_decode($json, true);



                    $products = [];
                    if ($categ != "all"){
                        for($i = 0; $i < count($productsWITHALL); $i++){
                            if ($categ == $productsWITHALL[$i]['category']){
                                $products[] = $productsWITHALL[$i];
                            }
                        }
                    } else {
                        $products = $productsWITHALL;
                    }

                    // var_dump($products);

                    //$json_mas = json_encode($products);
                    //file_put_contents("productsjson.json", $json_mas);

                    if (isset($products[0])) {
                        for ($i = 0; $i < count($products); $i++) { //генератор товаров
                            $block = $products[$i];
                    ?>
                                <div class="product ">
                                <?php
                                        echo "<a href=product1.php?id={$block['id']}>";
                                     ?>
                                    <div class = "img">
                                        <?php
                                            echo "<img src={$block['img']} width='200px'>";
                                        ?>
                                    </div>

                                    <div class = "title">
                                        <?php
                                            echo $block["title"];
                                        ?>
                                    </div>

                                    <div class = "description">
                                        <?php
                                            // echo $block["description"];
                                        ?>
                                    </div>
                                    <?php
                                        echo "</a>";
                                     ?>
                                </div>
                                <?
                                    }
                    } else {

                        if ($products != NULL) {
                            $block = $products;

                    ?>
                                <div class="product ">
                                <?php
                                        echo "<a href={$block['link']}>";
                                     ?>
                                    <div class = "img">
                                        <?php
                                            echo "<img src={$block['img']} width='200'>";
                                        ?>
                                    </div>

                                    <div class = "title">
                                        <?php
                                            echo $block["title"];
                                        ?>
                                    </div>

                                    <div class = "description">
                                        <?php
                                            // echo $block["description"];
                                        ?>
                                    </div>
                                    <?php
                                        echo "</a>";
                                     ?>
                                </div>
                    <?
                        } else {
                            echo "<h3>К сожалению такого товара не найдено...</h3>";
                        }
                    }
                            ?>

    </div>
</div>
        </main>
        <footer>
            <div class = "infointhebottom">

            
            </div>
        </footer>
        </div>
    </div>
    </body>
</html>