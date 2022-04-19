<?php
    header('Content-Type: text/html; charset=utf-8');
    include ('blocks/classes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=1440" />
        <title>Частный web-мастер — создание сайтов в Новосибирске | ошибка 403</title>
        <meta name="description" content="Mikhail Shell — частный web-мастер. Я предоставляю полный комплект услуг, создавая, продигая и поддерживая работоспособность сайтов. Занимаюсь разработкой различных видов web-сайтов." />
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
                    <h1><span>ошибка 403</span></h1>
                </div>
                <div class="wrapperChild">
                    <p class="para">
                        Доступ к данному ресурсу запрещен.
                    </p>  
                </div>
            </section>
        </main>
        <?php
            include('blocks/footer.php');
        ?>
    </body>
</html>