<?php

namespace YandexTrackerApi\YandexTrackerApi\Issue;

use ArrayObject;
use GuzzleHttp\Exception\GuzzleException;
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
     *  get all Issue list.
     *
     * @param int|string $issueIdOrKey
     * @param array $paramArray   Query Parameter key-value Array.
     * @param Issue|null $issueObject
     *
     * @return Issue
     * @throws JsonMapper_Exception
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

    /**
     * Creates a new Issue.
     *
     * @param Issue $issue
     *
     * @return Issue
     * @throws JsonMapper_Exception
     */
    public function createIssue(Issue $issue): Issue
    {
        // TODO: check for required params: summary & queue
        $data = get_object_vars($issue);

        $ret = $this->exec($this->uri, $data, 'POST');

        return $this->json_mapper->map(
            json_decode($ret),
            new Issue()
        );
    }

    /**
     * Updates Issue.
     *
     * @param string $issueKey
     * @param Issue $issue
     *
     * @return Issue
     * @throws JsonMapper_Exception
     * @throws GuzzleException
     */
    public function updateIssue(string $issueKey, Issue $issue): Issue
    {
        // TODO: PATCH Issue parent
        // TODO: check for required $issueKey
        $data = get_object_vars($issue);

        $ret = $this->exec($this->uri.'/'.$issueKey, $data, 'PATCH');

        return $this->json_mapper->map(
            json_decode($ret),
            new Issue()
        );
    }

}