<?php
ini_set('xdebug.var_display_max_depth', '10');
require 'vendor/autoload.php';

use YandexTrackerApi\YandexTrackerApi\Issue\IssueService;

/* Получили задачку*/
/*$issueService = new IssueService();
$queryParam = [];
$issue = $issueService->get('ORG-1', $queryParam);*/
/* Создали задачку */
/*$issue = new \YandexTrackerApi\YandexTrackerApi\Issue\Issue();

$issue = new \YandexTrackerApi\YandexTrackerApi\Issue\Issue();

$issue->setQueue('Intensa')->setSummary('One love');

$issueService = new IssueService();

try {
    $issue = $issueService->createIssue($issue);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    print('Ошибочка! ' . $e->getMessage());
}*/

/*
$issue = new \YandexTrackerApi\YandexTrackerApi\Issue\Issue();

$issue->setSummary('Json Mapper Rules')->setDescription('Reeeeererere');

$issueService = new IssueService();


$issue = $issueService->updateIssue('ORG-7', $issue);*/
/*$issue = new \YandexTrackerApi\YandexTrackerApi\Issue\Issue();
$issueService = new IssueService();
$queryParam = [];
$issue2 = $issueService->get('ORG-1', $queryParam, $issue);*/


$issueService = new IssueService();
$chengelog = $issueService->getChangeLog('ORG-1');

echo '<pre>';
var_dump($chengelog);
echo '</pre>';
