<?php
// API URL и ключ
$api_url = 'https://sociogramm.ru/panel/api/v1';
$api_key = 'y9As1h4G3FU6uIlyg2x3cJDgEGTRmLHH';

// Параметры POST-запроса
$post_data = [
    'key' => $api_key,
    'action' => 'services'
];

// Инициализация cURL
$ch = curl_init($api_url);

// Настройки cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// Выполнение запроса и получение ответа
$response = curl_exec($ch);

// Проверка на наличие ошибок cURL
if (curl_errno($ch)) {
    echo 'Ошибка запроса: ' . curl_error($ch);
    curl_close($ch);
    exit;
}

// Закрываем cURL
curl_close($ch);

// Выведем полученный ответ для отладки
echo '<pre>';
echo "Ответ от API:\n";
print_r($response);  // Выводим ответ от API
echo '</pre>';

// Декодируем ответ JSON
$services = json_decode($response, true);

// Проверим, если ли ошибки при декодировании JSON
if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Ошибка при декодировании JSON: ' . json_last_error_msg();
    exit;
}

// Проверка, что данные получены
if (!$services) {
    echo "Не удалось получить данные от API или пустой ответ.";
    exit;
}

// Выводим список услуг
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список услуг</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Список услуг</h1>
    <table>
        <thead>
            <tr>
                <th>Название услуги</th>
                <th>Категория</th>
                <th>Цена (за 1000)</th>
                <th>Мин. заказ</th>
                <th>Макс. заказ</th>
                <th>Описание</th>
                <th>Dripfeed</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($services)) : ?>
                <?php foreach ($services as $service) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($service['name']); ?></td>
                        <td><?php echo htmlspecialchars($service['category']); ?></td>
                        <td><?php echo htmlspecialchars($service['rate']); ?></td>
                        <td><?php echo htmlspecialchars($service['min']); ?></td>
                        <td><?php echo htmlspecialchars($service['max']); ?></td>
                        <td><?php echo htmlspecialchars($service['desc']); ?></td>
                        <td><?php echo htmlspecialchars($service['dripfeed'] ? 'Да' : 'Нет'); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7">Услуги не найдены.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
