<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Процессор Intel Pentium G2030, OEM</title>
    <link rel="stylesheet" href={{asset('css/test.css')}}>
</head>
<body>
<header>
    <div class="top-bar">
        <div class="container">
            <div class="logo">ВСЕ ДЛЯ КОМПЬЮТЕРА</div>
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

<main class="product-page">
    <div class="container">
        <div class="breadcrumbs">
            <a href="#">Процессоры</a> > <a href="#">Процессор Intel Pentium G2030, OEM</a>
        </div>
        <div class="product-details">
            <div class="product-images">
                <img src="cpu.jpg" alt="Процессор Intel Pentium G2030">
                <div class="thumbnail-images">
                    <img src="cpu.jpg" alt="Процессор Intel Pentium G2030">
                    <img src="cpu.jpg" alt="Процессор Intel Pentium G2030">
                </div>
            </div>
            <div class="product-info">
                <h1>Процессор Intel Pentium G2030, OEM</h1>
                <div class="rating">★★★★☆</div>
                <p>Процессор Intel Pentium G2030, OEM – это отличный выбор для вашего компьютера, который обеспечивает высокую производительность и надежность.</p>
                <ul>
                    <li><strong>Производитель:</strong> Intel</li>
                    <li><strong>Тип поставки:</strong> OEM</li>
                    <li><strong>Серия:</strong> Pentium</li>
                    <li><strong>Разъем:</strong> Socket 1155</li>
                    <li><strong>Ядро:</strong> Ivy Bridge</li>
                    <li><strong>Количество ядер:</strong> 2</li>
                    <li><strong>Количество потоков:</strong> 2</li>
                    <li><strong>Техпроцесс:</strong> 22 нм</li>
                    <li><strong>Встроенная видеокарта:</strong> Intel HD Graphics</li>
                </ul>
                <div class="price">2 375 руб.</div>
                <button class="buy-button" onclick="addToCart('Процессор Intel Pentium G2030, OEM', 2375)">Купить</button>
                <div class="stock">В корзине 13 шт.</div>
                <div class="social-share">
                    <a href="#">Share</a>
                    <a href="#">Tweet</a>
                    <a href="#">Pin</a>
                    <a href="#">Email</a>
                </div>
            </div>
            <div class="sidebar">
                <div class="delivery-info">
                    <h3>Доставка</h3>
                    <p>Доставка по Чебоксарам 150 Р</p>
                </div>
                <div class="pickup-info">
                    <h3>Самовывоз</h3>
                    <p>Бесплатно. Адрес пункта выдачи: Ул. Алабяна, 16</p>
                </div>
                <div class="payment-info">
                    <h3>Оплата</h3>
                    <p>Оплата наличными курьеру или в пункте самовывоза.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src={{asset('js/scripts.js')}}></script>
</body>
</html>
