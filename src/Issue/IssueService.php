<?php

namespace YandexTrackerApi\Issue;

use ArrayObject;
use YandexTrackerApi\YandexTrackerClient;

class IssueService extends YandexTrackerClient
{
    private $uri = '/v2/issues';

    /**
     * @param object $json
     *
     * @throws \JsonMapper_Exception
     *
     * @return Issue
     */
    public function getIssueFromJSON($json): Issue
    {
        $issue = $this->json_mapper->map(
            $json,
            new Issue()
        );

        return $issue;
    }

}