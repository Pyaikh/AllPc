<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Процессор Intel Pentium G2030, OEM</title>
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
            <img src="{{asset('src/block/porc.jpg')}}" alt="VIA C3 Processor">
            <div class="product-details">
                <h2>Процессор Intel Pentium G2030, OEM</h2>
                <table>
                    <tr>
                        <td>Производитель:</td>
                        <td>Intel</td>
                    </tr>
                    <tr>
                        <td>Тип поставки:</td>
                        <td>OEM</td>
                    </tr>
                    <tr>
                        <td>Серия:</td>
                        <td>Pentium</td>
                    </tr>
                    <tr>
                        <td>Разъем:</td>
                        <td>Socket 1155</td>
                    </tr>
                    <tr>
                        <td>Ядро:</td>
                        <td>Ivy Bridge</td>
                    </tr>
                    <tr>
                        <td>Количество ядер:</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Количество потоков:</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Техпроцесс:</td>
                        <td>22 нм</td>
                    </tr>
                    <tr>
                        <td>Встроенная видеокарта:</td>
                        <td>Intel HD Graphics</td>
                    </tr>
                </table>
                <div class="price">2 375 руб.</div>
                <button class="buy-button" onclick="addToCart('Процессор Intel Pentium G2030, OEM', 2375)">Купить</button>
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
