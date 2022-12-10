<?php
ini_set('xdebug.var_display_max_depth', '10');
require 'vendor/autoload.php';

use YandexTrackerApi\YandexTrackerApi\Issue\IssueService;
use YandexTrackerApi\YandexTrackerApi\Queue\QueueService;

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

/*
$issueService = new IssueService();
$chengelog = $issueService->getChangeLog('ORG-1');*/

/*$comment = new \YandexTrackerApi\YandexTrackerApi\Issue\Comment();
$comment->setText('11 <b>WWWWWWWWWWRRRRRRRRRRAAAAAAAAAAA</b> A A A');

$issueService = new IssueService();
$comment = $issueService->createComment($comment, 'ORG-1');*/

/*$issueService = new IssueService();
$comments = $issueService->getComments('ORG-1');*/

/*$comment = new \YandexTrackerApi\YandexTrackerApi\Issue\Comment();
$comment->setText('11 <b>WWWWWWWWWWRRRRRRRRRRAAAAAAAAAAA</b> A A A UpdatedMazfuckr');*/

/*$issueService = new IssueService();
$issueService->deleteComment('ORG-1', '638e850f43851219144d6734');
echo 111;*/
/* Получили задачку*/
$queueService = new QueueService();
$queryParam = [];
$queue = $queueService->get('ORG', $queryParam);
echo '<pre>';
var_dump($queue);
echo '</pre>';
