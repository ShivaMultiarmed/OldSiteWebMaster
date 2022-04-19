<?php
    $userName = trim(htmlspecialchars($_POST['userName']));
    $userEmail = trim(htmlspecialchars($_POST['userEmail']));
    $userTel = trim(htmlspecialchars($_POST['userTel']));
    $userMessage = trim(htmlspecialchars($_POST['userMessage']));

    if (isset($userName) && isset($userEmail) && isset($userTel) && isset($userMessage)) { 
        
        $headers = 'Content-Type: text/html; charset=UTF-8\r\n';
        
        $letterText = <<< STARTTEXT
                <table style="width:100%;font-size:16px;">
                    <tr>
                        <td>
                            <table style="
                                width: 100%;
                                
                                text-align: left;
                                vertical-align: top;">
                                <tr>
                                    <td
                                        style="
                                            word-break: break-all;
                                            width: 16%;
                                            background: #112d40;
                                            color: #FFF;
                                            font-weight: 700; 
                                        ">
                                        От
                                    </td>
                                    <td style="
                                        word-break: break-all;
                                        width: 84%;
                                        background: #58bcff;
                                        color: #000;
                                    ">
                                        $userName
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="
                                            word-break: break-all;
                                            width: 16%;
                                            background: #112d40;
                                            color: #FFF;
                                            font-weight: 700;
                                        ">
                                        E-mail
                                    </td>
                                    <td style="
                                        word-break: break-all;
                                        width: 84%;
                                        background: #58bcff;
                                        color: #000;
                                    ">
                                        $userEmail
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="
                                            word-break: break-all;
                                            width: 16%;
                                            background: #112d40;
                                            color: #FFF;
                                            font-weight: 700;
                                        ">
                                        телефон
                                    </td>
                                    <td style="
                                        word-break: break-all;
                                        width: 84%;
                                        background: #58bcff;
                                        color: #000;
                                    ">
                                        $userTel
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="
                                            word-break: break-all;
                                            width: 16%;
                                            background: #112d40;
                                            color: #FFF;
                                            font-weight: 700;
                                        ">
                                        Сообщение
                                    </td>
                                    <td style="
                                        word-break: break-all;
                                        width: 84%;
                                        background: #58bcff;
                                        color: #000;
                                    ">
                                        $userMessage
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
STARTTEXT;

        mail('mikhail.shell@yandex.ru', 'Заявка на создание сайта', $letterText, $headers);

    }

?>