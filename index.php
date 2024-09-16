<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Основное меню</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .menu {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .button {
            display: block;
            background-color: #007bff;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin: 10px 0;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .back-button {
            background-color: #6c757d;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <h1>Основное меню</h1>
    <div class="menu">
        <a href="#" class="button" onclick="showBots()">Боты</a>
        <a href="#" class="button" onclick="showMyBots()">Мои боты</a>
        <a href="#" class="button" onclick="showReferrals()">Рефералы</a>
        <a href="#" class="button" onclick="showSettings()">Настройки</a>
    </div>

    <div id="content"></div>

    <script>
        function showBots() {
            const content = `
                <h2>Список ботов</h2>
                <div class="menu">
                    <a href="#" class="button" onclick="openBot('GETON')">@FarmGetonBot</a>
                    <a href="#" class="button" onclick="openBot('SHREK')">@shrekston_bot</a>
                    <a href="#" class="button" onclick="openBot('SPEPE')">@SPEPEDROPBot</a>
                    <a href="#" class="button" onclick="openBot('TIGER')">@tiger_drop_bot</a>
                    <a href="#" class="button" onclick="openBot('TON')">@toncryptodropbot</a>
                    <a href="#" class="button" onclick="openBot('GEMZ')">@gemzcoin_bot</a>
                    <a href="#" class="button back-button" onclick="showMainMenu()">Назад</a>
                </div>
            `;
            document.getElementById('content').innerHTML = content;
        }

        function openBot(bot) {
            const content = `
                <h2>${bot} - Меню</h2>
                <div class="menu">
                    <a href="https://t.me/bots_ref1" class="button" target="_blank">Играть</a>
                    <a href="#" class="button" onclick="showReferrals('${bot}')">Рефералы</a>
                    <a href="#" class="button" onclick="showInstructions()">Инструкция</a>
                    <a href="#" class="button" onclick="addMyBot('${bot}')">Добавить в Мои боты</a>
                    <a href="#" class="button" onclick="setAlarm('${bot}')">Будильник</a>
                    <a href="#" class="button back-button" onclick="showBots()">Назад</a>
                </div>
            `;
            document.getElementById('content').innerHTML = content;
        }

        function showReferrals(bot) {
            const count = prompt("Введите количество рефералов (мин 5, макс 1000):");
            if (count >= 5 && count <= 1000) {
                alert(`Вы хотите купить ${count} рефералов для ${bot}.`);
            } else {
                alert("Неверное количество рефералов.");
            }
        }

        function showInstructions() {
            const content = `
                <h2>Инструкция</h2>
                <p>Привет, как дела?</p>
                <img src="https://t.me/bots_pic_instr" alt="Инструкция" style="width:100%; max-width:400px;">
                <a href="https://t.me/bots_instr" class="button" target="_blank">Полная инструкция</a>
                <a href="#" class="button back-button" onclick="showBots()">Назад</a>
            `;
            document.getElementById('content').innerHTML = content;
        }

        function addMyBot(bot) {
            alert(`${bot} добавлен в ваши боты.`);
        }

        function setAlarm(bot) {
            const time = prompt("Введите время в минутах (мин 15, макс 600):");
            if (time >= 15 && time <= 600) {
                alert(`Будильник установлен на ${time} минут для ${bot}.`);
            } else {
                alert("Неверное время.");
            }
        }

        function showMyBots() {
            // Логика для отображения списка ваших ботов
            alert("Список ваших ботов будет здесь.");
        }

        function showReferrals() {
            // Логика для отображения информации о рефералах
            alert("Информация о рефералах будет здесь.");
        }

        function showSettings() {
            alert("Настройки находятся в разработке.");
        }
    </script>
</body>
</html>