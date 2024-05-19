<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href={{asset('css/test.css')}}>
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
                    <li><a href="/">Каталог продукции</a></li>
                    <li><a href="/cart/cart">Доставка и оплата</a></li>
                    <li><a href="/">Контакты</a></li>
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

<main class="cart-page">
    <div class="container">
        <h1>Корзина</h1>
        <div class="breadcrumb">
            <a href="#">Процессоры</a> / <a href="#">Процессор Intel Pentium G2030, OEM</a>
        </div>
        <table id="cart-items">
            <thead>
            <tr>
                <th>Название товара</th>
                <th>Количество</th>
                <th>Цена, руб.</th>
                <th>Сумма, руб.</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            <!-- Товары будут добавлены здесь скриптом -->
            </tbody>
        </table>
        <div class="total">
            Итого к оплате: <span id="total-price">0</span> руб.
        </div>

        <div class="shipping-options">
            <h2>Способ доставки</h2>
            <div class="option">
                <input type="radio" id="courier" name="delivery" value="courier" checked>
                <label for="courier">Курьер - 500 руб. (Бесплатно от суммы 6000 руб.)</label>
            </div>
            <div class="option">
                <input type="radio" id="post" name="delivery" value="post">
                <label for="post">Почта России - 650 руб.</label>
            </div>
            <div class="option">
                <input type="radio" id="ems" name="delivery" value="ems">
                <label for="ems">EMS-доставка - 1200 руб.</label>
            </div>
        </div>

        <form class="order-form" id="registration-form" action="{{asset('form/send_email.php')}}" method="post">
            @csrf
            <h2>Контактные данные</h2>
            <div class="form-group">
                <label for="name">
                    <input type="text" id="name" name="name" placeholder="ФИО" required><span
                        class="error-message" id="name-error"></span>
                </label>
            </div>
            <div class="form-group">
                <label for="email">
                    <input type="tel" id="email" name="email" placeholder="Email"><span class="error-message" id="email-error"></span>
                </label>
            </div>
            <div class="form-group">
                <label for="phone">
                    <input type="tel" id="phone" name="phone" placeholder="Контактные телефоны (с кодом города)*" required><span
                        class="error-message" id="phone-error"></span>
                </label>
            </div>
            <button type="submit">
                <input  type="submit" value="Отправить">
            </button>
        </form>
    </div>
</main>

<script src={{asset('js/scripts.js')}}></script>
<script src={{asset ('js/feedback.js')}}></script>
</body>
</html>
