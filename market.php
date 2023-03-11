<?php 
	$conn = mysqli_connect('localhost', 'root','', 'oksie');
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ОкСиэ - магазин натуральной продукции</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="fonts/onest.css">
</head>
<body>  
    <header class="header">
            <div class="container">
                <div class="navbar__up">
                    <a href="#">г. Якутск</a>
                    <ul>
                        <li>Акции</li>
                        <li>Адреса</li>
                        <li>Наши контакты</li>
                        <li>Поддержка</li>
                    </ul>
                    <span>8-800-000-00-00 (c 8:00 до 23:00)</span>
                </div>
            </div>
        <div class="container">
            <nav class="navbar">
                <img src="img/logo.png" alt="">
                <button class="navbar__button">Каталог</button>
                <input class="search__input" type="text" placeholder="Поиск...">
                <button class="search__button">🔍︎</button>
                <ul>
                    <li><a href="#">Лайк</a></li>
                    <li><a href="#">Корзина</a></li>
                    <li><a href="#">Заказы</a></li>
                </ul>
                <button class="navbar__button">Войти</button>
            </nav>
        </div>
    </header>


    <div class="container">
        <div class="category__buttons">
            <button>Акции</button>
            <button>Экспресс</button>
            <button>Детям</button>
            <button>Дешево</button>
            <button class="category__dropdown">Популярные категории</button>
        </div>
    </div>
    

    <div class="container">
        <div class="actions">
            <div class="actions__left">
                <div class="actions__left__center">
                    <h1>Скидки до 50% в честь 8 марта</h1>
                    <button>Перейти</button>
                </div>
            </div>
            <div class="actions__right">
                <div class="actions__product__main">
                    <div class="actions__product">
                        <img src="img/meat.png" alt="">
                        <h4 class="product__sale">-50%</h4>
                        <p>Мясо говядина, 1 сорт</p>
                    </div>
                </div>
                <div class="actions__product__main">
                    <div class="actions__product">
                        <img src="img/meat.png" alt="">
                        <h4 class="product__sale">-50%</h4>
                        <p>Мясо говядина, 1 сорт</p>
                    </div>
                </div>
                <div class="actions__product__main">
                    <div class="actions__product">
                        <img src="img/meat.png" alt="">
                        <h4 class="product__sale">-50%</h4>
                        <p>Мясо говядина, 1 сорт</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <section class="section">
            <div class="section__title">
                <h1>Сезонное: <span>Зима</span></h1>
                <a href="#">Смотреть все</a>
            </div>

            <div class="section__products">
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
            </div>
        </section>
    </div>


    <div class="container">
        <section class="section">
            <div class="section__title">
                <h1>Продукция от частных лиц</h1>
                <a href="#">Смотреть все</a>
            </div>

            <div class="section__products">
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
            </div>
        </section>
    </div>



    <div class="container">
        <section class="section">
            <div class="section__title">
                <h1>Продукция от частных лиц</h1>
                <a href="#">Смотреть все</a>
            </div>

            <div class="section__products">
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product__info">
                            <img src="img/farsh.jpg" alt="">
                            <h1>249 руб.</h1>
                            <div class="rating__area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>	
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>    
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>  
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>    
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                            <p>Фарш куриный, 1 сорт 500г.</p>
                            <button>В корзину</button>
                        </div>
                    </div>
            </div>
        </section>
    </div>







    <section class="section__adv">
        <div class="container">
            <div class="adv">
                <div class="first">
                    <h1>Скачайте приложения и получите бонусы</h1>
                    <button>Перейти</button>
                </div>
                <div class="second">
                    <img src="img/iphone.png" alt="">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>








    <section class="section__news">
        <div class="container">
            <div class="news">
                <p>Будьте в курсе скидок на наши товары, подпишитесь на рассылку</p>
                <div>
                    <input placeholder="example@mail.ru" type="text">
                    <button>Подписаться</button>
                </div>
            </div>
        </div>
    </section>










    <footer>
        <div class="footer">
            <div class="container">
                <div class="footer__sections">
                    <div class="footer__first">
                        <h3>Покупателям</h3>
                        <h4><a href="#">Как выбрать товар</a></h4>
                        <h4><a href="#">Оплата и доставка</a></h4>
                        <h4><a href="#">Обратная связь</a></h4>
                        <h4><a href="#">Покупать как юр. лицо</a></h4>
                        <h4><a href="#">О сервисе</a></h4>
                        <h4><a href="#">Возврат средств</a></h4>
                    </div>
                    <div class="footer__first">
                        <h3>Сотрудничество</h3>
                        <h4><a href="#">Как стать партнером</a></h4>
                        <h4><a href="#">Документация</a></h4>
                        <h4><a href="#">Личный кабинет </a></h4>
                        <h4><a href="#">Правила</a></h4>
                    </div>
                    <div class="footer__first">
                        <h3>Карьера в нашей компании</h3>
                        <h4><a href="#">Вакансии</a></h4>
                        <h4><a href="#">Документы</a></h4>
                        <h4><a href="#">Наши требования</a></h4>
                        <h4><a href="#">Наши преимущества</a></h4>
                    </div>
                    <div class="footer__second">
                        <h1>8-800-000-00-00 </h1>
                        <h2>с 8:00 до 23:00</h2>
                        <p>Звонок по РФ бесплатный</p>
                        <div>
                            <a href="#">VK</a>
                            <a href="#">Telegram</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>