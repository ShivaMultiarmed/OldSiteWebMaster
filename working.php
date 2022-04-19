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
        <title>О работе | Mikhail Shell</title>
        <meta name="description" content="Если Вы хотите заказать web-сайт,
              то стоит его заказывать у меня, ведь на моем сайте понятно
              и доступно изложен весь процесс работы над интернет-проектом." />
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
                    <h1><span>о работе</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        Если Вы утвердились в своем намерении заказать web-сайт у меня, то Вам следует прочитать информацию на этой страницы.
                    </p>
                    <p class="para">
                        Здесь представлены этапы процесса работы по созданию сайта для Вас. 
                    </p>    
                    <ol class="specialList">
                        <li>
                            <img src="images/workingIcons/1.png" alt="заказать web-сайт" />
                            В первую очередь мне нужно ознакомиться с Вашим проектом. Вам нужно оформить заявку, с помощью формы заказа.
                            Связавшись со мной, Вы должны рассказать об области Вашей деятельности и 
                            предоставить ТЗ. Работаю по предоплате в 20% от общей стоимости проекта.
                        </li>
                        <li>
                            <img src="images/workingIcons/2.png" alt="заказать web-сайт" />
                            Далее я рисую три разных скетч-прототипа главной страницы и предлагаю выбрать больше всего 
                            устраивающий Вас, по которому делаю psd-макет, и затем по макету верстаю страницу. Потом корректирую ее согласно Вашим пожеланиям.
                        </li>
                        <li>
                            <img src="images/workingIcons/3.png" alt="заказать web-сайт" />
                            После дизайна я веду разработку программного функционала и системы управления контентом и внедряю его в Ваш сайт.
                            Также согласно Вашим предпочтениям и пожеланиям корректирую и функционал проекта.
                        </li>
                        <li>
                            <img src="images/workingIcons/4.png" alt="заказать web-сайт" />
                            Затем я провожу техническую оптимизацию сайта. Вместе с этим составляю текст, оптимизированный под
                            поисковые системы и наполняю им ваш интернет-ресурс. Провожу аналитику контента, делая так, чтобы текст
                            увеличивал конверсию.   
                        </li>
                        <li>
                            <img src="images/workingIcons/5.png" alt="заказать web-сайт" />
                            В конце работы я утверждаю с Вами окончательный результат, делаю доработки, если нужно, и затем отдаю Вам в использование
                            получившийся продукт — Ваш уникальный и неповторимый сайт.
                        </li>
                        
                    </ol>
                </div>
            </section>
        </main>
        <?php
            include('blocks/footer.php');
        ?>
    </body>
</html>