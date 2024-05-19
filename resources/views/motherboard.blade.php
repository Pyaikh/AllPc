<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Материнская плата Asus H81M-K</title>
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
                    <li><a href="#">О магазине</a></li>
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
            <img src="{{asset('src/block/mat.jpg')}}" alt="VIA C3 Processor">
            <div class="product-details">
                <h2>Материнская плата Asus H81M-K</h2>
                <table>
                    <tr>
                        <td>Производитель:</td>
                        <td>Asus</td>
                    </tr>

                </table>
                <div class="price">2 375 руб.</div>
                <button class="buy-button" onclick="addToCart('Материнская плата Asus H81M-K', 2375)">Купить</button>
                <p>В корзине 13 шт.</p>
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
