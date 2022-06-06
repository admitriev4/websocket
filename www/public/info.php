<?php
$redis = new Redis();
// подключаемся к серверу redis
$redis->connect(
    'redis',
    6379
);
// авторизуемся. 'eustatos' - пароль, который мы задали в файле `.env`
$redis->auth('test');
// публикуем сообщение в канале 'eustatos'
$redis->publish(
    'eustatos',
    json_encode([
        'test' => 'success'
    ])
);
// закрываем соединение
$redis->close();
