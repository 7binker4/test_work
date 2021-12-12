<?php

require_once "Connection.php";

$title = "Измение";

require_once "header.php";

$id = $_REQUEST['id'];

$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($link, $sql) or die();

$dataFromTable = mysqli_fetch_assoc($query);
?>
    <div>
        <input class="inputStandard" type="button" onclick="history.back();" value="Назад"/>
    </div>

    <form action=EditUser.php>
        <fieldset>
            <legend>Регистрация:</legend>
            <input type=hidden name=id value="<? echo $dataFromTable['id'] ?>">
            <div class="field">
                <label>Логин</label>
                <input class=inputForm type=text name=login value="<? echo $dataFromTable['login'] ?>">
            </div>
            <div class="field">
                <label>Фамилия</label>
                <input class=inputForm type=text name=surname value="<? echo $dataFromTable['surname'] ?>">
            </div>
            <div class="field">
                <label>Имя</label>
                <input class=inputForm type=text name=name value="<? echo $dataFromTable['name'] ?>">
            </div>
            <div class="field">
                <label>Пароль</label>
                <input class=inputForm type=password name=password value="<? echo $dataFromTable['password'] ?>">
            </div>
            <div class="field">
                <label>Email</label>
                <input class=inputForm type=email name=email value="<? echo $dataFromTable['email'] ?>">
            </div>
            <div class="field">
                <input class=inputStandard type=submit name=submit value="Изменить">
            </div>
        </fieldset>
    </form>


<?php

require_once "footer.php";