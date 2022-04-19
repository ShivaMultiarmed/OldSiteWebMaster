<?php
    header('Content-Type: text/html; charset=utf-8');
    include('blocks/classes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1440" />
        <meta name="robots" content="all" />
        <title>Создание и продвижение сайтов в Новосибирске | Mikhail Shell</title>
        <meta name="description" content="Mikhail Shell — частный web-мастер. 
            Успешно занимаюсь созданием и продвижением сайтов различных видов
            и уровней сложности." />
        <meta name="keywords" content="создание и продвижение сайтов новосибирск частный web-мастер" />
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
            <?php
                include('blocks/gallery.php');
            ?>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>web-мастер</span></h1>
                </div>
                <div class="wrapperChild">
                    <div class="zigzag"></div>
                    <div class="zigzag"></div>

                    <p class="para">
                        <img id="businesssman" src="images/businessman.png" alt="создание и продвижение сайтов в Новосибирске" />
                    </p>
                    <p class="para">
                        Здравствуйте! Меня зовут Mikhail Shell.
                        Я частный <nobr>web-мастер</nobr>, занимаюсь созданием и продвижением сайтов 
                        с 2014 года. Территориально нахожусь в Новосибирске.
                    </p>
                    <p class="para">
                        В настоящее время интернет — самый главный 
                        источник информации, рекламы и продаж 
                        по всему миру. Поэтому, чтобы найти выгодное
                        предложение по интересующему вопросу, люди 
                        чаще всего прибегают к его поиску в интернете. 
                        Следовательно, стоит продвигать свои услуги во
                        всемирной паутине.
                    </p>
                    <p class="para">
                        Сайт, рекламирующий Ваши услуги, — неотъемлемая 
                        часть пиар кампании, ведь он дополняет имидж Вашей фирмы и
                        создает интерес к ней, таким образом повышая уровень продаж и рейтинги.
                    </p>
                    <p class="para" style="margin-bottom: 0;">
                       Почему стоит выбрать меня? Потому что выбрав меня 
                       в качестве Вашего <nobr>web-мастера</nobr>, Вы получаете
                       качественно проработанный сайт по разумной цене.
                       Ведь в отличие от <nobr>web-студий</nobr>, где уделяется малое
                       количество внимания каждому из клиентов, я максимально 
                       учитываю индивидуальные пожелания при разработке проектов.
                    </p>
                </div>
            </section>
            <section class="wrapper" id="services">
                <div class="heading">
                    <h1><span>услуги</span></h1>
                </div>
                <div class="services">
                    <div class="wrapperChild">
                        <img src="images/services/designDevelopment.png" alt="создание и продвижение сайтов в Новосибирске"  />
                        <h2>разработка дизайна</h2>
                        <p>
                            На создание качественного дизайна сайта в значительной степени
                            влияет компоновка элементов на странице. Для
                            этого сначала создается скетч-прототип главной
                            страницы. После утверждения компоновки я
                            рисую дизайн в Adobe Photoshop. Здесь я
                            подбираю читаемые и стильные шрифты, выбираю
                            цветовые решения, слежу за качеством
                            графики и гармоничностью концепции макета. 
                            Далее идет верстка сайта по макету и придание 
                            адаптивности дизайну.
                        </p>
                    </div>
                </div>
                <div class="services">
                    <div class="wrapperChild">
                        <img src="images/services/functionalProgramming.png" alt="создание и продвижение сайтов в Новосибирске"  />
                        <h2>программирование функционала</h2>
                        <p>
                            Помимо внешнего оформления проекта есть и другая очень
                            важная часть создания сайта – это внедрение
                            функционала. В функционал входит удобные юзабилити
                            и интерфейс, типовые и уникальные модули и различные
                            программные решения. Программирование функционала сайта
                            включает в себя также интеграцию системы управления
                            контентом Вашего интернет-ресурса, которая упрощает
                            и автоматизирует работу над контентом.
                        </p>
                    </div>
                </div>
                <div class="services">
                    <div class="wrapperChild">
                        <img src="images/services/seoOptimization.png" alt="создание и продвижение сайтов в Новосибирске" />
                        <h2>seo-оптимизация</h2>
                        <p>
                            Вместе с разработанным дизайном и внедренным функционалом стоит задуматься и над тем, чтобы Ваш проект
                            приобрел известность в интернет-сообществе. Для этого нужна seo-оптимизация.
                            По большей части это продвижение сайта в поисковых системах в верх поисковой выдачи. Включает в себя
                            составление семантического ядра, оптимизацию контента под поисковые
                            системы, техническую оптимизацию сайта.
                        </p>
                    </div>
                </div>
            </section>
            <section class="wrapper" id="packages">
                <div class="heading">
                    <h1><span>пакеты</span></h1>
                </div>
                <div class="wrapperChild">
                    <section class="packages lowed">
                        <img src="images/sale.png" class="saleMark" />
                        <img src="images/packages/personalcard.png" alt="создание и продвижение сайтов в Новосибирске" class="serviceIcon" />
                        <h2>сайт-визитка</h2>
                        <label>
                            персональная страница вашей компании
                        </label>
                        <label>
                            только самая основная и важная информация
                        </label>
                        <label>
                            с экономией средств
                        </label>
                        <label>
                            срок изготовления <br />от 14 до 16 рабочих дней
                        </label>
                        <label>
                            <span>
                                <span class="circle">от</span>
                                <span class="priceMark">11 000 &#8381;</span>
                                <span class="newPriceMain">8 000 &#8381;</span>
                            </span>
                        </label>
                    </section>
                    <section class="packages lowed">
                        <img src="images/sale.png" class="saleMark" />
                        <img src="images/packages/companycard.png" alt="создание и продвижение сайтов в Новосибирске" class="serviceIcon" />
                        <h2>корпоративный сайт</h2>
                        <label>
                            представление вашей фирмы в интернете
                        </label>
                        <label>
                            больше возможностей взаимодействия с сайтом
                        </label>
                        <label>
                            коммуникация с клиентом
                        </label>
                        <label>
                            срок изготовления <br /> от 16 до 20 рабочих дней
                        </label>
                        <label>
                            <span>
                                <span class="circle">от</span>
                                <span class="priceMark">17 000 &#8381;</span>
                                <span class="newPriceMain">12 000 &#8381;</span>
                            </span>
                        </label>
                    </section>
                    <section class="packages lowed">
                        <img src="images/sale.png" class="saleMark" />
                        <img src="images/packages/onlinestore.png" alt="создание и продвижение сайтов в Новосибирске" class="serviceIcon" />
                        <h2>интернет-магазин</h2>
                        <label>
                            автоматизация процесса продаж 24/7
                        </label>
                        <label>
                            удобство управления магазином
                        </label>
                        <label>
                            широкая география услуг
                        </label>
                        <label>
                            срок изготовления <br /> от 20 до 28 рабочих дней
                        </label>
                        <label>
                            <span>
                                <span class="circle">от</span>
                                <span class="priceMark">45 000 &#8381;</span>
                                <span class="newPriceMain">33 000 &#8381;</span>
                            </span>
                        </label>
                    </section>
                    <section class="packages lowed">
                        <img src="images/sale.png" class="saleMark" />
                        <img src="images/packages/onlineportal.png" alt="создание и продвижение сайтов в Новосибирске" class="serviceIcon" />
                        <h2>онлайн-портал</h2>
                        <label>
                            множество различной медиа-информации
                        </label>
                        <label>
                            разнообразие <br />web-сервисов и услуг
                        </label>
                        <label>
                            рекламный потенциал
                        </label>
                        <label>
                            срок изготовления <br /> от 30 рабочих дней
                        </label>
                        <label>
                            <span>
                                <span class="circle">от</span>
                                <span class="priceMark">80 000 &#8381;</span>
                                <span class="newPriceMain">60 000 &#8381;</span>
                            </span>
                        </label>
                    </section>
                </div>
            </section>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>мои преимущества</span></h1>
                </div>
                <div class="wrapperChild">
                    <ul class="specialList WOmarginLeft" style="list-style: none;">
                        <li>
                            <img src="images/advantages/1.png" alt="создание и продвижение сайтов" />
                            <strong>Качественное создание и продвижение сайтов</strong>
                            <br />Для меня важным является создание у клиентов доверия и хорошего отношения ко мне. 
                            Поэтому я заинтересован в качественном выполнении заказа.
                        </li>
                        <li>
                            <img src="images/advantages/2.png" alt="создание и продвижение сайтов" />
                            <strong>Постоянное развитие</strong>
                            <br />
                            Мои методы создания и продвижения сайтов постоянно совершенствуются.
                            Используются новейшие технологии и учитываются современные тенденции развития интернет-ресурсов.
                        </li>
                        <li>
                            <img src="images/advantages/3.png" alt="создание и продвижение сайтов" />
                            <strong>Разумные цены</strong>
                            <br />
                            На все услуги, которые я предоставляю, я установил доступные цены, создав выгоду
                            тем, кто заказывает разработку сайтов у меня.
                        </li>
                        <li>
                            <img src="images/advantages/4.png" alt="создание и продвижение сайтов" />
                            <strong>Уделение персонального внимания</strong>
                            <br />
                            Я, как частный web-мастер, уделяю должное внимание разработке каждого проекта, учитываю все пожелания в отличие, например,
                            от web-студий.
                        </li>
                        <li>
                            <img src="images/advantages/5.png" alt="создание и продвижение сайтов" />
                            <strong>Укладываюсь в сроки</strong>
                            <br />
                            Я создаю сайты, укладываясь в четко обозначенные в договоре сроки.
                        </li>
                    </ul>
                </div>
            </section>
            <section class="wrapper">
                <div class="heading">
                    <h1><span>сайт для бизнеса</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        <img src="images/siteForBusiness.png" style="float: right;margin-left: 10px;margin-bottom: 40px;width: 234px;" alt="создание и продвижение сайтов" />
                    </p>
                    <p class="para">
                        Напоследок, хотелось бы отметить значимость присутствия бизнеса в сети интернет.
                    </p>
                    <p class="para">
                        Сайт для бизнеса предоставляет актуальную информацию о компании и также является средством
                        обратной связи с клиентом, а также он позволяет быстро и комфортно обслуживать потребителя.
                    </p>
                    <p class="para">
                        Создание сайта компании — это возможность сформировать положительный имидж для нее.
                        К тому же количество пользователей сетью интернет с каждым днем стремительно растет
                        и потенциальный покупатель целенаправленно ищет нужный продукт именно во всемирной паутине, ведь это
                        очень удобно. Таким образом, заказав сайт, Вы существенно расширите круг ваших клиентов.
                    </p>
                    <p class="para">
                        Сайт упрощает работу владельцу компании ведь он является рекламным ресурсом,
                        который доступен круглосуточно и поэтому постоянно выполняет главную функцию —
                        привлекает новых клиентов и увеличивает объем продаж.
                    </p>
                    <p class="para"> 
                        Итак, по заинтересовавшему Вас вопросу о создании и продвижении сайтов вы можете связаться со 
                        мной любым из способов, представленных ниже.
                    </p>
                    <p class="para">
                        А также
                        вы можете оставить заявку на создание сайта <a class="thisPageLink" onclick="showRequestBlock();">здесь</a>.
                    </p>
                </div>    
            </section>
        </main>
        <?php
            include('blocks/footer.php');
        ?>
    </body>
</html>