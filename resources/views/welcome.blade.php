<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все для компьютера</title>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>

<header>
    <div class="top-bar">
        <div class="container">
            <div class="logo">
                ВСЕ ДЛЯ КОМПЬЮТЕРА
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

<section class="hero">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('src/slider/air_1.jpg')}}" alt="iPad Air 2 Slide 1">

            </div>
            <div class="swiper-slide">
                <img src="{{asset('src/slider/air_2.jpg')}}" alt="iPad Air 2 Slide 2">

            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</section>

<section class="new-products">
    <div class="container">
        <h2>Новинки интернет-магазина</h2>
        <div class="product-list">
            <div class="product-item">
                <img src="{{asset('src/block/porc.jpg')}}" alt="Intel Pentium G2030">
                <div class="green-box">
                    <a href="/processor" style="text-decoration: none;">
                    <div class="title"> Процессор Intel Pentium G2030, OEM</div>
                    <p class="desc">3.00ГГц, 3МБ, LGA1155, OEM, 3.00ГГц, 3МБ, LGA1155, OEM</p>
                    <div class="price">2 375 руб.</div>
                    </a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{asset('src/block/protsess.jpg')}}" alt="Intel Pentium G2030">
                <div class="green-box">
                    <a href="/intel" style="text-decoration: none;">
                    <div class="title">Процессор Intel Pentium G2030, OEM</div>
                    <p class="desc">3.00ГГц, 3МБ, LGA1155, OEM, 3.00ГГц, 3МБ, LGA1155, OEM</p>
                    <div class="price">2 375 руб.</div>
                    </a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{asset('src/block/bseagatest1.jpg')}}" alt="Seagate 1TB">
                <div class="green-box">
                    <a href="/sata" style="text-decoration: none;">
                    <div class="title">1Tb Seagate ST1000VX000 (7200rpm) 64Mb SATA-III SV35 Series 3,5"</div>
                    <div class="price">4 551 руб.</div>
                    </a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{asset('src/block/tbseag.jpg')}}" alt="Seagate 1TB">
                <div class="green-box">
                    <a href="/sata-disk" style="text-decoration: none;">
                    <div class="title">1Tb Seagate ST1000VX000 (7200rpm) 64Mb SATA-III SV35 Series 3,5"</div>
                    <div class="price">4 551 руб.</div>
                    </a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{asset('src/block/videokart.jpg')}}" alt="ASUS GTX 760">
                <div class="green-box">
                    <a href="/video-card" style="text-decoration: none;">
                    <div class="title">Видеокарта ASUS GTX 760-DC2OC-2GD5</div>
                    <div class="price">9 063 руб.</div>
                    </a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{asset('src/block/mat.jpg')}}" alt="Asus H81M-K">
                <div class="green-box">
                    <a href="/motherboard " style="text-decoration: none;">
                    <div class="title">Материнская плата Asus H81M-K</div>
                    <div class="price">1 748 руб.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="content">
    <div class="about-section">
        <h2>О магазине</h2>
        <p>
            Магазин "Все для компьютера" – это профессиональный подход к выбору и продаже компьютерной техники и
            аксессуаров. Мы работаем на рынке уже много лет и зарекомендовали себя как надежный партнер для наших
            клиентов. В нашем ассортименте представлены товары от лучших мировых производителей. Мы гарантируем качество
            и оригинальность каждой единицы продукции. Наши специалисты всегда готовы помочь вам с выбором и
            предоставить подробную консультацию.
        </p>
        <button>Подробнее</button>
    </div>
    <div class="reviews-section">
        <h2>Отзывы</h2>
        <div class="review">
            <p class="reviews-p">Товар:<br>
                Материнская плата Asus H81M-K
                <br>
                Срок использования: Менее месяца
                Достоинства
                Хорошая мать за свои деньги. "Всего хватает."

                Недостатки:
                Не обнаружил.

                Комментарий:
                В общем доволен, что купил эту материнку. Собирал комп новый с нуля.</p>
            <span>31 января 2015 г.</span>
        </div>
        <div class="review">
            <p class="reviews-p">Срок использования:
                Менее месяца
                Достоинства:
                Производительный

                Холодный

                Цена/качество <br>
                Недостатки:
                Пока не выявил</p>
            <span>04 января 2015 г.</span>
        </div>
    </div>
</div>

<footer>
    <nav class="nav-footer">
        <ul>
            <li><a href="#">О магазине</a></li>
            <li><a href="#">Каталог продукции</a></li>
            <li><a href="#">Доставка и оплата</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="#">Контакты</a></li>

        </ul>
        <div class="search">
            <input type="text" placeholder="Поиск по сайту">
            <button>Найти</button>
        </div>
    </nav>


    <div class="contact-info">
        <p> © 2014 - 2024 гг. Все для компьютера —<br>
            Комплектующие для компьютеров
        </p>
        <div class="social-media">
            <a href="#"><img src="vk-icon.png" alt="VK"></a>
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
        </div>
    </div>

</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
