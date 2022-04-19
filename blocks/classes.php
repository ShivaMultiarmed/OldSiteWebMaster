<?php

    abstract class MainClass {
        function setImgAlt() {
            $res;
            
            switch ($_SERVER['PHP_SELF']) {
                case '/index.php' :
                    $res = 'создание и продвижение сайтов в Новосибирске';
                    break;
                case '/services.php' :
                    $res = 'создание сайтов под ключ в Новосибирск';
                    break;
                case '/working.php' :
                    $res = 'е';
                    break;
                case '/packages.php' :
                    $res = 'создание сайтов на заказ в Новосибирске';
                    break;
                case '/contacts.php' :
                    $res = '';
                    break;
            }
            
            return $res;
        }
    }

?>