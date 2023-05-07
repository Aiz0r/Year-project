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
            font-size: 120%;
            font-family: "Calibri";
            font-weight: 600;
            text-decoration: none;
            margin: 10px;
            margin-left: 4%;
            margin-right: 30%;
            margin-top: 30px;
            
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
            border-radius: 10px;
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
            <div class = "Text">
                <p>
                Доставка осуществляется в любую точку Беларуси. 
                </p>
                <p>
                Доставка по Минску стоит 10 рублей, доставка за МКАД зависит от расстояния и обсуждается индивидуально.
                </p>
            </div>
        </main>
        <footer>
            <div class = "infointhebottom">
            </div>
        </footer>
        </div>
    </body>
</html>