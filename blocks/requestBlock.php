<div id="requestWrapper"></div>
<div id="requestDiv">
    <label>обратная связь</label>
    <img src="images/closeIcon.png" />
    <p>
        Здесь Вы можете оставить заявку на
        интересующие Вас услуги.
    </p>
    <p id="error">

    </p>
    <form id="requestForm" action="" method="post">
        <label id="lName">
            Ваше имя
            <input type="text" maxlength="30" name="userName" autocomplete="off" />
        </label>
        <label id="lEmail">
            Ваш e-mail
            <input type="text" maxlength="35" name="userEmail" autocomplete="off" />
        </label>
        <label id="lTel">
            Ваш телефон
            <input type="text" id="tel" name="userTel" autocomplete="off" />
        </label>
        <label id="lMessage">
            Ваше сообщение
            <textarea rows="9" maxlength="429" name="userMessage"></textarea>
        </label>
        <input type="submit" value="отправить" id="btn" />
    </form> 
</div>