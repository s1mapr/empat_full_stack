<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    <style>
        <?php
            include 'css/header.css';
            include 'css/home.css';
            include 'css/footer.css';
            ?>
    </style>
</head>

<body>
<header class="header">
    <div class="header-logo">
        <a href="?page=home">ProxyTransGroup</a>
    </div>
    <div class="header-routes">
        <a href="?page=home">Головна</a>
        <a href="?page=prices">Ціни</a>
        <a href="?page=contacts">Контакти</a>
    </div>
    <div class="header-action">
        <a>Оформити замовлення</a>
    </div>
    <div class="dropdown">
        <button class="dropdown-btn" onclick="toggleDropdown()">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="#5c80bc" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/>
            </svg>
        </button>
        <div class="dropdown-content" id="dropdownContent">
            <a href="?page=home">Головна</a>
            <a href="?page=prices">Ціни</a>
            <a href="?page=contacts">Контакти</a>
            <div class="dropdown-content-header-action">
                <a style="color: #FFFFFF; padding: 0;">Оформити замовлення</a>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="intro-block">
        <div class="intro-block-info">
            <div class="intro-block-info-text">
                <p>Ми - компанія ProxyTransGroup, яка вже 20 років здійснює вантажні перевезення в місті Кривий Ріг.
                </p>
            </div>
            <div class="intro-block-info-action">
                <a>Зв'яжіться з нами!</a>
            </div>
        </div>
        <div class="intro-block-img">
        </div>
    </div>
    <div class="services-block">
        <h2>Надаємо послуги з перевезення</h2>
        <div class="services-block-cards">
            <div class="services-block-cards-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 36 36">
                    <path fill="#545454" d="M19 23.17V11.46h-2V23.2a3 3 0 1 0 2 0Z"
                          class="clr-i-outline clr-i-outline-path-1"/>
                    <path fill="#545454"
                          d="M26 15a1 1 0 0 0 0-2h-2.08v-2H26a1 1 0 0 0 0-2h-2.08V8a6 6 0 0 0-12 0v12.81a8 8 0 1 0 12-.2V19H26a1 1 0 0 0 0-2h-2.08v-2Zm-2 11a6 6 0 1 1-10.36-4.12l.27-.29V8a4 4 0 0 1 8 0v13.44l.3.29A6 6 0 0 1 24 26"
                          class="clr-i-outline clr-i-outline-path-2"/>
                    <path fill="none" d="M0 0h36v36H0z"/>
                </svg>
                <h5>Продукти та медикаменти</h5>
                <div class="services-block-cards-card-text">
                    <p>Наш транспорт обладнано системами контролю, що гараниує дотримання температурного режиму для
                        зберігання товарів</p>
                </div>
            </div>
            <div class="services-block-cards-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="71" viewBox="0 0 16 16">
                    <path fill="#545454"
                          d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2l-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504L1.508 9.071l2.742 1.567l2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134l2.75 1.571v-3.134L8.5 9.933zm.508-3.996l2.742 1.567l2.742-1.567l-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643L8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                </svg>
                <h5>Промислові товари</h5>
                <div class="services-block-cards-card-text">
                    <p>Для перевезення вантажів пропонуємо на ваш вибір транспортні засоби різної вантажопід’ємності
                        та об’єму</p>
                </div>
            </div>
            <div class="services-block-cards-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="71" viewBox="0 0 24 24">
                    <path fill="#545454"
                          d="M6 2a2 2 0 0 0-2 2v15c0 1.11.89 2 2 2v1h2v-1h8v1h2v-1c1.11 0 2-.89 2-2V4a2 2 0 0 0-2-2zm0 2h5v15H6zm7 0h5v15h-5zm-5 6v3h2v-3zm6 0v3h2v-3z"/>
                </svg>
                <h5>Домашні речі</h5>
                <div class="services-block-cards-card-text">
                    <p>Плануєте зміни у житті та хочете переїхати в інше місце? Досвідчені водії та вантажники
                        виконають свою роботу швидко та професійно</p>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages-block">
        <h2>Наші переваги</h2>
        <div class="advantages-block-cards">
            <div class="advantages-block-cards-card">
                <h5>Досвід</h5>
                <div class="advantages-block-cards-card-text">
                    <p>20 років надаємо професійні послуги з вантажоперевезень в місті Кривий Ріг</p>
                </div>
            </div>
            <div class="advantages-block-cards-card">
                <h5>Документація</h5>
                <div class="advantages-block-cards-card-text">
                    <p>Ведення якісної документації, що дозволяє повінстю контролювати процес перевезення</p>
                </div>
            </div>
            <div class="advantages-block-cards-card">
                <h5>Якість</h5>
                <div class="advantages-block-cards-card-text">
                    <p>Наші транспортні засоби обладнані усім необхідним для безпечного та швидкого перевезення</p>
                </div>
            </div>
            <div class="advantages-block-cards-card">
                <h5>Репутація</h5>
                <div class="advantages-block-cards-card-text">
                    <p>Понад 1000 вдячних клієнтів, > 500 відгуків і рекомендацій наших послуг</p>
                </div>
            </div>
        </div>
    </div>
    <div class="partners-block">
        <h2>Наші партнери</h2>
        <div class="partners-block-images">
            <div class="partners-block-images-image">
                <img src="images/partners/arcelor.png" alt="партнер" width="195" height="89">
            </div>
            <div class="partners-block-images-image">
                <img src="images/partners/auchan.png" alt="партнер" width="140" height="42">
            </div>
            <div class="partners-block-images-image">
                <img src="images/partners/met.png" alt="партнер" width="191" height="33">
            </div>
            <div class="partners-block-images-image">
                <img src="images/partners/novus.png" alt="партнер" width="133" height="29">
            </div>
        </div>
    </div>
    <div class="action-block">
        <div class="action-block-formdiv">
            <h2>Зв’яжіться з нами</h2>
            <form class="action-block-formdiv-form" method="POST" action="#">
                <input class="action-block-formdiv-form-input" placeholder="Ім'я" name="name"/>
                <input class="action-block-formdiv-form-input" placeholder="Номер телефону" name="phoneNumber"/>
                <input class="action-block-formdiv-form-input" placeholder="Електорнна пошта" name="email"/>
                <button type="submit" class="action-block-formdiv-form-submit">Залишити заявку</button>
            </form>
        </div>
        <div class="action-block-img">
        </div>
    </div>
</main>
<footer>
    <div class="footer-info">
        <div class="footer-info-block services">
            <h4>ТРАНСПОРТНІ ПОСЛУГИ</h4>
            <div class="footer-info-text">
                <p>Перевезення по Україні</p>
                <p>Попутний вантаж</p>
            </div>
        </div>
        <div class="footer-info-block types">
            <h4>ВИДИ ВАНТАЖІВ</h4>
            <div class="footer-info-text">
                <p>Генеральні</p>
                <p>Збірні</p>
            </div>
        </div>
        <div class="footer-info-block logistic">
            <h4>ТРАНСПОРТНА ЛОГІСТИКА</h4>
            <div class="footer-info-text">
                <p>Розробка оптимального маршруту</p>
                <p>Експедування вантажів</p>
            </div>
        </div>
        <div class="footer-info-block contscts">
            <h4>КОНТАКТИ</h4>
            <div class="footer-info-text">
                <p>+38(097) 628-42-16</p>
                <p>+38(097) 221-20-62</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2024. Усі права захищені</p>
    </div>
</footer>
</body>
<script>
    <?php
    include 'js/script.js';
    ?>
</script>

</html>