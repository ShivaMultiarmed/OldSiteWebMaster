<?php
    header('Content-Type: text/html; charset=utf-8');
    include ('blocks/classes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1440" />
        <meta name="robots" content="all" />
        <title>Создание сайтов на заказ в Новосибирске - пакеты | Mikhail Shell</title>
        <meta name="description" content="Я предоставляю услуги по созданию
              web-сайтов в рамках выбранного пакета. На сайте есть подробная
              информация о пакетах услуг и содержание каждого из них." />
        <link rel="stylesheet" type="text/css" href="css/mainStyle.css" />
        <link rel="shortcut icon" type="image/x-icon" href="images/icon.ico" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/onload.js"></script>                
    </head>
    <body>
        <?php
            include('blocks/requestBlock.php');
            include('blocks/header.php');
            include('blocks/nav.php');
        ?>
        <main>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>пакеты</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        Все сайты в сети интернет можно распределить по
                        разным категориям. На этой странице представлены основные
                        четыре категории сайтов.
                    </p>    
                </div>
            </section>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>сайт-визитка</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        <div class="packageInfBlock lowed">
                            <img src="images/sale.png" class="saleMark" />
                            <img src="images/packages/personalcard.png" />
                            <span class="timeLimit">срок изготовления <br />14-16 рабочих дней</span>
                            <span class="price">
                                <span>
                                    11 000 &#8381;
                                    <span class="newPriceMain">8 000 &#8381;</span>
                                </span>
                            </span>
                        </div>
                    </p>
                    <p class="para">
                        Сайт-визитка — сайт, отражающий самую основную информацию о компании или о фрилансере.
                        В интернете есть огромное количество потенциальных клиентов, и 
                        сайт-визитка отлично подходит для их привлечения.
                    </p>
                    <p class="para">
                        Основной задачей сайта-визитки является первичное ознакомление пользователей
                        с товарами или услугами компании. В сайте-визитке главное — его конкретика.
                        На сайте размещается самая основная информация о том, чем занимается фирма.
                    </p>
                    <p class="para">
                        Акцент ставится больше на внешнем оформлении интернет-ресурса,
                        контент же краток и лаконичен. Этот тип сайта рекомендуется фрилансерам.
                    </p>
                </div>
            </section>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>корпоративный сайт</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        <div class="packageInfBlock lowed">
                            <img src="images/sale.png" class="saleMark" />
                            <img src="images/packages/companycard.png" />
                            <span class="timeLimit">срок изготовления <br />16-20 рабочих дней</span>
                            <span class="price">
                                <span>
                                    24 000 &#8381;
                                    <span class="newPriceMain">18 000 &#8381;</span>
                                </span>
                            </span>
                        </div>
                    </p>
                    <p class="para">
                        Корпоративный сайт — это официальное представительство компании
                        в интернете с более полной информацией о ее деятельности, предлагаемой продукции и услугах.
                    </p>
                    <p class="para">
                        По мимо информации в него входят такие дополнительные сервисы и функции, как система авторизации/регистрации,
                        продвинутые формы заказа, форумы, опросы и др. Это все делает этот сайт интерактивным,
                        что помогает обеспечить оперативную связь с клиентами фирмы.
                    </p>
                    <p class="para">
                        Если сайт-визитку стоит выбирать фрилансерам, то корпоративный сайт однозначно подходит для фирмы.
                    </p>   
                </div>
            </section>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>интернет-магазин</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        <div class="packageInfBlock lowed">
                            <img src="images/sale.png" class="saleMark" />
                            <img src="images/packages/onlinestore.png" />
                            <span class="timeLimit">срок изготовления <br />20-28 рабочих дней</span>
                            <span class="price">
                                <span>
                                    45 000 &#8381;
                                    <span class="newPriceMain">33 000 &#8381;</span>
                                </span>
                            </span>
                        </div>
                    </p>
                    <p class="para">
                        Ни для кого не секрет, что сегодня значительная часть
                        покупок товаров происходит по сети интернет, потому что 
                        это гораздо удобней и для продавца, и для потребителя товара.
                    </p>
                    <p class="para">
                        Заказывая создание интернет-магазина, Вы можете осуществлять
                        продажу продукции круглосуточно без перерывов. Вы экономите на аренде помещения,
                        делаете возможным торговлю, неограниченную территориально и многое другое.
                    </p>
                    <p class="para">
                        Итак, заказывать интернет-магазин стоит тем, кто хочет заниматься торговлей
                        с максимумом удобств и минимумом затрат материальных средств и сил.
                    </p>   
                </div>
            </section>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>онлайн-портал</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        <div class="packageInfBlock lowed">
                            <img src="images/sale.png" class="saleMark" />
                            <img src="images/packages/onlineportal.png" />
                            <span class="timeLimit">срок изготовления <br />от 28 рабочих дней</span>
                            <span class="price">
                                <span>
                                    80 000 &#8381;
                                    <span class="newPriceMain">60 000 &#8381;</span>
                                </span>
                            </span>
                        </div>
                    </p>
                    <p class="para">
                        Онлайн-портал — это веб-сайт, предоставляющий пользователю 
                        разные интерактивные сервисы, работающие в рамках 
                        одного веб-сайта, такие как поиск, почта, новости, погода,
                        форумы, обсуждения и т. п.
                    </p>
                    <p class="para">
                        Онлайн-портал — это исчерпывающий интернет-ресурс, наполненный
                        разной тематической информацией. Этот сайт предоставляет возможность
                        взаимодействовать пользователям между собой, объединяться по интересам
                        и обсуждать что-либо.
                    </p>
                    <p class="para">
                        Сайт этого типа подходит для крупной организации,
                        так как он располагает большим объемом информации,
                        что в разы повышает престиж фирмы.
                    </p>   
                </div>
            </section>
        </main>
        <?php
            include('blocks/footer.php');
        ?>
    </body>
</html>