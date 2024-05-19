<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жесткий диск 1Tb </title>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
</head>
<body>
<header>
    <div class="top-bar">
        <div class="container">
            <div class="logo">
                <a class="logo-main" href="/"> ВСЕ ДЛЯ КОМПЬЮТЕРА</a>
            </div>
            <nav>
                <ul>
                    <li><a href="/">О магазине</a></li>
                    <li><a href="#">Каталог продукции</a></li>
                    <li><a href="/cart">Доставка и оплата</a></li>

                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
            <div class="contact-info">
                <span>+7 8352 12-11-22</span>
                <a href="/cart" alt="Корзина" style="text-decoration: none; color: white">
                    Корзина
                </a>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <main>
        <div class="product">
            <img src="{{asset('src/block/bseagatest1.jpg')}}" alt="VIA C3 Processor">
            <div class="product-details">
                <h2>1Tb Seagate ST1000VX000 (7200rpm) 64Mb SATA-III SV35 Series 3,5"</h2>

                <table>
                    <tr>
                        <td>Производитель:</td>
                        <td>Samsung</td>
                    </tr>

                </table>
                <div class="price">4 551 руб.</div>
                <button class="buy-button" onclick="addToCart('1Tb Seagate ST1000VX000 (7200rpm) 64Mb SATA-III SV35 Series 3,5', 2375)">Купить</button>

            </div>
            <aside>
                <div class="delivery">
                    <h3>Доставка</h3>
                    <p>Доставка по Чебоксарам 150 Р</p>
                    <h3>Самовывоз</h3>
                    <p>Бесплатно. Адрес пункта выдачи: Ул. Алабяна, 16</p>
                    <h3>Оплата</h3>
                    <p>Оплата наличными курьеру или в пункте самовывоза.</p>
                </div>
            </aside>
        </div>
    </main>

</div>
<footer>
    <div class="social">
        <a href="#">ВК</a> | <a href="#">ФБ</a> | <a href="#">Твиттер</a>
    </div>
</footer>
<script src={{asset('js/scripts.js')}}></script>
</body>
</html>
