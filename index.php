<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAVIR WEAR</title>
    <style>
        /* Анимация при входе на сайт */
        @keyframes premiumFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px); /* Начальное смещение вверх */
            }
            to {
                opacity: 1;
                transform: translateY(0); /* Завершающее смещение вверх */
            }
        }
    /* Общие стили */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
        color: #000;
        position: relative;
        animation: premiumFadeIn 1s ease forwards;
    }

    /* Шапка сайта */
    header {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        position: relative;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-title {
        font-size: 36px;
        margin: 0;
        animation: premiumFadeIn 1s ease forwards;
    }

    /* Навигационное меню */
    .nav-menu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .nav-menu li {
        display: inline;
        margin-right: 20px;
        font-size: 18px;
    }

    .nav-menu li a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .nav-menu li a:hover {
        color: #87CEFA;
    }

    /* Основное содержимое */
    .main-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
        justify-content: center;
        position: relative;
        z-index: 1;
    }

    .product {
        text-align: center;
        padding: 20px;
        border: 1px solid #333;
        border-radius: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
    }

    .product:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .product img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        max-width: 400px;
    }

    .product-name {
        margin: 10px 0;
        font-weight: bold;
        font-size: 20px;
    }

    .price {
        font-size: 18px;
        color: #333;
        margin-top: 10px;
        display: block;
    }

    /* Плашки контактной информации и информации о соц. сетях */
    .contact-info,
    .social-info {
        position: absolute;
        top: 50px;
        right: 0;
        display: none;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        border-radius: 5px;
        animation: premiumFadeIn 0.5s ease forwards;
        z-index: 999;
    }

    /* Ссылки на соц. сети */
    .social-info a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .social-info a:hover {
        color: #87CEFA;
    }

    /* Футер */
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        position: relative;
        z-index: 1;
    }

    footer p {
        margin: 0;
        transition: color 0.3s ease;
    }

    footer p:hover {
        color: #87CEFA;
    }

    /* Стили для слогана */
    .slogan {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-top: 20px;
    }

    /* Медиа-запросы для респонсивного дизайна */
    @media only screen and (max-width: 768px) {
        .header-content {
            flex-direction: column;
        }
        .nav-menu {
            margin-top: 20px;
        }
        .nav-menu li {
            display: block;
            margin: 10px 0;
        }
        .main-content {
            padding: 10px;
        }
        .slogan {
            font-size: 20px;
        }
    }
</style>
</head>
<body>
<header>
    <div class="header-content">
        <h1 class="header-title">RAVIR WEAR</h1>
        <nav>
            <ul class="nav-menu">
                <li><a href="#contact" class="contact-link">Связаться</a></li>
                <li><a href="#social" class="social-link">Соц. сети</a></li>
            </ul>
        </nav>
    </div>
    <div class="contact-info" id="contactInfo">
        <p>Номер: 89297254053</p>
        <p>Почта: ravir.intl@mail.ru</p>
    </div>
    <div class="social-info" id="socialInfo">
        <p>Телеграм: <a href="https://t.me/ravirwear">ravirwear</a></p>
        <p>Инстаграм: <a href="https://www.instagram.com/ravir.intl?igsh=a3QxN3Nvbzg1d2Zh">ravir.intl</a></p>
        <p>ВКонтакте: <a href="https://vk.com/ravir_co">ravir_co</a></p>
    </div>
</header>
<div class="main-content">
    <div class="product">
        <a href="#">
            <img src="https://sun9-45.userapi.com/impg/Epm6ydsWIBSSKIe-ux5pm_qq8iLW-dzwkXVfbg/7ZOaDz2Llro.jpg?size=646x807&quality=95&sign=270c8244d46efffb27130fd7c35b0c12&c_uniq_tag=A9C7caqLiagwTneLfywcYBjc_x5rF8yH_RbXu7zCK1s&type=album" alt="белая">
        </a>
        <p class="product-name"><strong>White</strong></p>
        <span class="price">Цена: 3500р</span>
        <span class="slogan">Сделай это великим</span>
    </div>
    <div class="product">
        <a href="#">
            <img src="https://sun9-29.userapi.com/impg/__b6Zhx3xL_TRmfNxZXUNFO0vREQfYGCpY7QTw/vtUaEjQwXLM.jpg?size=646x807&quality=95&sign=1a8fe4e7147d672955a4d0f27c2e7c14&c_uniq_tag=YHyth3nYvza1EMXSk9VvXFBc1dexkA-rnor-FsNdWYE&type=album" alt="чёрная">
        </a>
        <p class="product-name"><strong>Black</strong></p>
        <span class="price">Цена: 3500р</span>
        <span class="slogan">Сделай это великим</span>
    </div>
</div>
<footer>
    <p>© 2024 Ravir. Все права защищены.</p>
</footer>
<script>
    // Получаем ссылки на плашки
    const contactInfo = document.querySelector('.contact-info');
    const socialInfo = document.querySelector('.social-info');
// Обработчик события для плашки контактной информации
document.querySelector('.contact-link').addEventListener('mouseover', function() {
    contactInfo.style.display = 'block';
    socialInfo.style.display = 'none'; // Закрываем соц. плашку
});

// Обработчик события для плашки соц. сетей
document.querySelector('.social-link').addEventListener('mouseover', function() {
    socialInfo.style.display = 'block';
    contactInfo.style.display = 'none'; // Закрываем контактную плашку
});

// Закрываем плашку контактной информации при уходе курсора
contactInfo.addEventListener('mouseleave', function() {
    contactInfo.style.display = 'none';
});

// Закрываем плашку соц. сетей при уходе курсора
socialInfo.addEventListener('mouseleave', function() {
    socialInfo.style.display = 'none';
});
</script>
</body>
</html>