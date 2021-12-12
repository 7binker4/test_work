<?php

$title = "Добавление";

require_once "header.php";
require_once "Connection.php";


?>
    <div>
        <input class="inputStandard" type="button" onclick="history.back();" value="Назад"/>
    </div>

    <form method="post" action=InsertUser.php>
        <fieldset>
            <legend>Добавление:</legend>
            <div class="field">
                <label>Логин</label>
                <input class=inputForm type=text name=login required>
            </div>
            <div class="field">
                <label>Фамилия</label>
                <input class=inputForm type=text name=surname required>
            </div>
            <div class="field">
                <label>Имя</label>
                <input class=inputForm type=text name=name required>
            </div>
            <div class="field">
                <label>Пароль</label>
                <input class=inputForm type=password name=password required>
            </div>
            <div class="field">
                <label>Email</label>
                <input class=inputForm type=email name=email required>
            </div>
            <div class="field">
                <input class=inputStandard type=submit name=submit value="Добавить">
            </div>
        </fieldset>
    </form>
<?php


require_once "footer.php";