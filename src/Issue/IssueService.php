<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

use ArrayObject;
use JsonMapper_Exception;
use YandexTrackerApi\YandexTrackerApi\YandexTrackerClient;

class IssueService extends YandexTrackerClient
{
    private string $uri = '/issues';

    /**
     * @param object $json
     *
     * @return Issue
     *@throws JsonMapper_Exception
     *
     */
    public function getIssueFromJSON(object $json): Issue
    {
        return $this->json_mapper->map(
            $json,
            new Issue()
        );
    }

    /**
     *  get all project list.
     *
     * @param int|string $issueIdOrKey
     * @param array $paramArray   Query Parameter key-value Array.
     * @param Issue|null $issueObject
     *
     * @return Issue class
     *@throws JsonMapper_Exception
     *
     */
    public function get(int|string $issueIdOrKey, array $paramArray = [], Issue $issueObject = null): Issue
    {
        $issueObject = ($issueObject) ? $issueObject : new Issue();

        $ret = $this->exec($this->uri.'/'.$issueIdOrKey.$this->toHttpQueryParameter($paramArray), null);

        return $issue = $this->json_mapper->map(
            json_decode($ret),
            $issueObject
        );
    }

}