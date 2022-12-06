<?php
ini_set('xdebug.var_display_max_depth', '10');
require 'vendor/autoload.php';

use YandexTrackerApi\YandexTrackerApi\Issue\IssueService;

/* Получили задачку*/
/*$issueService = new IssueService();
$queryParam = [];
$issue = $issueService->get('ORG-1', $queryParam);*/
/* Создали задачку
$issue = new \YandexTrackerApi\YandexTrackerApi\Issue\Issue();

$issue->setSummary('YoПривет из АПИ!11111111')->setQueue('ORG');

$issueService = new IssueService();

$issue = $issueService->createIssue($issue);
*/
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
