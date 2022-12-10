# yandex-tracker-api

# Установка

composer require yandex-tracker-api/yandex-tracker-api

Добавьте autoload (ну вы в курсе)

Если вы ларавелолюб (одобряю), то добавьте в `config/app.php` класс `YandexTrackerApi\YandexTrackerApi\YandexTrackerApiServiceProvider`.

# Настройки

Создать `.env`, подсмотрев настройки в `.env.example`

# Юзаем

## Создание задачки

```php
<?php
require 'vendor/autoload.php';

use YandexTrackerApi\YandexTrackerApi\Issue\IssueService;

$issue = new \YandexTrackerApi\YandexTrackerApi\Issue\Issue();

$issue->setQueue('Intensa')->setSummary('One love');

$issueService = new IssueService();

try {
    $issue = $issueService->createIssue($issue);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    print('Ошибочка! ' . $e->getMessage());
}
```

Можно сделать ещё что-то, но некогда объяснять ))