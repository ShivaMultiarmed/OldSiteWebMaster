<?php
    header('Content-Type: text/html; charset=utf-8');
    include ('blocks/classes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1440" />
        <title>Частный web-мастер — создание сайтов в Новосибирске | контакты</title>
        <meta name="description" content="Здесь представлены способы, с помошью которых можно связаться со мной, чтобы заказать web-сайт." />
        <meta name="robots" content="all" />
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
                    <h1><span>контакты</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        По заинтересовавшей Вас теме вы можете связаться со мной любым из способов, представленных на сайте.
                    </p>    
                    <ul class="specialUnList">
                        <li>Телефон: +7 (983)-136-70-20</li>
                        <li>E-mail: mikhail.shell@yandex.ru</li>
                        <li>Вконтакте: vk.com/mikhail_shell</li>
                    </ul>    
                </div>
            </section>
        </main>
        <?php
            include('blocks/footer.php');
        ?>
    </body>
</html>